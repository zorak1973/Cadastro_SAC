<?php
// src/AppBundle/Entity/Cliente.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteRepository")
* @ORM\Table(name="cliente")
*/
class Cliente {
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $nome;
	
	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $endereco;
	
	/**
	* @ORM\Column(type="string", length=125)
	*/
	private $cidade;
	
	/**
	* @ORM\Column(type="string", length=25)
	*/
	private $estado;
	
	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $email;
	
	/**
	* @ORM\OneToMany(targetEntity="Pedido", mappedBy="cliente")
	* 
	*/
	private $pedidos;
	
	/**
	* @ORM\OneToMany(targetEntity="Chamado", mappedBy="cliente")
	* 
	*/
	private $chamados;
	
	public function __construct()
	{
		$this->pedidos  = new ArrayCollection();
		$this->chamados = new ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Cliente
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cliente
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return Cliente
     */
    public function addPedido(\AppBundle\Entity\Pedido $pedido)
    {
        $this->pedidos[] = $pedido;

        return $this;
    }

    /**
     * Remove pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     */
    public function removePedido(\AppBundle\Entity\Pedido $pedido)
    {
        $this->pedidos->removeElement($pedido);
    }

    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }

    /**
     * Add chamado
     *
     * @param \AppBundle\Entity\Chamado $chamado
     *
     * @return Cliente
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
