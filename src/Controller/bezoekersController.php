<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class bezoekersController extends AbstractController
{
    /**
     * @Route("/home", name="homepagina")
     */
    public function homepage()
    {
        return $this->render("views/bezoeker/home.html.twig");
    }
}