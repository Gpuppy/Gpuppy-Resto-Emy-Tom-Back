<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/')]
  /*  public function create(ManagerRegistry $doctrine) : Response //injection de l'objet ManagerRegistry
    {
        $repository = $doctrine->getRepository(Post::class);
        $posts = $repository->findAll(); //SELECT * from 'post'
        dump($posts);
        return $this->render('post/index.html.twig',[
            "post" => $posts
        ]);



    }*/

    #[Route('/post/new')]
    public function create(Request $request, ManagerRegistry $doctrine) : Response //injection de l'objet ManagerRegistry
    {

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $doctrine->getManager(); //récupération d'une instance d'entity manager

            $entityManager->persist($post); // ajout de l'object $Post a l'EM
            $entityManager->flush(); //synchronisation de l'objet ajouté à l'EM avec la BD

        }

        return $this->render( 'base.html.twig',[

            "postForm" =>$form->createView()
        ]);

    }


    #[Route('/')]
    public function readAll(ManagerRegistry $doctrine) : Response
    {
        $repository = $doctrine->getRepository(Post::class);
        $post = $repository->findAll(); //select all from 'Post'

        return $this->render('base.html.twig', [

            "postForm" =>$post
        ]);

    }

    }



