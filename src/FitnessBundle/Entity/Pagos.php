<?php

namespace FitnessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="pagos", indexes={@ORM\Index(name="fk_pagos_desatalle1_idx", columns={"desatalle"})})
 * @ORM\Entity
 */
class Pagos
{
    /**
     * @var float
     *
     * @ORM\Column(name="pago", type="float", precision=6, scale=2, nullable=true)
     */
    private $pago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pagado", type="boolean", nullable=true)
     */
    private $pagado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FitnessBundle\Entity\Desatalle
     *
     * @ORM\ManyToOne(targetEntity="FitnessBundle\Entity\Desatalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="desatalle", referencedColumnName="id")
     * })
     */
    private $desatalle;


}

