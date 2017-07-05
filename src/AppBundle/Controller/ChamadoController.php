<?php
// src/AppBundle/Controller/ChamadoController.php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Chamado;
use AppBundle\Repository\ChamadoRepository;
use AppBundle\Entity\Cliente;
use AppBundle\Entity\Pedido;
use AppBundle\Form\ChamadoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ChamadoController extends Controller
{
	
	/**
     * @Route("/chamado/create")
     */
	public function createAction()
	{
		
		$chamado = new Chamado();
		$chamado->setDataAbertura(new \DateTime('today'));
		$form = $this->createFormBuilder($chamado, array('validation_groups' => array(
			'registration'),))
		->setAction($this->generateUrl('indexlist'))
		->setMethod('POST')
		->add('titulo', TextType::class,array('required' => true))

		->add('observacao', TextType::class, array('required' => true))
		->add('dataAbertura', DateType::class, array('label' => 'Data de Abertura'))
		->add('save', SubmitType::class, array('label' => 'Abrir Chamado'))
		->getForm();
		if ($form->isSubmitted() && $form->isValid()) {
			
			return $this->redirectToRoute('homepage');
		}
		
		return $this->render('chamado/index.html.twig', array(
		'form' => $form->createView(),
		));
		
	}
	
	
	/**
     * @Route("/chamado/criar", name="form-class")
     */
	public function criarAction(Request $request)
	{
		$atualizar = 0;
		$chamado = new Chamado();
		//var_dump($chamado);exit;
		$chamado->setDataAbertura(new \DateTime('now'));
		$form = $this->createForm(ChamadoType::class, $chamado, array(
			'action' => $this->generateUrl('form-class'),
			'method' => 'POST',
		));
		$form->handleRequest($request);
		if ($form->isValid()) {
			$registro = $request->request->get('chamado');
			$chamado->setPedidoId($registro['pedido_id']);
			
			$em = $this->getDoctrine()->getManager();
			
			$pedido = $this->getDoctrine()
			->getRepository('AppBundle:Pedido')
			->find($registro['pedido_id']);
			if (!$pedido) {
				throw $this->createNotFoundException(
					'Pedido não encontrado:  '.$registro['pedido_id']
				);
			}
			$clienteId = $pedido->getCliente()->getId();
			
			$clienteEmail = $pedido->getCliente()->getEmail();
			if(!$clienteEmail){
				
				$atualizar = 1;
			}
						
			$em->persist($chamado);
			$em->flush();
			
				$query1 = $em->createQuery("UPDATE AppBundle:Chamado ch SET ch.pedido_id = ".$registro['pedido_id'].", ch.cliente_id = ".$clienteId." WHERE ch.id = ".$chamado->getId());
				$result = $query1->getResult();
			
			if (!$result) {
				$this->addFlash(
					'Aviso',
					'Não foi possível acrescentar código do pedido e código do cliente ao chamado.'
				);
				
			}
			if($atualizar == 1){
				$dql = "UPDATE AppBundle:Cliente c SET c.email = '".$registro['email']."' WHERE c.id = ".$clienteId;
				$query = $em->createQuery($dql);
				$result2 = $query->getResult();
				
				
				if (!$result2) {
					$this->addFlash(
						'Aviso',
						'Não foi possível atualizar email do cliente.'
					);
					
				}
			}
			$this->addFlash(
				'Aviso',
				'Dados Gravados com Sucesso!'
			);
			$this->fechaConexao($conn);
			return $this->render('chamado/form.html.twig', array(
			'form' => $form->createView(),
			));
			
			
		}
		return $this->render('chamado/form.html.twig', array(
		'form' => $form->createView(),
		));
	
	
	}
	
	
	
	/**
	 *  @Route("/chamado/listar", name="listagem-chamados")
	 *  
	 */
	public function listarAction(Request $request){
	
		$em = $this->getDoctrine()->getManager();
		$dql = "SELECT c, cl FROM AppBundle:Chamado c inner join c.cliente cl";
		$query = $em->createQuery($dql);
		
		/**
		 *  
		 *  @ var paginator \Knp\Component\Pager\Paginator
		 *  
		 */
		$paginator = $this->get('knp_paginator');
		$result = $paginator->paginate(
			$query,
			$request->query->getInt('page', 1),
			$request->query->getInt('limit', 5)
		);
		return $this->render('chamado/list.html.twig', array('chamados' => $result));
	}
}

