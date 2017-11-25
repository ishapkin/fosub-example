<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction(Request $request){
        return $this->render('home/home.html.twig');
    }
    /**
     * @Route("/user")
     */
    public function userAction(Request $request)
    {
        return new Response('Hello user!');
    }
    /**
     * @Route("/admin")
     */
    public function adminAction(Request $request){
        return new Response('Hello admin!');
    }
}
