<?php

namespace App\Controller;

use App\Entity\TarifLocation;
use App\Form\TarifLocationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddTarifLocationController extends AbstractController
{
    #[Route('/add/tarif/location', name: 'app_add_tarif_location')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tarifLocation = new TarifLocation();

        $form = $this->createForm(TarifLocationType::class, $tarifLocation);
        $form->handleRequest($request);

        if ($form-> isSubmitted() && $form->isValid()) {

            $entityManager->persist($tarifLocation);

            $entityManager->flush();

            return $this->redirectToRoute('app_add_tarif_location');
        }

        return $this->render('add_tarif_location/index.html.twig', [
            'controller_name' => 'AddTarifLocationController',
            'form' => $form,
        ]);
    }
}
