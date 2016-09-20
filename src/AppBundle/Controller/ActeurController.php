<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Acteur;
use AppBundle\Form\ActeurType;

/**
 * Acteur controller.
 *
 * @Route("/acteur")
 */
class ActeurController extends Controller
{

    /**
     * Lists all Acteur entities.
     *
     * @Route("/", name="acteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acteurs = $em->getRepository('AppBundle:Acteur')->findActeursActive();
        return $this->render('acteur/index.html.twig', array(
                    'acteurs' => $acteurs,
        ));
    }

    /**
     * Creates a new Acteur entity.
     *
     * @Route("/new", name="acteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acteur = new Acteur();
        $form = $this->createForm('AppBundle\Form\ActeurType', $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $auteur = $this->getUser();
            $acteur->setAuteurProposition($auteur)->setValide(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->persist($auteur);
            $em->flush();

            return $this->redirectToRoute('acteur_show', array('id' => $acteur->getId()));
        }

        return $this->render('acteur/new.html.twig', array(
                    'acteur' => $acteur,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Acteur entity.
     *
     * @Route("/{id}", name="acteur_show")
     * @Method("GET")
     */
    public function showAction(Acteur $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);
        $em = $this->getDoctrine()->getManager();
        $series_acteur = $em->getRepository("AppBundle:Acteur")->findSeries($acteur->getId());
        $popular_serie = $em->getRepository('AppBundle:Acteur')->popularSerie($acteur->getId());
        $acteur_collaboration = null;
        foreach ($popular_serie as $s)
        {
            $acteur_collaboration = $em->getRepository('AppBundle:Acteur')->collaborationActeur($s->getId());
        }
        return $this->render('acteur/show.html.twig', array(
                    'acteur' => $acteur,
                    'series' => $series_acteur,
                    'popularSerie' => $popular_serie,
                    'acteurCollaboration' => $acteur_collaboration,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acteur entity.
     *
     * @Route("/{id}/edit", name="acteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Acteur $acteur)
    {
        $deleteForm = $this->createDeleteForm($acteur);
        $editForm = $this->createForm('AppBundle\Form\ActeurType', $acteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteur_edit', array('id' => $acteur->getId()));
        }

        return $this->render('acteur/edit.html.twig', array(
                    'acteur' => $acteur,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Acteur entity.
     *
     * @Route("/{id}", name="acteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Acteur $acteur)
    {
        $form = $this->createDeleteForm($acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }

        return $this->redirectToRoute('acteur_index');
    }

    /////////////////********|DELETE ACTEUR BY THE GET METHOD AND REDITRECT TO THE MODERATION PANEL|********\\\\\\\\\\\\\\\\\

    /**
     * @Route("/delete/{id}", name="acteur_delete_get")
     */
    public function deleteGetAction(Acteur $acteur)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($acteur);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

    /**
     * Creates a form to delete a Acteur entity.
     *
     * @param Acteur $acteur The Acteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Acteur $acteur)
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('acteur_delete', array('id' => $acteur->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
