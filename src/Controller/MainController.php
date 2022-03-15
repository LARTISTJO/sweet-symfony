<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /**
     * @Route("/", name="main_home")
     */
        public function home()
        {
            return $this->render("main/home.html.twig");
        }

    /**
     * @Route("/sweet", name="main_sweethome")
     */
    public function sweethome()
    {
        $serie = [
            "title" => "1883",
            "year" => 2021 ];
        return $this->render("main/sweet.html.twig", [
            "mySerie" => $serie,
            "autreVar" => 412412
        ]);
    }
}
