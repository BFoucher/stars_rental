<?php

namespace StarsRentalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use StarsRentalBundle\Entity\Ship;
use StarsRentalBundle\Form\ShipType;

/**
 * Ship controller.
 *
 * @Route("/ship")
 */
class ShipController extends Controller
{
    /**
     * Lists all Ship entities.
     *
     * @Route("/", name="ship_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ships = $em->getRepository('StarsRentalBundle:Ship')->findAll();

        return $this->render('ship/index.html.twig', array(
            'ships' => $ships,
        ));
    }

    /**
     * Creates a new Ship entity.
     *
     * @Route("/new", name="ship_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ship = new Ship();
        $form = $this->createForm('StarsRentalBundle\Form\ShipType', $ship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ship);
            $em->flush();

            return $this->redirectToRoute('ship_show', array('id' => $ship->getId()));
        }

        return $this->render('ship/new.html.twig', array(
            'ship' => $ship,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ship entity.
     *
     * @Route("/{id}", name="ship_show")
     * @Method("GET")
     */
    public function showAction(Ship $ship)
    {
        $deleteForm = $this->createDeleteForm($ship);

        return $this->render('ship/show.html.twig', array(
            'ship' => $ship,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ship entity.
     *
     * @Route("/{id}/edit", name="ship_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ship $ship)
    {
        $deleteForm = $this->createDeleteForm($ship);
        $editForm = $this->createForm('StarsRentalBundle\Form\ShipType', $ship);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ship);
            $em->flush();

            return $this->redirectToRoute('ship_edit', array('id' => $ship->getId()));
        }

        return $this->render('ship/edit.html.twig', array(
            'ship' => $ship,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ship entity.
     *
     * @Route("/{id}", name="ship_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ship $ship)
    {
        $form = $this->createDeleteForm($ship);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ship);
            $em->flush();
        }

        return $this->redirectToRoute('ship_index');
    }

    /**
     * Creates a form to delete a Ship entity.
     *
     * @param Ship $ship The Ship entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ship $ship)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ship_delete', array('id' => $ship->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
