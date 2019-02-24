<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    return new Response('Go Go symfony');
  }

  /**
   * @Route("/news/{var}")
   */
  public function show($var)
  {
    /* return new Response(
      sprintf('Prueba de variable: %s',$var)
    ); */

    $comments = [
      'Hola soy pablito',
      'Estoy un poco aburrido',
      'Ya esto feliz nigga'
    ];

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-',' ',$var)),
      'comments' => $comments
    ]);
  }
}
