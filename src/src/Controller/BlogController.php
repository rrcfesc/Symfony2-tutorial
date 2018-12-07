<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => "blog list",
        ]);
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $slug,
        ]);
    }
}