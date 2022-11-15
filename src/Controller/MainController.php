<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController{


    public function index():Response{
        return $this->render("main/index.html.twig");
    }


    public function aboutUs():Response{
        return $this->render("main/about-us.html.twig");
    }


    public function legalStuff():Response{
        return $this->render("main/legal-stuff.html.twig");
    }
}