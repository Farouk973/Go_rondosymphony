<?php

namespace App\Controller;

use App\Entity\Informations;
use App\Form\InformationsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/informationscrud")
 */
class InformationscrudController extends AbstractController
{
    /**
     * @Route("/", name="informationscrud_index", methods={"GET"})
     */
    public function index(): Response
    {
        $informations = $this->getDoctrine()
            ->getRepository(Informations::class)
            ->findAll();

        return $this->render('informationscrud/index.html.twig', [
            'informations' => $informations,
        ]);
    }

    /**
     * @Route("/new", name="informationscrud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $information = new Informations();
        $form = $this->createForm(InformationsType::class, $information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($information);
            $entityManager->flush();

            return $this->redirectToRoute('informationscrud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('informationscrud/new.html.twig', [
            'information' => $information,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="informationscrud_show", methods={"GET"})
     */
    public function show(Informations $information): Response
    {
        return $this->render('informationscrud/show.html.twig', [
            'information' => $information,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="informationscrud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Informations $information): Response
    {
        $form = $this->createForm(InformationsType::class, $information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informationscrud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('informationscrud/edit.html.twig', [
            'information' => $information,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="informationscrud_delete", methods={"POST"})
     */
    public function delete(Request $request, Informations $information): Response
    {
        if ($this->isCsrfTokenValid('delete'.$information->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($information);
            $entityManager->flush();
        }

        return $this->redirectToRoute('informationscrud_index', [], Response::HTTP_SEE_OTHER);
    }
}
