<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcion
 *
 * @ORM\Table(name="inscripcion", indexes={@ORM\Index(name="fk_inscripcion_socio_idx", columns={"socio"}), @ORM\Index(name="fk_inscripcion_actividad2_idx", columns={"actividad"})})
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="datetime", nullable=false)
     */
    private $fechaalta = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaBaja", type="datetime", nullable=true)
     */
    private $fechabaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
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
     * @var \FitnessBundle\Entity\Actividad
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad", referencedColumnName="id")
     * })
     */
    private $actividad;

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

