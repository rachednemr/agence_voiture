<?php

namespace Tuto\AnimeauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tuto\AnimeauxBundle\Entity\voiture;
use Tuto\AnimeauxBundle\Form\voitureType;
class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $entityManager=$this->getDoctrine()->getEntityManager();
        $voitures=$entityManager->getRepository("TutoAnimeauxBundle:voiture")->findAll();
        return $this->render('TutoAnimeauxBundle:Default:index.html.twig', array('voitures' => $voitures));
    }
    
    public function ajoutAction()
    {
        $entityManager=$this->getDoctrine()->getEntityManager();
        $voiture=new voiture();
        $form=$this->createForm(new voitureType(),$voiture);
        $request=$this->getRequest();

        $form->bindRequest($request);
        if($form->isValid())
        {

            $voiture=$form->getData();
            $entityManager->persist($voiture);
            $entityManager->flush();

        return $this->render('TutoAnimeauxBundle:Default:Ajout.html.twig', array('form'=>$form->createView(),));
    }
    
    
}
