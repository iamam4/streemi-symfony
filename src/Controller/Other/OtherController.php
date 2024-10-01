<?php

namespace App\Controller\Other;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OtherController extends AbstractController
{

    #[Route(path: '/discover', name: 'page_discover')]
    public function discover(){
        return $this->render('other/discover.html.twig');
    }

    #[Route(path: '/category', name: 'page_category')]
    public function category(){
        return $this->render('other/category.html.twig');
    }

    #[Route(path: '/default', name: 'page_default')]
    public function default(){
        return $this->render('other/default.html.twig');
    }

    #[Route(path: '/abonnements', name: 'page_abonnements')]
    public function abonnements(){
        return $this->render('other/abonnements.html.twig');
    }

    #[Route(path: '/lists', name: 'page_lists')]
    public function lists(){
        return $this->render('other/lists.html.twig');
    }
}