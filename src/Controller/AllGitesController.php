<?php

namespace App\Controller;

use App\Entity\Equipements;
use App\Entity\Gites;
use App\Repository\EquipementsRepository;
use App\Repository\GitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AllGitesController extends AbstractController
{
    #[Route('/index', name: 'app_all_gites')]
    #[Route('/', name: 'app_all_gites')]
    public function index(GitesRepository $gitesRepository): Response
    {

        $result = $gitesRepository->findAllTable();


        return $this->render('all_gites/index.html.twig', [
            'controller_name' => 'AllGitesController',
            'afficher' => $result,
        
        ]);


    }
}
