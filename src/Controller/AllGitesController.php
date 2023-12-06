<?php

namespace App\Controller;

use App\Entity\Equipements;
use App\Entity\Gites;
use App\Form\SearchType;
use App\Model\SearchData;
use App\Repository\EquipementsRepository;
use App\Repository\GitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AllGitesController extends AbstractController
{
    #[Route('/', name: 'app_all_gites')]
    public function index(GitesRepository $gitesRepository, Request $request): Response
    {

        $result = $gitesRepository->findAllTable();

        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        $gites = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            // Vous devrez implémenter la logique de recherche dans votre GiteRepository
            $gites = $gitesRepository->findByEquipementsCriteria($data);

            // return $this->redirectToRoute('app_all_gites');
        }

        return $this->render('all_gites/index.html.twig', [
            // 'afficher' => $result,
            'form' => $form->createView(),
            'gites' => $gites,
        ]);

        // return $this->render('all_gites/index.html.twig', [
        //     'controller_name' => 'AllGitesController',
        //     'afficher' => $result,
        //     // 'searchForm' => $searchForm->createView(),
        //     // 'resultat' => $searchResult,
        // ]);


    }
}
