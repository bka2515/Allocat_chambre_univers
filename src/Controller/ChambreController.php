<?php

namespace App\Controller;

use App\Entity\Chambre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index()
    {
        $repo=$this->getDoctrine()->getRepository(chambre::class);
        $chambres=$repo->findAll();
        return $this->render('chambre/index.html.twig', [
            'controller_name' => 'ChambreController',
            'chambres'=>$chambres
        ]);
    }
}