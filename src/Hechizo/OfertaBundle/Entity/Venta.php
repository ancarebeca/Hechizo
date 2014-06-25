<?php
namespace Hechizo\OfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Venta
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Hechizo\OfertaBundle\Entity\Oferta")
     */
    protected $oferta;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Hechizo\UsuarioBundle\Entity\Usuario")
     */
   protected $usuario;

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Venta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set oferta
     *
     * @param \Hechizo\OfertaBundle\Entity\Oferta $oferta
     * @return Venta
     */
    public function setOferta(\Hechizo\OfertaBundle\Entity\Oferta $oferta)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \Hechizo\OfertaBundle\Entity\Oferta 
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Set usuario
     *
     * @param \Hechizo\UsuarioBundle\Entity\Usuario $usuario
     * @return Venta
     */
    public function setUsuario(\Hechizo\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Hechizo\UsuarioBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
