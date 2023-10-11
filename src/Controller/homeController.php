<?php

namespace App\Controller;

use App\Repository\PostRepository;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/home.html.twig');
    }

    #[Route('/posts', name: 'app_posts')]
    public function posts(PostRepository $postRepository): Response
    {
        return $this->render('home/posts.html.twig', [
            'posts'=>$postRepository->findAll()
        ]);
    }
}