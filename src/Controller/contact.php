<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class contact extends AbstractController
{
    /**
     * @Route("/contact", name="contactpagina")
     */
    public function contactpage()
    {
        return $this->render("article/contact.html.twig");
    }
}