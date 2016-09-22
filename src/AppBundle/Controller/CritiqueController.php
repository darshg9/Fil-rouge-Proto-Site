<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Critique;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Critique controller.
 *
 * @Route("/critique")
 */
class CritiqueController extends Controller
{

    /**
     * Lists all Critique entities.
     *
     * @Route("/", name="critique_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $critiques = $em->getRepository('AppBundle:Critique')->findAll();

        return $this->render('critique/index.html.twig', array(
                    'critiques' => $critiques,
        ));
    }

    /**
     * Creates a new Critique entity.
     *
     * @Route("/new/{id}", name="critique_new",
     *       requirements={
     *          "id": "\d+"
     *      })
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id)
    {
        $critique = new Critique();
        $form = $this->createForm('AppBundle\Form\CritiqueType', $critique);
        $form->handleRequest($request);
        $critique->setDateCritique(new DateTime('now'));


        if ($form->isSubmitted() && $form->isValid())
        {

            $auteur = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $serie = $em->getRepository("AppBundle:Serie")->find($id);

            $critique->setAuteur($auteur)->setSerie($serie)->setSignale(false);
            $em->persist($critique);
            $em->persist($auteur);
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_show', array('id' => $id));
        }

        return $this->render('critique/new.html.twig', array(
                    'critique' => $critique,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Critique entity.
     *
     * @Route("/{id}", name="critique_show")
     * @Method("GET")
     */
    public function showAction(Critique $critique)
    {
        $deleteForm = $this->createDeleteForm($critique);

        return $this->render('critique/show.html.twig', array(
                    'critique' => $critique,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Critique entity.
     *
     * @Route("/{id}/edit", name="critique_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Critique $critique)
    {
        $deleteForm = $this->createDeleteForm($critique);
        $editForm = $this->createForm('AppBundle\Form\CritiqueType', $critique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($critique);
            $em->flush();

            return $this->redirectToRoute('critique_edit', array('id' => $critique->getId()));
        }

        return $this->render('critique/edit.html.twig', array(
                    'critique' => $critique,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Critique entity.
     *
     * @Route("/{id}", name="critique_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Critique $critique)
    {
        $form = $this->createDeleteForm($critique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($critique);
            $em->flush();
        }

        return $this->redirectToRoute('critique_index');
    }

    /**
     * Creates a form to delete a Critique entity.
     *
     * @param Critique $critique The Critique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Critique $critique)
    {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('critique_delete', array('id' => $critique->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * @Route("/vote/{id}/{vote}", name="critique_vote")
     *          requirements={
     *          "vote": "\d+"
     *      })
     * @Method("GET")
     */
    public function voteAction(Critique $critique, $vote)
    {

        $critique->setNote($critique->getNote() + $vote);
        $utilisateur = $this->getUser();
        $utilisateur->addVoteCritique($critique->getId());
        $em = $this->getDoctrine()->getManager();
        $em->persist($critique);
        $em->persist($utilisateur);
        $em->flush();

        return $this->redirectToRoute('serie_show', ["id" => $critique->getSerie()->getId()]);
    }

    /**
     * @Route("/signale/{id}", name="critique_signale")
     */
    public function signalAction(Critique $critique)
    {
        $critique->setSignale(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($critique);
        $em->flush();
        return $this->redirectToRoute('serie_show', ["id" => $critique->getSerie()->getId()]);
    }

    /////////////////********|DELETE CRITIQUE BY THE GET METHOD AND REDITRECT TO THE MODERATION PANEL|********\\\\\\\\\\\\\\\\\

    /**
     * @Route("/delete/{id}", name="critique_delete_get")
     */
    public function deleteGetAction(Critique $critique)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($critique);
        $em->flush();
        return $this->redirectToRoute('moderation');
    }

}
