<?php


namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class training extends AbstractController
{
    /**
     * @Route("/training", name="trainingpagina")
     */
    public function trainingpage()
    {
        return $this->render("article/training.html.twig");
    }
}