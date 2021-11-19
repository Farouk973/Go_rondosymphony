<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\Participant1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participant")
 */
class ParticipantController extends AbstractController
{
    /**
     * @Route("/", name="participant_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $participants = $entityManager
            ->getRepository(Participant::class)
            ->findAll();

        return $this->render('participant/index.html.twig', [
            'participants' => $participants,
        ]);
    }

    /**
     * @Route("/new", name="participant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participant = new Participant();
        $form = $this->createForm(Participant1Type::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participant);
            $entityManager->flush();

            return $this->redirectToRoute('participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participant/new.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPar}", name="participant_show", methods={"GET"})
     */
    public function show(Participant $participant): Response
    {
        return $this->render('participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    /**
     * @Route("/{idPar}/edit", name="participant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Participant $participant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Participant1Type::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participant/edit.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPar}", name="participant_delete", methods={"POST"})
     */
    public function delete(Request $request, Participant $participant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getIdPar(), $request->request->get('_token'))) {
            $entityManager->remove($participant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participant_index', [], Response::HTTP_SEE_OTHER);
    }
}