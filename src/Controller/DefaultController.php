<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Clothes;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage_show")
     */
    public function index()
    {
        $clothes = $this->getDoctrine()->getRepository(Clothes::class)->findAll();
        // replace this example code with whatever you need
        return $this->render('index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'clothes' => $clothes
        ]);
    }
}
