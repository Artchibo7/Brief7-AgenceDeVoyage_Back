<?php

namespace App\Controller\Api;

use App\Entity\Reservation;
use App\Entity\Statut;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/reservation', name: 'api_reservation_')]
class ReservationController extends AbstractController
{
    #[Route('/new', name: "new", methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $em, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        $requestData = json_decode($request->getContent(), true);
        $statutId = $requestData['statut']['id'];
        $voyageID = $requestData['voyage']['id'];

        $statut = $em->getRepository(Statut::class)->find($statutId);
        if (!$statut) {
            return new JsonResponse(['message' => 'Invalid statut ID provided'], Response::HTTP_BAD_REQUEST);
        }
        $voyage = $em->getRepository(Voyage::class)->find($voyageID);
        if (!$voyage) {
            return new JsonResponse(['message' => 'Invalid voyage ID provided'], Response::HTTP_BAD_REQUEST);
        }

        $reservation = $serializer->deserialize($request->getContent(), Reservation::class, 'json', ['groups' => 'api_reservation_new']);
        $reservation->setStatut($statut);

        $reservation->setNom($requestData['nom']);
        $reservation->setPrenom($requestData['prenom']);
        $reservation->setEmail($requestData['email']);
        $reservation->setTelephone($requestData['telephone']);

        $errors = $validator->validate($reservation);

        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return new JsonResponse($errorMessages, Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {
            $em->persist($reservation);
            $em->flush();

            return new JsonResponse(['message' => 'Le reservation a bien été envoye'], Response::HTTP_CREATED);
        }
    }
}
