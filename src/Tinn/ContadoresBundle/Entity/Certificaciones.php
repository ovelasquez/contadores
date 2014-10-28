<?php

namespace Tinn\ContadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificaciones
 *
 * @ORM\Table(name="certificaciones", indexes={@ORM\Index(name="IDX_EFC763D240942D2C", columns={"dirigido_id"}), @ORM\Index(name="IDX_EFC763D2DE734E51", columns={"cliente_id"})})
 * @ORM\Entity
 */
class Certificaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="certificaciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="ingreso", type="float", precision=10, scale=0, nullable=false)
     */
    private $ingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="emision", type="date", nullable=false)
     */
    private $emision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="desde", type="date", nullable=false)
     */
    private $desde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hasta", type="date", nullable=false)
     */
    private $hasta;

    /**
     * @var string
     *
     * @ORM\Column(name="hoja_seguridad", type="string", length=255, nullable=false)
     */
    private $hojaSeguridad;

    /**
     * @var \Dirigidos
     *
     * @ORM\ManyToOne(targetEntity="Dirigidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dirigido_id", referencedColumnName="id")
     * })
     */
    private $dirigido;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * })
     */
    private $cliente;



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
     * Set ingreso
     *
     * @param float $ingreso
     * @return Certificaciones
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return float 
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }

    /**
     * Set emision
     *
     * @param \DateTime $emision
     * @return Certificaciones
     */
    public function setEmision($emision)
    {
        $this->emision = $emision;

        return $this;
    }

    /**
     * Get emision
     *
     * @return \DateTime 
     */
    public function getEmision()
    {
        return $this->emision;
    }

    /**
     * Set desde
     *
     * @param \DateTime $desde
     * @return Certificaciones
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param \DateTime $hasta
     * @return Certificaciones
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return \DateTime 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set hojaSeguridad
     *
     * @param string $hojaSeguridad
     * @return Certificaciones
     */
    public function setHojaSeguridad($hojaSeguridad)
    {
        $this->hojaSeguridad = $hojaSeguridad;

        return $this;
    }

    /**
     * Get hojaSeguridad
     *
     * @return string 
     */
    public function getHojaSeguridad()
    {
        return $this->hojaSeguridad;
    }

    /**
     * Set dirigido
     *
     * @param \Tinn\ContadoresBundle\Entity\Dirigidos $dirigido
     * @return Certificaciones
     */
    public function setDirigido(\Tinn\ContadoresBundle\Entity\Dirigidos $dirigido = null)
    {
        $this->dirigido = $dirigido;

        return $this;
    }

    /**
     * Get dirigido
     *
     * @return \Tinn\ContadoresBundle\Entity\Dirigidos 
     */
    public function getDirigido()
    {
        return $this->dirigido;
    }

    /**
     * Set cliente
     *
     * @param \Tinn\ContadoresBundle\Entity\Clientes $cliente
     * @return Certificaciones
     */
    public function setCliente(\Tinn\ContadoresBundle\Entity\Clientes $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Tinn\ContadoresBundle\Entity\Clientes 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
