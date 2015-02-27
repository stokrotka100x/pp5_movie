<?php

namespace Graucho\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session;

class DefaultController extends Controller{

    public function indexAction(){
		
		$session = $this->getRequest()->getSession();
		// store an attribute for reuse during a later user request
		if(count($session->get('filmy')) == 0){
			$i =0;
			$session->set('kosz', $i);
			$session->set('filmy', array());
		}
    	$em = $this->getDoctrine()->getManager();
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movies = $moviesRepository->findAll();
        return $this->render('GrauchoMoviesBundle:Default:index.html.twig', array('movies' => $movies));
    }
    public function moviesAction($c, $cat){
	
    	$em = $this->getDoctrine()->getManager();
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movies = $moviesRepository->findByGerne($c);
        return $this->render('GrauchoMoviesBundle:Movies:c.html.twig', array('movies' => $movies, 'cat'=>$cat));
    }
    public function movieAction($id){
	
    	$em = $this->getDoctrine()->getManager();
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movie = $moviesRepository->findById($id);
        return $this->render('GrauchoMoviesBundle:Movies:movie.html.twig', array('movie' => $movie));
    }
    public function registerAction(){
        return $this->render('GrauchoMoviesBundle:Default:register.html.twig', array());
    }
    public function loginAction(){
        return $this->render('GrauchoMoviesBundle:Default:login.html.twig', array());
    }

}