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

class bundleController extends AbstractController
{

    /**
     * @Route("/transport" , name="transport",methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'bundleController',
        ]);
    }


    /**
     * @param Request $request
     * @return Response
     * @Route("/transport/add" , name="/transport/add",methods={"GET"})
     */
    public function add(): Response
    {
        return $this->render('add.html.twig', [
            'controller_name' => 'bundleController',
        ]);
    }
}


