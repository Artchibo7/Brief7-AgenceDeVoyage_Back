<?php

namespace App\Controller\Api;

use App\Entity\Contact;
use App\Entity\Statut;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/contact', name: 'api_contact_')]
class ContactController extends AbstractController
{
    #[Route('/new', name: "new", methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $em, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        $requestData = json_decode($request->getContent(), true);
        $statutId = $requestData['statut']['id'];

        $statut = $em->getRepository(Statut::class)->find($statutId);
        if (!$statut) {
            return new JsonResponse(['message' => 'Invalid statut ID provided'], Response::HTTP_BAD_REQUEST);
        }

        $contact = $serializer->deserialize($request->getContent(), Contact::class, 'json', ['groups' => 'api_contact_new']);
        $contact->setStatut($statut);

        $contact->setNom($requestData['nom']);
        $contact->setPrenom($requestData['prenom']);
        $contact->setEmail($requestData['email']);
        $contact->setTelephone($requestData['telephone']);
        $contact->setMessage($requestData['message']);

        $errors = $validator->validate($contact);

        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return new JsonResponse($errorMessages, Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {
            $em->persist($contact);
            $em->flush();

            return new JsonResponse(['message' => 'Le contact a bien été envoye'], Response::HTTP_CREATED);
        }
    }
}
