<?php
/**
 * Created by PhpStorm.
 * User: eduard
 * Date: 2/18/19
 * Time: 12:13 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
       return new Response(sprintf(
           'Second page to show the article: %s',
           $slug
       ));
    }
}