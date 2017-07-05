<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoRepository")
 */
class Pedido
{
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
     *
     * @ORM\Column(name="desc_pedio", type="string", length=255, nullable=true)
     */
    private $descPedio;

    /**
     * @var int
     *
     * @ORM\Column(name="qtd_pedido", type="integer", nullable=true)
     */
    private $qtdPedido;

    /**
     * @var decimal
     *
     * @ORM\Column(name="valor_pedido", type="integer", length=8, precision=2, nullable=true)
     */
    private $valorPedido;

	
	/**
	* @ORM\ManyToOne(targetEntity="Cliente", inversedBy="pedidos")
	* @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
	*/
	private $cliente;
	
	/**
	* @ORM\OneToMany(targetEntity="Chamado", mappedBy="pedido")
	*/
	private $chamados;
	
	
	public function __construct()
	{
		$this->chamados = new ArrayCollection();
	}
	
    
	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descPedio
     *
     * @param string $descPedio
     *
     * @return Pedido
     */
    public function setDescPedio($descPedio)
    {
        $this->descPedio = $descPedio;

        return $this;
    }

    /**
     * Get descPedio
     *
     * @return string
     */
    public function getDescPedio()
    {
        return $this->descPedio;
    }

    /**
     * Set qtdPedido
     *
     * @param integer $qtdPedido
     *
     * @return Pedido
     */
    public function setQtdPedido($qtdPedido)
    {
        $this->qtdPedido = $qtdPedido;

        return $this;
    }

    /**
     * Get qtdPedido
     *
     * @return int
     */
    public function getQtdPedido()
    {
        return $this->qtdPedido;
    }

    /**
     * Set valorPedido
     *
     * @param string $valorPedido
     *
     * @return Pedido
     */
    public function setValorPedido($valorPedido)
    {
        $this->valorPedido = $valorPedido;

        return $this;
    }

    /**
     * Get valorPedido
     *
     * @return string
     */
    public function getValorPedido()
    {
        return $this->valorPedido;
    }

    /**
     * Set cliente
     *
     * @param \AppBundle\Entity\Cliente $cliente
     *
     * @return Pedido
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
     * Add chamado
     *
     * @param \AppBundle\Entity\Chamado $chamado
     *
     * @return Pedido
     */
    public function addChamado(\AppBundle\Entity\Chamado $chamado)
    {
        $this->chamados[] = $chamado;

        return $this;
    }

    /**
     * Remove chamado
     *
     * @param \AppBundle\Entity\Chamado $chamado
     */
    public function removeChamado(\AppBundle\Entity\Chamado $chamado)
    {
        $this->chamados->removeElement($chamado);
    }

    /**
     * Get chamados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChamados()
    {
        return $this->chamados;
    }
}
