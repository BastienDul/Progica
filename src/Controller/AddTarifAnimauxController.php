<?php

namespace App\Controller;

use App\Entity\TarifAnimaux;
use App\Form\TarifAnimauxType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddTarifAnimauxController extends AbstractController
{
    #[Route('/add/tarif/animaux', name: 'app_add_tarif_animaux')]

    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tarifAnimaux = new TarifAnimaux();

        $form = $this->createForm(TarifAnimauxType::class, $tarifAnimaux);
        $form->handleRequest($request);

        if ($form-> isSubmitted() && $form->isValid()) {

            $entityManager->persist($tarifAnimaux);

            $entityManager->flush();

            return $this->redirectToRoute('app_add_tarif_animaux');
        }

        return $this->render('add_tarif_animaux/index.html.twig', [
            'controller_name' => 'AddTarifLocationController',
            'form' => $form,
        ]);
    }
}

