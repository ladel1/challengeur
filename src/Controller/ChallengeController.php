<?php 

namespace App\Controller;

use App\Entity\Challenge;
use App\Repository\ChallengeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ChallengeController extends AbstractController{

    private $challengeRepository;

    public function __construct(ChallengeRepository $challengeRepository)
    {
        $this->challengeRepository = $challengeRepository;
    }

    public function detail(Challenge $challenge ):Response{
        return $this->render("challenge/detail.html.twig",compact("challenge"));
    }


    public function add():Response{
        $challenge = (new Challenge)->setNom("test 2")
                                    ->setDescription("blablabla")
                                    ->setNbParticpants(12)
                                    ->setDateHeure(new \DateTime())
                                    ->setCreateur("Auteur 2");
        $this->challengeRepository->add($challenge,true);
        
        return $this->render("challenge/add.html.twig");
    }

    public function list():Response{
        $challenges = $this->challengeRepository->findAll();
        return $this->render("challenge/list.html.twig",compact("challenges"));
    }
}