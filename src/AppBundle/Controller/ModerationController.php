<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModerationController extends Controller
{

    /**
     * @Route("/moderation", name="moderation")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $series_valide = $em->getRepository('AppBundle:Serie')->findSeriesActive();
//        $acteurs_valide = $em->getRepository('AppBundle:Acteur')->findActeursActive();
//        $utilisateurs = $em->getRepository('AppBundle:Utilisateur')->findAll();


        return $this->render('moderation/index.html.twig', array(
                    'series' => $series_valide,
        ));
    }

}
