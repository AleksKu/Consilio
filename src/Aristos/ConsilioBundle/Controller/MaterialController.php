<?php

namespace Aristos\ConsilioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Aristos\ConsilioBundle\Entity\Material;
use Aristos\ConsilioBundle\Form\MaterialType;

/**
 * Material controller.
 *
 */
class MaterialController extends Controller
{
    /**
     * Lists all Material entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AristosConsilioBundle:Material')->findAll();

        return $this->render('AristosConsilioBundle:Material:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Material entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AristosConsilioBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AristosConsilioBundle:Material:show.html.ktwig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Material entity.
     *
     */
    public function newAction()
    {
        $entity = new Material();
        $form   = $this->createForm(new MaterialType(), $entity);

        return $this->render('AristosConsilioBundle:Material:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Material entity.
     *
     */
    public function createAction()
    {
        $entity  = new Material();
        $request = $this->getRequest();
        $form    = $this->createForm(new MaterialType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('material_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AristosConsilioBundle:Material:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Material entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AristosConsilioBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $editForm = $this->createForm(new MaterialType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AristosConsilioBundle:Material:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Material entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AristosConsilioBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $editForm   = $this->createForm(new MaterialType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('material_edit', array('id' => $id)));
        }

        return $this->render('AristosConsilioBundle:Material:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Material entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AristosConsilioBundle:Material')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Material entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('material'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function testAction()
    {
        $entity  = new Material();


         $em = $this->getDoctrine()->getEntityManager();
         $em->persist($entity);
         $em->flush();

    }
}
