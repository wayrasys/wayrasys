<?php

namespace FitnessBundle\Entity;

/**
 * Administrador
 */
class Administrador
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
    public function setUsuario(\FitnessBundle\Entity\Usuario $usuario = null)
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
}
