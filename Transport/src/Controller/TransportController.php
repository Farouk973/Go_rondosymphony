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
use Dompdf\Dompdf;
use Dompdf\Options;

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
        $em=$this->getDoctrine()->getManager();
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
        $this->addFlash("Success",'Post was removed');
        return $this->redirectToRoute('AfficheTransport');

    }

    /**
     * @param Request $request
     * @return Response
     * @Route("transport/Add")
     */
    function Add(Request $request){
        $transport=new transport();
        $form=$this->createForm(transportType::class,$transport);
        $form->add('Ajouter',SubmitType::Class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $file=$transport->getImageTr();
            $filename= md5(uniqid())   .  '.'  .  $file->guessExtension();
            $file->move ($this->getParameter('upload_directory'),$filename);
            $transport->setImageTr($filename);

            $em->persist($transport);
            $em->flush();

            $this->addFlash('info', 'Created Successfully !');
            return $this->redirectToRoute('AfficheTransport');
        }
        return $this->render('transport/add.html.twig',[
            'form'=>$form->createView()

        ]);


    }

    public function addAction(Request $request)
    {

        $post = new Post();
        $form= $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $file = $post->getPhoto();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $post->setPhoto($filename);
            $post->setCreator($this->getUser());
            $post->setPostdate(new \DateTime('now'));

            $em->persist($post);
            $em->flush();

            $this->addFlash('info', 'Created Successfully !');
        }
        return $this->render('@TutorialBlog/Post/add.html.twig', array(
            "Form"=> $form->createView()
        ));
    }
    /**
     * @Route("transport/update/{id}",name="update")
     */
    function update(TransportRepository  $repository,$id,Request $request){
        $Transport=$repository->find($id);
        $form=$this->createForm(TransportType::class,$Transport);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheTransport");

        }
        return $this->render('transport/update.html.twig',[
            'form'=>$form->createView()

        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/ajax_search", name="ajax_search",methods={"GET"})
     */
    public function searchAction(Request $request, $Transport)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $Transport =  $em->Repository->findEntitiesByString($requestString);
        if(!$Transport) {
            $result['Transport']['error'] = "Transport Not found :( ";
        } else {
            $result['Transport'] = $this->getRealEntities($Transport);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($Transport){
        foreach ($Transport as $Transport){
            $realEntities[$Transport->getId()] = [$Transport->getImageTr(),$Transport->getType()];

        }
        return $realEntities;
    }

    /**
     * @param TransportRepository $repository
     * @return Response
     * @Route("/detailedT/{id}",name="detailedt",methods={"GET"})
     */
    public function showdetailedAction($id, TransportRepository $repository)
    {
        $em= $this->getDoctrine()->getManager();
        $Transport=$repository->find($id);
        $form=$this->createForm(TransportType::class,$Transport);
        $form->add('Detail',SubmitType::class,[
            'attr'=>[
                'class'=>'btn-primary waves-effect waves-light'
            ]
        ]);



        return $this->render('transport/detailedpost.html.twig', [
            'Type_tr'=>$Transport->getTypeTr(),
            'Disponibilite_tr'=>$Transport->getDisponibiliteTr(),
            'Image_tr'=>$Transport->getImageTr(),
            'Destination_tr'=>$Transport->getDestinationTr(),
            'Stock_tr'=>$Transport->getStockTr(),
            'Prix_tr'=>$Transport->getPrixTr(),
            'Id_groupe_tr'=>$Transport->getIdGroupeTr(),
            'id'=>$Transport->getId()
        ]);
    }


    /**
     * @param TransportRepository $repository
     * @return Response
     * @Route("/mypdf", name="mypdf",methods={"GET"})
     */
    public function mypdf(TransportRepository $repository)
    {
        $Transport = $repository->findAll();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('Transport/mypdf.html.twig',
            ['Transport' => $Transport
            ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);


    }

}
