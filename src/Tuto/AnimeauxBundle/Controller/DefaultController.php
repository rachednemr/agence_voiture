<?php

namespace Tuto\AnimeauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        //throw $this->createNotFoundException('2012 GONNA CHANGE MY CAREER!!!');
        $session = $this->getRequest()->getSession();
        $session->set('value', '2149');
        return $this->render('TutoAnimeauxBundle:Default:index.html.twig');
       // return $this->forward('TutoAnimeauxBundle:Add:addCar');
    }
}
