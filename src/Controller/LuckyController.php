<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
     /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            error_log($e->getMessage());
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}