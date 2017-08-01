<?php

namespace FitnessBundle\Controller;

use FitnessBundle\Entity\Administrador;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Administrador controller.
 *
 */
class AdministradorController extends Controller
{
    /**
     * Lists all administrador entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $administradors = $em->getRepository('FitnessBundle:Administrador')->findAll();
        
        return $this->render('FitnessBundle:administrador:index.html.twig', array(
            'administradors' => $administradors,
        ));
    }

    /**
     * Creates a new administrador entity.
     *
     */
    public function newAction(Request $request)
    {
        $administrador = new Administrador();
        $form = $this->createForm('FitnessBundle\Form\AdministradorType', $administrador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($administrador);
            $em->flush();

            return $this->redirectToRoute('administrador_show', array('id' => $administrador->getId()));
        }

        return $this->render('FitnessBundle:administrador:new.html.twig', array(
            'administrador' => $administrador,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a administrador entity.
     *
     */
    public function showAction(Administrador $administrador)
    {
        $deleteForm = $this->createDeleteForm($administrador);

        return $this->render('FitnessBundle:administrador:show.html.twig', array(
            'administrador' => $administrador,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing administrador entity.
     *
     */
    public function editAction(Request $request, Administrador $administrador)
    {
        $deleteForm = $this->createDeleteForm($administrador);
        $editForm = $this->createForm('FitnessBundle\Form\AdministradorType', $administrador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('administrador_edit', array('id' => $administrador->getId()));
        }

        return $this->render('FitnessBundle:administrador:edit.html.twig', array(
            'administrador' => $administrador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a administrador entity.
     *
     */
    public function deleteAction(Request $request, Administrador $administrador)
    {
        $form = $this->createDeleteForm($administrador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($administrador);
            $em->flush();
        }

        return $this->redirectToRoute('administrador_index');
    }

    /**
     * Creates a form to delete a administrador entity.
     *
     * @param Administrador $administrador The administrador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Administrador $administrador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrador_delete', array('id' => $administrador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
