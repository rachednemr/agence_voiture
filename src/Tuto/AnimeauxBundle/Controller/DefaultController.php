<?php

namespace Tuto\AnimeauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tuto\AnimeauxBundle\Entity\voiture;
use Tuto\AnimeauxBundle\Form\voitureType;
class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $voit=$this->getDoctrine()->getEntityManager();
        $voitures=$voit->getRepository("TutoAnimeauxBundle:voiture")->findAll();
        return $this->render('TutoAnimeauxBundle:Default:index.html.twig', array('voitures' => $voitures));
    }
    
    public function ajoutAction()
    {
        $voit=$this->getDoctrine()->getEntityManager();
        $voitu=new voiture();
        $form=$this->createForm(new voitureType(),$voitu);
        $request=$this->getRequest();
        
        $form->bindRequest($request);
        if($form->isValid())
            {
            
            $voitu=$form->getData();
            $voit->persist($voitu);
            $voit->flush();
           // return $this->redirect($this->generateUrl("TutoAnimeauxBundle_index"));
            }
        /*$v=  new voiture(); 
        $v->setModel("mersedes2");
       $v->setGamme("honda");
        $v->setDateFabrication(new \DateTime());
        $voit->persist($v);//garder en memoire
       $voit->flush();*/
        
        return $this->render('TutoAnimeauxBundle:Default:Ajout.html.twig', array('form'=>$form->createView(),));
    }
    
    
}
