<?php
// src/AppBundle/Controller/ClienteController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Cliente;
use AppBundle\Entity\Pedido;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\ArrayCollection;

class ClienteController extends Controller
{
	/**
     * @Route("/cliente/create")
     */
	public function createAction()
	{
		return new Response('Método create');
	}
	
	/**
     * @Route("/cliente/createPedido")
     */
	public function createPedidoAction()
	{
		
		return new Response('Método createPedido');
	}
}
