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
     */
    public function createEvent(Request $request,ObjectManager $manager)
    {

        $userssessions=$this->getUser();
        if (!$userssessions) {
            dump($userssessions);   
           return $this->redirectToRoute('security_login');
         }
         $event=new Event();
         dump($request);
         $event->setDate(new \DateTime("Now"));
         $form= $this->createForm(EventType::class,$event);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
            $event->setImagecover("");
            $manager->persist($event);
            $manager->flush();
            return $this->redirectToRoute('adminPanel');
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
}
