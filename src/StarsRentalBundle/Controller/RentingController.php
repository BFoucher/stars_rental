<?php

namespace StarsRentalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use StarsRentalBundle\Entity\Renting;
use StarsRentalBundle\Form\RentingType;

/**
 * Renting controller.
 *
 * @Route("/renting")
 */
class RentingController extends Controller
{
    /**
     * Lists all Renting entities.
     *
     * @Route("/", name="renting_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rentings = $em->getRepository('StarsRentalBundle:Renting')->findBy(array(), array('id' => 'DESC'));

        return $this->render('renting/index.html.twig', array(
            'rentings' => $rentings,
        ));
    }

    /**
     * Creates a new Renting entity.
     *
     * @Route("/new", name="renting_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $renting = new Renting();
        $form = $this->createForm('StarsRentalBundle\Form\RentingType', $renting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($renting);
            $em->flush();

            return $this->redirectToRoute('renting_show', array('id' => $renting->getId()));
        }

        return $this->render('renting/new.html.twig', array(
            'renting' => $renting,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Renting entity.
     *
     * @Route("/{id}", name="renting_show")
     * @Method("GET")
     */
    public function showAction(Renting $renting)
    {
        $deleteForm = $this->createDeleteForm($renting);

        return $this->render('renting/show.html.twig', array(
            'renting' => $renting,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Renting entity.
     *
     * @Route("/{id}/edit", name="renting_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Renting $renting)
    {
        $deleteForm = $this->createDeleteForm($renting);
        $editForm = $this->createForm('StarsRentalBundle\Form\RentingType', $renting);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($renting);
            $em->flush();

            return $this->redirectToRoute('renting_edit', array('id' => $renting->getId()));
        }

        return $this->render('renting/edit.html.twig', array(
            'renting' => $renting,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Renting entity.
     *
     * @Route("/{id}", name="renting_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Renting $renting)
    {
        $form = $this->createDeleteForm($renting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($renting);
            $em->flush();
        }

        return $this->redirectToRoute('renting_index');
    }

    /**
     * Creates a form to delete a Renting entity.
     *
     * @param Renting $renting The Renting entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Renting $renting)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('renting_delete', array('id' => $renting->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
