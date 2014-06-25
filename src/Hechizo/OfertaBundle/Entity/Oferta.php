<?php
namespace Hechizo\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Oferta\OfertaBundle\Entity\OfertaRepository")
 */
class Oferta
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 *
	 */
	protected $nombre;

	/**
	 * @ORM\Column(type="string")
	 *
	 */
	protected $slug;

	/**
	 * @ORM\Column(type="text")
	 *
	 */
	protected $descripcion;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $condiciones;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $rutaFoto;


	/**
	 * @ORM\Column(type="decimal", scale=2)
	 *
	 */
	protected $precio;

	/**
	 * @ORM\Column(type="decimal", scale=2)
	 */
	protected $descuento;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 *
	 */
	protected $fecha_publicacion;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 *
	 */
	protected $fecha_expiracion;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $compras;

	/**
	 * @ORM\Column(type="integer")
	 *
	 */
	protected $umbral;

	/**
	 * @ORM\Column(type="boolean")
	 *
	 */
	protected $revisada;

	/**
	 * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")
	 */
	protected $ciudad;

	/**
	 * @ORM\ManyToOne(targetEntity="Cupon\TiendaBundle\Entity\Tienda")
	 */
	protected $tienda;

	public function __toString()
	{
		return $this->getNombre();
	}

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
     * Set nombre
     *
     * @param string $nombre
     * @return Oferta
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Oferta
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Oferta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     * @return Oferta
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     * @return Oferta
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;

        return $this;
    }

    /**
     * Get rutaFoto
     *
     * @return string 
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Oferta
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Oferta
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set fecha_publicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Oferta
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fecha_publicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fecha_publicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * Set fecha_expiracion
     *
     * @param \DateTime $fechaExpiracion
     * @return Oferta
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fecha_expiracion = $fechaExpiracion;

        return $this;
    }

    /**
     * Get fecha_expiracion
     *
     * @return \DateTime 
     */
    public function getFechaExpiracion()
    {
        return $this->fecha_expiracion;
    }

    /**
     * Set compras
     *
     * @param integer $compras
     * @return Oferta
     */
    public function setCompras($compras)
    {
        $this->compras = $compras;

        return $this;
    }

    /**
     * Get compras
     *
     * @return integer 
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Set umbral
     *
     * @param integer $umbral
     * @return Oferta
     */
    public function setUmbral($umbral)
    {
        $this->umbral = $umbral;

        return $this;
    }

    /**
     * Get umbral
     *
     * @return integer 
     */
    public function getUmbral()
    {
        return $this->umbral;
    }

    /**
     * Set revisada
     *
     * @param boolean $revisada
     * @return Oferta
     */
    public function setRevisada($revisada)
    {
        $this->revisada = $revisada;

        return $this;
    }

    /**
     * Get revisada
     *
     * @return boolean 
     */
    public function getRevisada()
    {
        return $this->revisada;
    }

    /**
     * Set ciudad
     *
     * @param \Cupon\CiudadBundle\Entity\Ciudad $ciudad
     * @return Oferta
     */
    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Cupon\CiudadBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set tienda
     *
     * @param \Cupon\TiendaBundle\Entity\Tienda $tienda
     * @return Oferta
     */
    public function setTienda(\Cupon\TiendaBundle\Entity\Tienda $tienda = null)
    {
        $this->tienda = $tienda;

        return $this;
    }

    /**
     * Get tienda
     *
     * @return \Cupon\TiendaBundle\Entity\Tienda 
     */
    public function getTienda()
    {
        return $this->tienda;
    }
}
