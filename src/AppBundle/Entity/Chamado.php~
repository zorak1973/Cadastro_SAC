<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chamado 
 * @ORM\Table(name="chamado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChamadoRepository")
 * 
 */
class Chamado{

/**
* @var int
*
* @ORM\Column(name="id", type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
private $id;


/**
 * @var string  
 * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
 * @Assert\NotBlank()
 * @Assert\Type("string")
 */
private $titulo;

/**
 *  
 * @var \AppBundle\Entity\Cliente
 * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="chamados")
 * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
 */
private $cliente;

/**
 *  
 * @var \AppBundle\Entity\Pedido
 * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="chamados")
 * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
 */
private $pedido;

/**
 *  
 *  @var text
 *  
 *  @ORM\Column(name="observacao", type="text", nullable=true)
 *  @Assert\NotBlank()
 *  
 */
private $observacao;

/**
 *  
 *  @var datetime
 *  
 *  
 *  @ORM\Column(name="data_abertura", type="datetime", nullable=true)
 *  @Assert\NotBlank()
 *  
 */
private $dataAbertura;

/**
 *  
 *  
 *  @var int
 *  @ORM\Column(name="pedido_id", type="integer", nullable=true)
 *  
 */
private $pedido_id;	


/**
 *  
 *  
 *  @var int
 *  @ORM\Column(name="cliente_id", type="integer", nullable=true)
 *  
 */
private $cliente_id;	
	
    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Chamado
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return Chamado
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set dataAbertura
     *
     * @param \DateTime $dataAbertura
     *
     * @return Chamado
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;

        return $this;
    }

    /**
     * Get dataAbertura
     *
     * @return \DateTime
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cliente
     *
     * @param \AppBundle\Entity\Cliente $cliente
     *
     * @return Chamado
     */
    public function setCliente(\AppBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedidos $pedido
     *
     * @return Chamado
     */
    public function setPedido(\AppBundle\Entity\Pedidos $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedidos
     */
    public function getPedido()
    {
        return $this->pedido;
    }



    /**
     * Set pedidoId
     *
     * @param integer $pedidoId
     *
     * @return Chamado
     */
    public function setPedidoId($pedidoId)
    {
        $this->pedido_id = $pedidoId;

        return $this;
    }

    /**
     * Get pedidoId
     *
     * @return integer
     */
    public function getPedidoId()
    {
        return $this->pedido_id;
    }

    /**
     * Set clienteId
     *
     * @param integer $clienteId
     *
     * @return Chamado
     */
    public function setClienteId($clienteId)
    {
        $this->cliente_id = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return integer
     */
    public function getClienteId()
    {
        return $this->cliente_id;
    }
}
