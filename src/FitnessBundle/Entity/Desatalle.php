<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Desatalle
 *
 * @ORM\Table(name="desatalle", indexes={@ORM\Index(name="fk_desatalle_liquidacion1_idx", columns={"liquidacion"}), @ORM\Index(name="fk_desatalle_inscripcion1_idx", columns={"inscripcion"})})
 * @ORM\Entity
 */
class Desatalle
{
    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float", precision=6, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Inscripcion
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Inscripcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inscripcion", referencedColumnName="id")
     * })
     */
    private $inscripcion;

    /**
     * @var \FitnessBundle\Entity\Liquidacion
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Liquidacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="liquidacion", referencedColumnName="id")
     * })
     */
    private $liquidacion;


}

