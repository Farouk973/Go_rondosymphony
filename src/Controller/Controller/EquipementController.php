<?php

namespace App\Controller;

use App\Entity\Equipement;
use App\Form\EquipementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
/**
 * @Route("/equipement")
 */
class EquipementController extends AbstractController
{
    /**
     * @Route("/", name="equipement_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Equipement::class)->findBy([],['nomProduit' => 'desc']);

        $equipement= $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );


        return $this->render('equipement/index.html.twig', [
            'equipements' => $equipement,
        ]);
    }

    /**
     * @Route("/new", name="equipement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $equipement = new Equipement();
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $equipement->setDisponibility(1);
            $entityManager->persist($equipement);
            $entityManager->flush();

            return $this->redirectToRoute('equipement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipement/new.html.twig', [
            'equipement' => $equipement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProduit}", name="equipement_show", methods={"GET"})
     */
    public function show(Equipement $equipement): Response
    {
        return $this->render('equipement/show.html.twig', [
            'equipement' => $equipement,
        ]);
    }

    /**
     * @Route("/{idProduit}/edit", name="equipement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Equipement $equipement): Response
    {
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('equipement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipement/edit.html.twig', [
            'equipement' => $equipement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProduit}", name="equipement_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipement $equipement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipement->getIdProduit(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($equipement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('equipement_index', [], Response::HTTP_SEE_OTHER);
    }



}
