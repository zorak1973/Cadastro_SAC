<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


use AppBundle\Entity\Chamado;
use AppBundle\Entity\Cliente;
use AppBundle\Entity\Pedido;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChamadoType extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('nome', TextType::class,array('required' => true, 'mapped'=> false, 'attr'=>array('minlength' => 8, 'class'=>'form-control')))
		->add('email', EmailType::class,array('required' => true, 'mapped'=> false, 'attr'=>array('class'=>'form-control')))
		->add('titulo', TextType::class,array('required' => true, 'attr'=>array('maxlength' => 80, 'class'=>'form-control')))
		->add('observacao', TextareaType::class, array('required' => true, 'label' => 'Observação', 'attr'=>array('minlength' => 8, 'class'=>'form-control')))
		->add('pedido_id', TextType::class,array('required' => true, 'label' => 'Número do pedido', 'attr'=>array('class'=>'form-control')))
		->add('save', SubmitType::class, array('label' => 'Abrir Chamado','attr'=>array('class'=>'btn btn-primary')))
		;
	}
}
?>