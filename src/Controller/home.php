<?php


namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class home extends AbstractController
{
    /**
     * @Route("/home", name="homepagina")
     */
    public function homepage()
    {
        return $this->render("article/home.html.twig");
    }
}