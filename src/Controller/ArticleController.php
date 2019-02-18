<?php
/**
 * Created by PhpStorm.
 * User: eduard
 * Date: 2/18/19
 * Time: 12:13 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('My first page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        $comments = [
          'I ate a normal rock once. It did NOT taste like bacon',
          'Woohooo! I\'m going on an all-asteroid diet',
          'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];



      return $this->render('article/show.html.twig',[
         'title'=> ucwords(str_replace('-',' ',$slug)),
          'comments'=>$comments,
      ]);
    }
}