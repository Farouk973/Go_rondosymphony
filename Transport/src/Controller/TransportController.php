<?php

namespace App\Controller;

use App\Entity\Transport;
use App\Form\TransportType;
use App\Repository\TransportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{
    /**
     * @Route("/transport", name="transport")
     */
    public function index(): Response
    {
        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }

    /**
     * @param TransportRepository $repository
     * @return Response
     * @Route("/AfficheTransport",name="AfficheTransport")
     */
    public function Affiche(TransportRepository $repository){
       // $repository=$this->getDoctrine()->getRepository(Transport::class);
        $Transport=$repository->findAll();
        return $this->render('Transport/Affiche.html.twig',
        ['Transport'=>$Transport]);

    }

    /**
     * @Route("/Supp/{id}",name="d")
     */
    function Delete($id,TransportRepository $repository){
        $Transport=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Transport);
        $em->flush();
        return $this->redirectToRoute('AfficheTransport');

    }

    /**
     * @param Request $request
     * @return Response
     * @Route("transport/Add")
     */
    function Add(Request $request){
        $Transport=new Transport();
        $form=$this->createForm(TransportType::class,$Transport);
        $form->add('Ajouter',SubmitType::Class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Transport);
            $em->flush();
            return $this->redirectToRoute('AfficheTransport');
        }
        return $this->render('transport/Add.html.twig',[
            'form'=>$form->createView()

        ]);

    }
    /**
     * @Route("transport/update/{id}",name="update")
     */
    function update(TransportRepository  $repository,$id,Request $request){
        $transport=$repository->find($id);
        $form=$this->createForm(transportType::class,$transport);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheTransport");

        }
        return $this->render('transport/update.html.twig',[
            'f'=>$form->createView()

        ]);
    }
}
