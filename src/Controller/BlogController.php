<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Services\ComplexObject;
use App\Services\MailLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        $mailLogger = new MailLogger();
        dump($mailLogger->sendMail());

        return $this->render('base.html.twig');
    }
}
