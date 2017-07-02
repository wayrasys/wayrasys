<?php
namespace FitnessBundle\Entity;

use \Doctrine\Common\Collections;

/**
 * @ORM\Entity
 * @ORM\Table(name="institucion")
 */
class Usuario extends BaseUser
{
    public function __construct()
    {
        $this->sucursales = new ArrayCollection();
        $this->administradores = new ArrayCollection();
    }
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     *
     * @Assert\NotBlank(message="Por favor ingrese el Nombre de la Institucion!")
     */
    protected $nombre;
    
    public function getNombre():string{ return $this->nombre==null ? "": $this->nombre; }    
    public function setNombre(string $value){ $this->nombre = $value; }
    
    /**
     * @ORM\Column(type="string", length=150)
     *
     * @Assert\NotBlank(message="Por favor ingrese el una descripcion!")
     */
    protected $descripcion;
    
    public function getDescripcion():string{ return $this->descripcion==null ? "": $this->descripcion; }    
    public function setDescripcion(string $value){ $this->descripcion = $value; }

    /**
     * @ORM\Column(type="string", length=150)
     *
     * @Assert\NotBlank(message="Por favor ingrese el una descripcion!")
     */
    protected $direccion;
    
    public function getDireccion():string{ return $this->direccion==null ? "": $this->direccion; }    
    public function setDireccion(string $value){ $this->direccion = $value; }
    
    
     /**
     * @ORM\ManyToOne(targetEntity="institucion", inversedBy="institucion")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $sucursal;
    
    /**
     * @ORM\OneToMany(targetEntity="institucion", mappedBy="sucursal")
     */
    private $sucursales;
   
    /**
     * @ManyToMany(targetEntity="usuario")
     * @JoinTable(name="administradores",
     *      joinColumns={@JoinColumn(name="id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $administradores;
    
        /**
     * @ManyToMany(targetEntity="usuario")
     * @JoinTable(name="socios",
     *      joinColumns={@JoinColumn(name="id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $socios;
}