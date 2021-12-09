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

class bundleBackController extends AbstractController
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/transport1" , name="transport1",methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('index_back.html.twig', [
            'controller_name' => 'bundleController',
        ]);
    }



    /**
     * @param Request $request
     * @return Response
     * @Route("transport1/add")
     */
    function add(Request $request){
        $transport=new transport();
        $form=$this->createForm(transportType::class,$transport);
        $form->add('Ajouter',SubmitType::Class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $file=$transport->getImageTr();
            $filename= md5(uniqid())   .  '.'  .  $file->guessExtension();
            $file->move ($this->getParameter('upload_directory'));
            $transport->setImageTr($filename);
            $em->persist($transport);
            $em->flush();
            return $this->redirectToRoute('afficheTransport');
        }
        return $this->render('transport1/add_back.html.twig',[
            'form'=>$form->createView()

        ]);


    }
    /**
     * @param TransportRepository $repository
     * @return Response
     * @Route("/afficheTransport",name="afficheTransport")
     */
    public function Affiche(TransportRepository $repository){
        // $repository=$this->getDoctrine()->getRepository(Transport::class);
        $Transport=$repository->findAll();
        return $this->render('Transport1/affiche_back.html.twig',
            ['Transport'=>$Transport]);



    }
    /**
     * @Route("transport1/update/{id}",name="update")
     */
    function update(TransportRepository  $repository,$id,Request $request){
        $Transport=$repository->find($id);
        $form=$this->createForm(TransportType::class,$Transport);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $file = $Transport->getImageTr();
            $filename= md5(uniqid())   .  '.'  .  $file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $Transport->setImageTr($filename);

            $em=$this->getDoctrine()->getManager();
            $em->persist($Transport);
            $em->flush();
            return $this->redirectToRoute("afficheTransport");

        }
        return $this->render('transport1/update_back.html.twig',[
            'form'=>$form->createView()

        ]);
    }


    /**
     * @Route("/supp/{id}",name="delete")
     */
    function Delete($id,TransportRepository $repository){
        $Transport=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Transport);
        $em->flush();
        $this->addFlash("Success",'Post was removed');
        return $this->redirectToRoute('afficheTransport');

    }

}
