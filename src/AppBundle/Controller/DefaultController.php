<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();

        $series = $em->getRepository('AppBundle:Serie')->findAll();
        // To do Catch series with low rating
        $seriesLowRating = $em->getRepository('AppBundle:Serie')->findAll();
        return $this->render('index.html.twig', array(
                    'series' => $series,
                    'seriesLowRating' => $seriesLowRating,
        ));
    }

}
