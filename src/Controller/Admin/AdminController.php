<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route(path: '/admin', name: 'page_admin')]
    public function accueil(){
        return $this->render('admin/admin.html.twig');
    }
}