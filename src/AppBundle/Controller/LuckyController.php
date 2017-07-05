<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cliente;
use AppBundle\Entity\Pedido;
use Doctrine\ORM\EntityRepository;
use AppBundle\Repository\PedidoRepository;



class LuckyController extends Controller
{	

	
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
		$engine = $this->container->get('templating');
		
		$pedido = $this->getDoctrine()
		->getRepository('AppBundle:Pedido')
		->find(1);
		
			$ClienteName = $pedido->getCliente()->getNome();
			

		return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
	
	
	/**
     * @Route("/lucky", name = "indexlist")
     */
	public function blemAction()
    {
		$vari = "x + y = z";
		return new Response($vari);
	
	}
	
	/**
     * @Route("/lucky/blu", name = "blulist")
     */
	public function indexAction()
    {
		
		return new Response("Ação index mas não default");
	
	}
	
	/**
     * @Route("/lucky/db", name = "dblist")
     */
	public function dbAction()
    {
		
		return new Response("Banco de dados POSTGRE");
	
	}
	
	
	/**
     * Matches /lucky/*
     *
     * @Route("/lucky/{slug}", name="lucky_show")
     */
	public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
		return new Response("Slug");
    }
}