<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Critique;
use AppBundle\Entity\Serie;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Serie controller.
 *
 * @Route("/serie")
 */
class SerieController extends Controller
{

    /**
     * Lists all Serie entities.
     *
     * @Route("/", name="serie_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $series = $em->getRepository('AppBundle:Serie')->findSeriesActive();

        return $this->render('serie/index.html.twig', array(
                    'series' => $series,
        ));
    }

    /**
     * Creates a new Serie entity.
     *
     * @Route("/new", name="serie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $serie = new Serie();
        $form = $this->createForm('AppBundle\Form\SerieType', $serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $auteur = $this->getUser();
            $serie->setAuteurProposition($auteur)->setValide(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->persist($auteur);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $serie->getId()));
        }

        return $this->render('serie/new.html.twig', array(
                    'serie' => $serie,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Serie entity.
     *
     * @Route("/{id}", name="serie_show")
     * @Method("GET")
     */
    public function showAction(Serie $serie)
    {
        $em = $this->getDoctrine()->getManager();

        $deleteForm = $this->createDeleteForm($serie);
        var_dump('word');
        var_dump('word');

        $saison = $em->getRepository('AppBundle:Serie')->findLastSaison($serie->getId());
        $critique = new Critique();
        $acteurs_serie = $em->getRepository('AppBundle:Serie')->findActeurs($serie->getId());
        $critiques_serie = $em->getRepository('AppBundle:Serie')->findCritiques($serie->getId());

        $form = $this->createForm('AppBundle\Form\CritiqueType', $critique);

        return $this->render('serie/show.html.twig', array(
                    'serie' => $serie,
                    'acteurs_serie' => $acteurs_serie,
                    'critiques_serie' => $critiques_serie,
                    'critique' => $critique,
                    'saison' => $saison,
                    'delete_form' => $deleteForm->createView(),
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Serie entity.
     *
     * @Route("/{id}/edit", name="serie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Serie $serie)
    {
        $deleteForm = $this->createDeleteForm($serie);
        $editForm = $this->createForm('AppBundle\Form\SerieType', $serie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_edit', array('id' => $serie->getId()));
        }

        return $this->render('serie/edit.html.twig', array(
                    'serie' => $serie,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Serie entity.
     *
     * @Route("/{id}", name="serie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Serie $serie)
    {
        $form = $this->createDeleteForm($serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serie);
            $em->flush();
        }

        return $this->redirectToRoute('serie_index');
    }

    /////////////////********|DELETE SERIE BY THE GET METHOD AND REDITRECT TO THE MODERATION PANEL|********\\\\\\\\\\\\\\\\\

    /**
     * @Route("/delete/{id}", name="serie_delete_get")
     */
    public function deleteGetAction(Serie $serie)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($serie);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

    /**
     * Creates a form to delete a Serie entity.
     *
     * @param Serie $serie The Serie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Serie $serie)
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('serie_delete', array('id' => $serie->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
