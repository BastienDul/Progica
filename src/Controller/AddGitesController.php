<?php

namespace App\Controller;



use App\Entity\Gites;
use App\Form\AddGitesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddGitesController extends AbstractController
{
    #[Route('/add/gites', name: 'app_add_gites')]
    public function addGites(Request $request, EntityManagerInterface $entityManager): Response
    {

        $gites= new Gites();

        $equipementsList = $this->getDoctrine()->getRepository(Equipements::class)->findAll();

        $form = $this->createForm(AddGitesType::class, $gites, [
            'equipements_list' => $equipementsList,
        ]);
        $form->handleRequest($request);

        if ($form-> isSubmitted() && $form->isValid()) {


            $entityManager->persist($gites->getProprietaires());
            $entityManager->persist($gites->getContact());;
            $entityManager->persist($gites);


            $entityManager->flush();

            return $this->redirectToRoute('app_add_gites');
        }




        return $this->render('add_gites/index.html.twig', [
            'controller_name' => 'AddGitesController',
            'form' => $form,
        ]);
    }
}
