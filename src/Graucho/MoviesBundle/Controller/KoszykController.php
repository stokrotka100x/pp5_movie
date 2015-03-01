<?php

namespace Graucho\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Graucho\MoviesBundle\Entity\Koszyk;
use Graucho\MoviesBundle\Form\KoszykType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;

class KoszykController extends Controller{
	
    public function indexAction(){
	
		$session = $this->getRequest()->getSession();			
		$usr = $this->get('security.context')->getToken()->getUser();
		$tmp = array();
		try{
			$tmp = $session->get('filmy');
		}catch(ContextErrorException $e){}
		if(is_object($usr)){
			$em = $this->getDoctrine()->getManager();
			$zamowieniaRepository = $em->getRepository("GrauchoMoviesBundle:Koszyk");
			$zamowienia = $zamowieniaRepository->findByAutor($usr->getUserName());
			$tmp = array_unique (array_merge($zamowienia, $tmp));
		}else{
			$tmp = array_unique ($tmp);
		}
		$session->set('kosz', (count($tmp)));
		$session->set('filmy', $tmp);
		//print_r(str_replace("(","\n(", $session->get('filmy')));
		return $this->render('GrauchoMoviesBundle:Koszyk:index.html.twig', array());
    }
	/**/
    public function showAction($id){

        $em = $this->getDoctrine()->getManager();
        $zamowieniaRepository = $em->getRepository("GrauchoMoviesBundle:Koszyk");
        $koszyk = $zamowieniaRepository->findOneById($id);
		if($koszyk->getIsDone() == 0){
			$moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
			$movie = $moviesRepository->findById($koszyk->getMovie());
			$koszyk->setIsDone(1);
			$em = $this->getDoctrine()->getManager();
            $em->persist($koszyk);
            $em->flush();
			return $this->render('GrauchoMoviesBundle:Koszyk:show.html.twig', array('movie'=>$movie));
		}else
            return $this->redirect($this->generateUrl('graucho_movies_homepage', array()));
    }
	/**/
    public function addAction($id){
	
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();
		$moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
		$movie = $moviesRepository->findById($id);
			
		$koszyk = new Koszyk();
		$koszyk->setTytul($movie[0]->getName());
		$koszyk->setCena($movie[0]->getValue());
		$koszyk->setDataUtworzenia(new \DateTime("now"));
		$koszyk->setMovie($id);
		$koszyk->setIsDone(1);
		
		$usr = $this->get('security.context')->getToken()->getUser();
        if(is_object($usr)){
			$koszyk->setAutor($usr->getUserName());
		}
		
		$tmp = array();
		try{
			$tmp = $session->get('filmy');
		}catch(ContextErrorException $e){}
		$tmp[] = $koszyk;
		$session->set('kosz', (count($tmp)));
		$session->set('filmy', ($tmp));
		return $this->redirect($this->get('request')->server->get('HTTP_REFERER'));
		
    }
    public function removeAction($id){
	
		//session remove		
		$session = $this->getRequest()->getSession();
		$tmp = $session->get('filmy');
		/*
		$neededObjects = array_filter($tmp, function ($e) use ($id){
					return $e->getId() != $id;
				}
			);*/
		foreach($tmp as $f){
			if($f->getMovie() == $id){
				$neededObjects = array_filter($tmp, function ($e) use ($f){
							return $e != $f;
						});
				$tmp = $neededObjects;
				break;
			}
		}
		$session->set('kosz', (count($tmp)));
		$session->set('filmy', ($tmp));
		//doctrine remove
		$usr = $this->get('security.context')->getToken()->getUser();
		if(is_object($usr)){
			$em = $this->getDoctrine()->getManager();
			$zamowieniaRepository = $em->getRepository("GrauchoMoviesBundle:Koszyk");
			try{
				$zamowienia = $zamowieniaRepository->findByAutor($usr->getUserName());
								
				foreach($zamowienia as $f){
					if($f->getMovie() == $id){
						$em->remove($f);
						$em->flush();
						break;
					}
				}
			}catch(Exception $e){}
		}
		return $this->render('GrauchoMoviesBundle:Koszyk:index.html.twig', array());
	}
    public function payAction($id){
		
		$usr = $this->get('security.context')->getToken()->getUser();
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getManager();
		$tmp = $session->get('filmy');
		foreach($tmp as $f){
			if($f->getMovie() == $id){
				$f->setIsDone(0);
				$f->setAutor($usr->getUserName());
				$em->persist($f);
				$em->flush();
				break;
			}
		}
		return $this->render('GrauchoMoviesBundle:Koszyk:index.html.twig', array());
	}
}
