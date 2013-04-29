<?php

namespace Tuto\AnimeauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddController extends Controller
{
    public function addCarAction()
    {
        return $this->render('TutoAnimeauxBundle:Add:index.html.twig', array('value' => $this->getRequest()->getSession()->get('value')));
    }
    
}
