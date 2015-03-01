<?php

namespace Graucho\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Graucho\MoviesBundle\Entity\Recenzja;
use Graucho\MoviesBundle\Form\RecenzjaType;
use Symfony\Component\HttpFoundation\Request;

//FIXME books, ksiegi, refleksje 
//change to movies, category, orders.
//ksiegi - category ??del.??
class RecenzjaController extends Controller{

    public function indexAction($movie)
    {
    	$em = $this->getDoctrine()->getManager();
    	$recenzjeRepository = $em->getRepository("GrauchoMoviesBundle:Recenzja");
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movies = $moviesRepository->findAll();
        $recenzje = $recenzjeRepository->findByMovie($movie);
        return $this->render('GrauchoMoviesBundle:Recenzja:index.html.twig', array('recenzje' => $recenzje, 'movies' => $movies, 'movie' => $movie));
    }
	/**/
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $recenzjeRepository = $em->getRepository("GrauchoMoviesBundle:Recenzja");
        $recenzja = $recenzjeRepository->findOneById($id);
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movie = $moviesRepository->findById($recenzja->getMovie());
        return $this->render('GrauchoMoviesBundle:Recenzja:show.html.twig', array('recenzja' => $recenzja, 'film'=>$movie));
    }
	/**/
    public function addAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
    	$recenzja = new Recenzja();
        $recenzja->setAutor($this->getUser()->getUsername());
		$recenzja->setMovie($id);
        $moviesRepository = $em->getRepository("GrauchoMoviesBundle:Movie");
        $movie = $moviesRepository->findById($recenzja->getMovie());
		$title = $movie[0]->getName();
    	$form = $this->createForm(new RecenzjaType(), $recenzja);

    	if ($request->isMethod('POST')
                && $form->handleRequest($request)
                && $form->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($recenzja);
                    $em->flush();
                    return $this->redirect($this->generateUrl('graucho_movies_recenzja_index', array()));
        }
        return $this->render('GrauchoMoviesBundle:Recenzja:add.html.twig', array('form' => $form->createView(), 'title'=>$title));
    }
}
