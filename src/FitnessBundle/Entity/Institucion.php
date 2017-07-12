<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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


}

