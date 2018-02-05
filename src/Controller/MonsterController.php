<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MonsterController extends Controller
{
    /**
     * @Route("/monsters", name="monster")
     */
    public function index()
    {
// Récuperer Doctrine
	    $em = $this->getDoctrine()->getManager();
	    // Renvoyer le repo de l'entité sur laquelle on veut travailler
	    // données stockés dans un tableau
	    $monsterCollection = $em->getRepository('App:Monster')->findAll();
	    // injecter les données récuperées dans une vue
		return $this->render('Monster/index.html.twig', [
			'monsterCollection' => $monsterCollection
		]);    }
}
