<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowblogController extends AbstractController
{
    /**
     * @Route("/showblog{id}", name="showblog")
     */
    public function index($id): Response
    {   $repo= $this->getDoctrine()->getRepository(Article::class);
        $article=$repo->find($id);
        return $this->render('showblog/index.html.twig', [
            'controller_name' => 'ShowblogController',
            'article'=> $article
        ]);
    }
}
