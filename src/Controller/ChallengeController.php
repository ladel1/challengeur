<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ChallengeController extends AbstractController{


    public function detail():Response{
        return $this->render("challenge/detail.html.twig");
    }


    public function add():Response{
        return $this->render("challenge/add.html.twig");
    }


    public function list():Response{
        return $this->render("challenge/list.html.twig");
    }
}