<?php

namespace App\Controller\Auth;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{

    #[Route(path: '/login', name: 'page_login')]
    public function login(){
        return $this->render('auth/login.html.twig');
    }

    #[Route(path: '/register', name: 'page_register')]
    public function register(){
        return $this->render('auth/register.html.twig');
    }

    #[Route(path: '/confirm', name: 'page_confirm')]
    public function logout(){
        return $this->render('auth/confirm.html.twig');
    }

    #[Route(path: '/forgot', name: 'page_forgot_password')]
    public function forgotPassword(){
        return $this->render('auth/forgot.html.twig');
    }

    #[Route(path: '/reset', name: 'page_reset_password')]
    public function resetPassword(){
        return $this->render('auth/reset.html.twig');
    }
}