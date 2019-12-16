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

    /**
     * @Route("/contact", name="contactpagina")
     */
    public function contactpage()
    {
        return $this->render("views/bezoeker/contact.html.twig");
    }

    /**
     * @Route("/training", name="trainingpagina")
     */
    public function trainingpage()
    {
        return $this->render("views/bezoeker/training.html.twig");
    }

    /**
     * @Route("/inschrijven", name="inschrijfpagina")
     */
    public function inschrijfpage()
    {
        return $this->render("views/bezoeker/inschrijven.html.twig");
    }

}