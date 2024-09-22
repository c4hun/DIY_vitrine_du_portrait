<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $firstname = " World";
        $myarray = ["ゆうた","あやか","はるこ","えり"];

        return $this->render('home/index.html.twig', [
            'salutation_object' => $firstname,
            'myarray' => $myarray
        ]);
    }
}
