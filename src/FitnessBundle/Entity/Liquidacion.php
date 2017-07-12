<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liquidacion
 *
 * @ORM\Table(name="liquidacion", indexes={@ORM\Index(name="fk_liquidacion_socio1_idx", columns={"socio"})})
 * @ORM\Entity
 */
class Liquidacion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Socio
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Socio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="socio", referencedColumnName="id")
     * })
     */
    private $socio;


}

