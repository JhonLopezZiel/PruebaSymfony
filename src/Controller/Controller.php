<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index()
    {
        $number = random_int(0, 100);
        return $this->render('/index.html.twig', [
            'controller_name' => 'Mundo',
            'number' => $number,
        ]);
    }
    
}
