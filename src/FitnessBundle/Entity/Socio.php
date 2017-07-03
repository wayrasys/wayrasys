<?php

namespace FitnessBundle\Entity;

/**
 * Socio
 */
class Socio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Institucion
     */
    private $institucion;

    /**
     * @var \UsuariosBundle\Entity\Usuario
     */
    private $usuario;


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
     * @return Socio
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
     * @return Socio
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
     * @var \DateTime
     */
    private $fechaalta = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $logusuario;

    /**
     * @var string
     */
    private $jsdetalle;


    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     *
     * @return Socio
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
     * Set logusuario
     *
     * @param integer $logusuario
     *
     * @return Socio
     */
    public function setLogusuario($logusuario)
    {
        $this->logusuario = $logusuario;

        return $this;
    }

    /**
     * Get logusuario
     *
     * @return integer
     */
    public function getLogusuario()
    {
        return $this->logusuario;
    }

    /**
     * Set jsdetalle
     *
     * @param string $jsdetalle
     *
     * @return Socio
     */
    public function setJsdetalle($jsdetalle)
    {
        $this->jsdetalle = $jsdetalle;

        return $this;
    }

    /**
     * Get jsdetalle
     *
     * @return string
     */
    public function getJsdetalle()
    {
        return $this->jsdetalle;
    }
}
