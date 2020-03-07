<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Annale;
use App\Entity\Tutorat;
use App\Form\EventType;
use App\Form\TutoratType;
use App\Entity\Offredestage;
use App\Form\OffreStageType;
use App\Repository\EventRepository;
use App\Repository\AnnaleRepository;
use App\Repository\TutoratRepository;
use App\Repository\OffredestageRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="adminPanel")
     */
    public function index()
    {
        $userssessions=$this->getUser();
        if (!$userssessions) {
            dump($userssessions);   
           return $this->redirectToRoute('security_login');
         }
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
        /**
     * @Route("/admin/event/create", name="createEvent")
     * @Route("/admin/ShowEvent/{id}", name="ShowEvent")
     */
    public function createEvent(Request $request,ObjectManager $manager,Event $event=null)
    {
        $userssessions=$this->getUser();
        if (!$userssessions) {
            dump($userssessions);   
           return $this->redirectToRoute('security_login');
         }
         if(!$event){
            $event=new Event();
         }
        // dump($request);
         if(!$event->getDate()){
            $dateDuJour= new \DateTime("Now");            
            $event->setDate($dateDuJour);
         }
         $form= $this->createForm(EventType::class,$event);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            $event->setImagecover("");
            $dateDuJour= $event->getDate();
            $heure=$event->getHeure();
            $dateDuJour->setTime(23,59,59);
            $manager->persist($event);
            $manager->flush();
            return $this->redirectToRoute('Adminevents');
         }
        return $this->render('admin/createEvent.html.twig', [
            'eventForm' => $form->createView()
        ]);
    }
    	/**
     * @Route("/admin/events", name="Adminevents")
     */
	public function showEvents(EventRepository $repo){
        $events=$repo->findAll();
		return $this->render('admin/events.html.twig',[
            'events'=>$events
        ]);
    }
    
    	/**
     * @Route("/admin/deleteEvent/{id}", name="deleteEvent")
     */
	public function DeleteEvent(EventRepository $repo,$id,ObjectManager $manager){
        dump($id);
        $event=$repo->find($id);
        $manager->remove($event);
        $manager->flush();
        $events=$repo->findAll();
        return $this->redirectToRoute('Adminevents');

     }
        /**
     * @Route("/admin/OS/create", name="createOS")
     * @Route("/admin/ShowOS/{id}", name="ShowOS")
     */
	public function CreateOffreStage(Request $request,ObjectManager $manager,Offredestage $offstage=null){
        
        $userssessions=$this->getUser();
        if (!$userssessions) {
            dump($userssessions);   
           return $this->redirectToRoute('security_login');
         }
         if(!$offstage){
            $offstage=new Offredestage();
         }
         if(!$offstage->getDatePublication()){
            $dateDuJour= new \DateTime("Now");            
            $offstage->setDatePublication($dateDuJour);
         }
         dump($request);

         $form= $this->createForm(OffreStageType::class,$offstage);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($offstage);
            $manager->flush();
            return $this->redirectToRoute('AdminOffreStage');
         }
		return $this->render('admin/createOffreStage.html.twig', [
            'OsForm' => $form->createView()
        ]);
    }
    /**
     * @Route("/admin/OffresStage", name="AdminOffreStage")
     */
	public function showOffresStage(OffredestageRepository $repo){
        $offres=$repo->findAll();
		return $this->render('admin/OffresStage.html.twig',[
            'OffresStage'=>$offres
        ]);
    }
	/**
     * @Route("/admin/deleteOffre/{id}", name="deleteOffre")
     */
	public function DeleteOffre(OffredestageRepository $repo,$id,ObjectManager $manager){
        dump($id);
        $offre=$repo->find($id);
        $manager->remove($offre);
        $manager->flush();
        $offre=$repo->findAll();
        return $this->redirectToRoute('AdminOffreStage');

     }
    /**
     * @Route("/admin/annales", name="AdminAnnals")
     */
	public function showAnnales(AnnaleRepository $repo){
        $annales=$repo->findAll();
		return $this->render('admin/annales.html.twig',[
            'annales'=>$annales
        ]);
    }
        /**
     * @Route("/admin/annale/{id}", name="ShowAnnale")
     */
	public function showAnnale(AnnaleRepository $repo,$id){
        $annales=$repo->findAll();
		return $this->render('admin/annales.html.twig',[
            'annales'=>$annales
        ]);
    }

            /**
     * @Route("/admin/annale/delete/{id}", name="deleteAnnale")
     */
	public function DeleteAnnale(AnnaleRepository $repo){
        $annales=$repo->findAll();
		return $this->render('admin/annales.html.twig',[
            'annales'=>$annales
        ]);
    }



            /**
     * @Route("/admin/tutorat/create", name="createTutorat")
     * @Route("/admin/ShowTutorat/{id}", name="ShowTutorat")
     */
	public function CreateTutorat(Request $request,ObjectManager $manager,Tutorat $tuto=null){
        
        $userssessions=$this->getUser();
        if (!$userssessions) {
            dump($userssessions);   
           return $this->redirectToRoute('security_login');
         }
         if(!$tuto){
            $tuto=new Tutorat();
         }
         if(!$tuto->getDate()){
            $dateDuJour= new \DateTime("Now");            
            $tuto->setDate($dateDuJour);
         }
         dump($request);

         $form= $this->createForm(TutoratType::class,$tuto);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($tuto);
            $manager->flush();
            return $this->redirectToRoute('AdminTutorats');
         }
		return $this->render('admin/createTutorat.html.twig', [
            'tutoForm' => $form->createView()
        ]);
    }
    /**
     * @Route("/admin/tutorats", name="AdminTutorats")
     */
	public function showTutorats(TutoratRepository $repo){
        $tutos=$repo->findAll();
		return $this->render('admin/Tutorats.html.twig',[
            'tutorats'=>$tutos
        ]);
    }
	/**
     * @Route("/admin/deleteTutorat/{id}", name="deleteTutorat")
     */
	public function DeleteTutorat(TutoratRepository $repo,$id,ObjectManager $manager){
        dump($id);
        $offre=$repo->find($id);
        $manager->remove($offre);
        $manager->flush();
        $offre=$repo->findAll();
        return $this->redirectToRoute('AdminTutorats');

     }
}
