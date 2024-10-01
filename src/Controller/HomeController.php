<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'page_home')]
    public function accueil(): Response
    {
        $movies = [
            [
                'title' => 'Tenet',
                'posterUrl' => 'https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg',
                'rating' => '7.4',
                'isInWatchlist' => false
            ],
            [
                'title' => 'Fight Club',
                'posterUrl' => 'https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg',
                'rating' => '8.8',
                'isInWatchlist' => true
            ],
            [
                'title' => 'Dune',
                'posterUrl' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg',
                'rating' => '8.1',
                'isInWatchlist' => false
            ],
            [
                'title' => 'Dune',
                'posterUrl' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg',
                'rating' => '8.1',
                'isInWatchlist' => false
            ],
            [
                'title' => 'Dune',
                'posterUrl' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg',
                'rating' => '8.1',
                'isInWatchlist' => false
            ],
        ];

        return $this->render('index.html.twig', [
            'movies' => $movies
        ]);
    }
}