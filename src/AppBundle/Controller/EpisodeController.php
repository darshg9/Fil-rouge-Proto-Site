<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Episode;
use AppBundle\Form\EpisodeType;

/**
 * Episode controller.
 *
 * @Route("/episode")
 */
class EpisodeController extends Controller
{

    /**
     * Lists all Episode entities.
     *
     * @Route("/", name="episode_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('AppBundle:Episode')->findAll();

        return $this->render('episode/index.html.twig', array(
                    'episodes' => $episodes,
        ));
    }

    /**
     * Creates a new Episode entity.
     *
     * @Route("/new/{id}", name="episode_new",
     *       requirements={
     *          "id": "\d+"
     *      })
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id)
    {
        $episode = new Episode();
        $form = $this->createForm('AppBundle\Form\EpisodeType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $auteur = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $saison = $em->getRepository("AppBundle:Saison")->find($id);
            $episode->setAuteurProposition($auteur)->setSaison($saison)->setValide(false);
            $em->persist($saison);
            $em->persist($episode);
            $em->persist($auteur);
            $em->flush();

            return $this->redirectToRoute('episode_show', array('id' => $episode->getId()));
        }

        return $this->render('episode/new.html.twig', array(
                    'episode' => $episode,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Episode entity.
     *
     * @Route("/{id}", name="episode_show")
     * @Method("GET")
     */
    public function showAction(Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();

        $deleteForm = $this->createDeleteForm($episode);
        $serie = $episode->getSaison()->getSerie();
        $saison_all = $em->getRepository('AppBundle:Serie')->findAllSaison($serie->getId());
        $acteurs_serie = $em->getRepository('AppBundle:Serie')->findActeurs($serie->getId());

        return $this->render('episode/show.html.twig', array(
                    'episode' => $episode,
                    'acteurs_serie' => $acteurs_serie,
                    'delete_form' => $deleteForm->createView(),
                    'saisons_all' => $saison_all,
        ));
    }

    /**
     * Displays a form to edit an existing Episode entity.
     *
     * @Route("/{id}/edit", name="episode_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('AppBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('episode_edit', array('id' => $episode->getId()));
        }

        return $this->render('episode/edit.html.twig', array(
                    'episode' => $episode,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Episode entity.
     *
     * @Route("/{id}", name="episode_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }

        return $this->redirectToRoute('episode_index');
    }

    /**
     * Creates a form to delete a Episode entity.
     *
     * @param Episode $episode The Episode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('episode_delete', array('id' => $episode->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
