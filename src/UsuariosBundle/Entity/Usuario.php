<?php
namespace UsuariosBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @ORM\Column(type="string", length=12)
     *
     * @Assert\NotBlank(message="Por favor ingrese el Documento!")
     * @Assert\Length(
     *     min=7,
     *     max=12,
     *     minMessage="Por favor ingrese el Documento!",
     *     maxMessage="Por favor ingrese el Documento!"
     * )
     */
    protected $documento;
    
    public function getDocumento():string{ return $this->documento==null ? "": $this->documento; }
    
    public function setDocumento(string $value){ $this->documento = $value; }
    
    /**
     * @ORM\Column(type="string", length=50)
     *
     * @Assert\NotBlank(message="Por favor ingrese el Nombre!")
     */
    protected $nombre;
    
    public function getNombre():string{ return $this->nombre==null ? "": $this->nombre; }
    
    public function setNombre(string $value){ $this->nombre = $value; }
    
    /**
     * @ORM\Column(type="string", length=50)
     *
     * @Assert\NotBlank(message="Por favor ingrese el Apellido!")
     */
    protected $apellido;
    
    public function getApellido():string{ return $this->apellido==null ? "": $this->apellido; }
    
    public function setApellido(string $value){ $this->apellido = $value; }
    
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $direccion;
    
    public function getDireccion():string{ return $this->direccion==null ? "": $this->direccion; }
    
    public function setDireccion(string $value){ $this->direccion = $value; }
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $celular;
    
    public function getCelular():string{ return $this->celular==null ? "": $this->celular; }
    
    public function setCelular(string $value){ $this->celular = $value;}
    
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $telefono;
    
    public function getTelefono():string{ return $this->telefono==null ? "": $this->telefono; }
    
    public function setTelefono(string $value){ $this->telefono = $value;}
    
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $fechanacimiento;
    
    public function getFechanacimiento() { return $this->fechanacimiento; }
    
    public function setFechanacimiento($value){ $this->fechanacimiento = $value;}
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $facebook;
    
    public function getFacebook():string{ return $this->facebook==null ? "": $this->facebook; }
    
    public function setFacebook(string $value){ $this->facebook = $value;}
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $instagram;
    
    public function getInstagram():string{ return $this->instagram==null ? "": $this->instagram; }
    
    public function setInstagram(string $value){ $this->instagram = $value;}
    
    /**
     * JSON con las Redes Sociales que agregue el usuario
     * 
     * @ORM\Column(type="text", nullable=true)
     */
    protected $social;
    
    public function getSocial():string{ return $this->social==null ? "": $this->social; }
    
    public function setSocial(string $value){ $this->social = $value;}
    
    /**
     * @ORM\Column(type="date", nullable=false)
     */
    protected $fechacreacion;
    
    public function getFechacreacion() { return $this->fechacreacion; }
    
    public function setFechacreacion($value){ $this->fechacreacion = $value;}
    
}