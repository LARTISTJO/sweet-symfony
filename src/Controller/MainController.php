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
            echo "bonjour à vous";
            die();
        }

    /**
     * @Route("/sweet", name="main_sweethome")
     */
    public function sweethome()
    {
        echo "Bonjour à vous, je vous aime";
        die();
    }
}