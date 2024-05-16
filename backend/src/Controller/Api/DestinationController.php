<?php

namespace App\Controller\Api;

use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/destination', name: 'api_destination_')]
class DestinationController extends AbstractController
{
    #[Route('s', name: 'index', methods: ['GET'])]
    public function index(DestinationRepository $destinationRepository): Response
    {
        $destination = $destinationRepository->findAll();

        return $this->json($destination, context: ["groups" => "api_destination_index"]);
    }
}
