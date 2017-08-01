<?php

namespace FitnessBundle\Entity;

use UsuariosBundle\Entity\Usuario;
use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador
 *
 * @ORM\Table(name="administrador", indexes={@ORM\Index(name="institucion", columns={"institucion"}), @ORM\Index(name="usuario", columns={"usuario"}), @ORM\Index(name="fk_administrador_usuario1_idx", columns={"autorizadoPor"})})
 * @ORM\Entity
 */
class Administrador
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="datetime", nullable=false)
     */
    private $fechaalta = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=false)
     */
    private $habilitado;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", length=65535, nullable=true)
     */
    private $log;

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
     *   @ORM\JoinColumn(name="institucion", referencedColumnName="id")
     * })
     */
    private $institucion;

    /**
     * @var \UsuariosBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \UsuariosBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="UsuariosBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="autorizadoPor", referencedColumnName="id")
     * })
     */
    private $autorizadopor;



    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     *
     * @return Administrador
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     *
     * @return Administrador
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set log
     *
     * @param string $log
     *
     * @return Administrador
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
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
     * Set institucion
     *
     * @param \FitnessBundle\Entity\Institucion $institucion
     *
     * @return Administrador
     */
    public function setInstitucion(\FitnessBundle\Entity\Institucion $institucion = null)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return \FitnessBundle\Entity\Institucion
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set usuario
     *
     * @param \UsuariosBundle\Entity\Usuario $usuario
     *
     * @return Administrador
     */
    public function setUsuario(\UsuariosBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \UsuariosBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set autorizadopor
     *
     * @param \UsuariosBundle\Entity\Usuario $autorizadopor
     *
     * @return Administrador
     */
    public function setAutorizadopor(\UsuariosBundle\Entity\Usuario $autorizadopor = null)
    {
        $this->autorizadopor = $autorizadopor;

        return $this;
    }

    /**
     * Get autorizadopor
     *
     * @return \UsuariosBundle\Entity\Usuario
     */
    public function getAutorizadopor()
    {
        return $this->autorizadopor;
    }
}
