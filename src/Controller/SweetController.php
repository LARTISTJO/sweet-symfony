<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SweetController extends AbstractController
{
    /**
     * @Route("/sweet", name="sweet_list")
     */
    public function list(): Response
    {
        //todo: aller chercher les séries dans la bdd

        return $this->render('sweet/list.html.twig', [

        ]);
    }

    /**
     * @Route("/sweet/details/{id}", name="sweet_details")
     */
    public function details(int $id): Response
    {
        //todo: aller chercher les séries dans la bdd

        return $this->render('sweet/detail.html.twig', [

        ]);
    }

    /**
     * @Route("/sweet/create", name="sweet_create")
     */
    public function create(): Response
    {
        //todo: aller chercher les séries dans la bdd

        return $this->render('sweet/create.html.twig', [

        ]);
    }
}
