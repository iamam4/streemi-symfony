<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'page_home')]
    public function accueil(){
        return $this->render('index.html.twig');
    }
}