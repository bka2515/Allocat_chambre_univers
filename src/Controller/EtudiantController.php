<?php

namespace App\Controller;

use App\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="etudiant")
     */
    public function index()
    {
        $repo=$this->getDoctrine()->getRepository(Etudiant::class);
        $etudiant=$repo->findAll();
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
            'etudiants'=>$etudiant
        ]);
    }
}
