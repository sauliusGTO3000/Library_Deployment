<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Author controller.
 *
 * @Route("author")
 */
class AuthorController extends Controller
{
    /**
     * Lists all author entities.
     *
     * @Route("/", name="author_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $q = $request->query->get('q');

        if ($q){

                $authors = $em->getRepository('AppBundle:Author')->findByAuthorName($q);
                $paginator = $this->get('knp_paginator');
                $result = $paginator->paginate(
                    $authors,
                    $request->query->getInt('page',1),
                    $request->query->getInt('limir',2)
                );

                return $this->render('author/index.html.twig', array(
                    'authors' => $result,
                ));

            }

        $authors = $em->getRepository('AppBundle:Author')->findAll();
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $authors,
            $request->query->getInt('page',1),
            $request->query->getInt('limir',2)
        );
        return $this->render('author/index.html.twig', array(
            'authors' => $result,
        ));
    }

    /**
     * Creates a new author entity.
     *
     * @Route("/new", name="author_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request)
    {
        $author = new Author();
        $form = $this->createForm('AppBundle\Form\AuthorType', $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('author_show', array('id' => $author->getId()));
        }

        return $this->render('author/new.html.twig', array(
            'author' => $author,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a author entity.
     *
     * @Route("/{id}", name="author_show")
     * @Method("GET")
     */
    public function showAction(Author $author)
    {
        $deleteForm = $this->createDeleteForm($author);

        return $this->render('author/show.html.twig', array(
            'author' => $author,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing author entity.
     *
     * @Route("/{id}/edit", name="author_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(Request $request, Author $author)
    {
        $deleteForm = $this->createDeleteForm($author);
        $editForm = $this->createForm('AppBundle\Form\AuthorType', $author);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('author_edit', array('id' => $author->getId()));
        }

        return $this->render('author/edit.html.twig', array(
            'author' => $author,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a author entity.
     *
     * @Route("/{id}/delete", name="author_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, Author $author)
    {
        $form = $this->createDeleteForm($author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($author);
            $em->flush();
        }

        return $this->redirectToRoute('author_index');
    }


    /**
     * @param Author $author
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Author $author)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('author_delete', array('id' => $author->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
