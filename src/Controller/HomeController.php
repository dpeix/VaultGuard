<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $placeholderCards = [
            ['title' => 'Bienvenue sur VaultGuard', 'body' => 'Vos mots de passe et secrets seront affichés ici. La gestion complète arrive bientôt.', 'color' => 'bg-light'],
            ['title' => 'Exemple — Compte mail', 'body' => 'Identifiants et notes pour votre messagerie.', 'color' => ''],
            ['title' => 'Exemple — API', 'body' => 'Clés API et secrets à garder en sécurité.', 'color' => ''],
        ];

        return $this->render('home/index.html.twig', [
            'placeholderCards' => $placeholderCards,
        ]);
    }
}
