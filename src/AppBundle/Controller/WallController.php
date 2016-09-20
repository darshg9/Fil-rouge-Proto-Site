<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Wall controller.
 *
 * @Route("/wall")
 */
class WallController extends Controller
{

    /**
     * @Route("/{id}", name="wall_show",
     *       requirements={
     *          "id": "\d+"
     *      })
     */
    public function showAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository("AppBundle:Utilisateur")->getInfo($em, $id);
        $critiquesByUser = $em->getRepository("AppBundle:Critique")->getCritiquesByUser($em, $id);
        $critiquesByAbonnements = $em->getRepository("AppBundle:Critique")->getCritiquesByAbonnements($em, $id);

        return $this->render('Wall/wall.html.twig', ["utilisateur" => $utilisateur, "critiquesByUser" => $critiquesByUser, "critiquesByAbonnements" => $critiquesByAbonnements]);

    }

}
