<?php

namespace Hechizo\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Hechizo\OfertaBundle\Entity\Oferta;

class DefaultController extends Controller {
	public function portadaAction($ciudad) {
		$em = $this->getDoctrine()->getManager();
		$today = new \DateTime('2014-07-01 23:59:59');

		$oferta = $em->getRepository('OfertaBundle:Oferta')
				->findOfertaDelDia($ciudad);

		if (null == $ciudad) {
			$ciudad = $this->container
					->getParameter('hechizo.ciudad_por_defecto');
		}

		if (!$oferta) {
			throw $this
					->createNotFoundException(
							'No se ha encontrado ninguna oferta del día en la ciudad seleccionada');
		}

		$respuesta = $this
				->render('OfertaBundle:Default:portada.html.twig',
						array('oferta' => $oferta));

		return $respuesta;
	}
}
