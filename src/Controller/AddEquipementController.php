<?php

namespace App\Controller;

use App\Entity\Equipements;
use App\Form\EquipementsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddEquipementController extends AbstractController
{
    #[Route('/add/equipement', name: 'app_add_equipement')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $equipement = new Equipements();

        $form = $this->createForm(EquipementsType::class, $equipement);
        $form->handleRequest($request);

        if ($form-> isSubmitted() && $form->isValid()) {

            $entityManager->persist($equipement);

            $entityManager->flush();

            return $this->redirectToRoute('app_add_equipement');
        }





        return $this->render('add_equipement/index.html.twig', [
            'controller_name' => 'AddEquipementController',
            'form' => $form,
        ]);
    }
}
