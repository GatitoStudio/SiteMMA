<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
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
            //$dateDuJour->setTimestamp($event->getHeure());
            
            $event->setDate($dateDuJour);
         }
         $form= $this->createForm(EventType::class,$event);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            
            $event->setImagecover("");
    
            $dateDuJour= $event->getDate();
            $heure=$event->getHeure();
            
           // $dateDuJour->setTime( $heure->format("H"),$heure->format("i"),$heure->format("s"));
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
    
}
