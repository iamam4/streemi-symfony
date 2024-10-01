<?php

namespace App\Controller\Movie;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{

    #[Route(path: '/movie/detail', name: 'page_detail')]
    public function index(){
        return $this->render('movie/detail.html.twig');
    }

    #[Route(path: '/movie/detail/serie', name: 'page_detail_serie')]
    public function create(){
        return $this->render('movie/detail_serie.html.twig');
    }
    
}