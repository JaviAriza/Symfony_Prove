<?php

namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController{

    #[Route('/lucky/number')] 
    public function number(): Response{
        $number = random_int(0,100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}