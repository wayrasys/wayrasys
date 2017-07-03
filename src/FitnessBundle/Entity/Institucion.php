<?php

namespace FitnessBundle\Entity;

/**
 * Institucion
 */
class Institucion
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Institucion
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
    
    /**
     * Socios.
     * @ManyToMany(targetEntity="Usuario")
     * @JoinTable(name="socio",
     *      joinColumns={@JoinColumn(name="institucion", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="usuario", referencedColumnName="id")}
     *      )
     */
    private $socios;
    
    /**
     * Administradores.
     * @ManyToMany(targetEntity="Usuario")
     * @JoinTable(name="administrador",
     *      joinColumns={@JoinColumn(name="institucion", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="usuario", referencedColumnName="id")}
     *      )
     */
    private $administradores;
    
    
    public function __construct() {
        $this->socios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->administradores = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
