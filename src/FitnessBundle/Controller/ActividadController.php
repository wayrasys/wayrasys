<?php

namespace FitnessBundle\Controller;

use FitnessBundle\Entity\Actividad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Actividad controller.
 *
 */
class ActividadController extends Controller
{
    /**
     * Lists all actividad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actividads = $em->getRepository('FitnessBundle:Actividad')->findAll();

        return $this->render('FitnessBundle:actividad:index.html.twig', array(
            'actividads' => $actividads,
        ));
    }

    /**
     * Creates a new actividad entity.
     *
     */
    public function newAction(Request $request)
    {
        $actividad = new Actividad();
        $form = $this->createForm('FitnessBundle\Form\ActividadType', $actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actividad);
            $em->flush();

            return $this->redirectToRoute('actividad_show', array('id' => $actividad->getId()));
        }

        return $this->render('FitnessBundle:actividad:new.html.twig', array(
            'actividad' => $actividad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a actividad entity.
     *
     */
    public function showAction(Actividad $actividad)
    {
        $deleteForm = $this->createDeleteForm($actividad);

        return $this->render('FitnessBundle:actividad:show.html.twig', array(
            'actividad' => $actividad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing actividad entity.
     *
     */
    public function editAction(Request $request, Actividad $actividad)
    {
        $deleteForm = $this->createDeleteForm($actividad);
        $editForm = $this->createForm('FitnessBundle\Form\ActividadType', $actividad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('actividad_edit', array('id' => $actividad->getId()));
        }

        return $this->render('FitnessBundle:actividad:edit.html.twig', array(
            'actividad' => $actividad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a actividad entity.
     *
     */
    public function deleteAction(Request $request, Actividad $actividad)
    {
        $form = $this->createDeleteForm($actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actividad);
            $em->flush();
        }

        return $this->redirectToRoute('actividad_index');
    }

    /**
     * Creates a form to delete a actividad entity.
     *
     * @param Actividad $actividad The actividad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actividad $actividad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actividad_delete', array('id' => $actividad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
