<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StatsController extends AbstractController
{
    #[Route('/api/stats', methods: ['GET'])]
    public function stats(): JsonResponse
    {
        $data = [
            ["city" => "Paris", "unemployment_rate" => 7.1],
            ["city" => "Lyon", "unemployment_rate" => 6.5],
            ["city" => "Marseille", "unemployment_rate" => 9.3]
        ];

        return new JsonResponse($data);
    }
}