<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// php app/console doctrine:generate:entities AppBundle/Entity/Product

/**
 * Institucion
 *
 * @ORM\Table(name="institucion", indexes={@ORM\Index(name="sucursal", columns={"sucursal"})})
 * @ORM\Entity
 */
class Institucion
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=150, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="htmlpresentacion", type="text", length=65535, nullable=true)
     */
    private $htmlpresentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=100, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="text", length=65535, nullable=true)
     */
    private $horario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Institucion
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sucursal", referencedColumnName="id")
     * })
     */
    private $sucursal;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Institucion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Institucion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Institucion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set htmlpresentacion
     *
     * @param string $htmlpresentacion
     *
     * @return Institucion
     */
    public function setHtmlpresentacion($htmlpresentacion)
    {
        $this->htmlpresentacion = $htmlpresentacion;

        return $this;
    }

    /**
     * Get htmlpresentacion
     *
     * @return string
     */
    public function getHtmlpresentacion()
    {
        return $this->htmlpresentacion;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Institucion
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set horario
     *
     * @param string $horario
     *
     * @return Institucion
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
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
     * Set sucursal
     *
     * @param \FitnessBundle\Entity\Institucion $sucursal
     *
     * @return Institucion
     */
    public function setSucursal(\FitnessBundle\Entity\Institucion $sucursal = null)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return \FitnessBundle\Entity\Institucion
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }
    
    public function __toString (){
        return $this->getNombre();
    }
}
