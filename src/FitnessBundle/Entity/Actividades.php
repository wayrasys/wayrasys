<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividades
 *
 * @ORM\Table(name="actividades", indexes={@ORM\Index(name="fk_institucion_has_actividad_actividad1_idx", columns={"actividad_id"}), @ORM\Index(name="fk_institucion_has_actividad_institucion1_idx", columns={"institucion_id"})})
 * @ORM\Entity
 */
class Actividades
{
    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="text", length=65535, nullable=true)
     */
    private $horario;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", precision=6, scale=2, nullable=true)
     */
    private $precio;

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
     *   @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * })
     */
    private $actividad;

    /**
     * @var \FitnessBundle\Entity\Institucion
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion_id", referencedColumnName="id")
     * })
     */
    private $institucion;


}

