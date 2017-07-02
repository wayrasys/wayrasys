<?php
namespace UsuariosBundle\Controller;

use UsuariosBundle\Entity\Usuario;
use BaseBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsuarioController extends BaseController
{
    public function nuevoAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Usuario();

        $form = $this->createFormBuilder($task)
            ->add('documento', TextType::class)
            ->add('nombre', TextType::class)
            ->add('apellido', TextType::class)
            ->add('direccion', TextType::class)
            ->add('celular', TextType::class)
            ->add('telefono', TextType::class)
            ->add('fechanacimiento', DateType::class)
            ->add('facebook', TextType::class)
            ->add('instagram', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Guardar'))
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em->persist($task);
            // $em->flush();

            return $this->redirectToRoute('usuarios_homepage');
        }


        return $this->renderRequest($request, 'UsuariosBundle:Usuario:nuevo.html.twig', array(
            'form' => $form->createView()
        ));
    }
}