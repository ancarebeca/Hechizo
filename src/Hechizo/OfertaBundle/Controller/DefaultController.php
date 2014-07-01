<?php

namespace Hechizo\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;


class DefaultController extends Controller
{
    public function portadaAction()
    {
        $em = $this -> getDoctrine()->getManager();
        $ciudad = $em -> getRepository('CiudadBundle:Ciudad')->findByNombre('Madrid');
        $today = new \DateTime('2014-07-01 23:59:59');
        $oferta = $em -> getRepository('OfertaBundle:Oferta')->findOneBy(array(
            'ciudad' => $ciudad,
            'fecha_publicacion' => $today
    ));

        return $this->render(
            'OfertaBundle:Default:portada.html.twig',
            array('oferta' => $oferta)
        );
    }
}
