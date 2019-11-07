<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blogs", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
	/**
     * @Route("/", name="home")
     */
	public function Home(){
		return $this->render('blog/home.html.twig',[
	'title'=>"Bienvenue",'age'=>18]);
	}
}
