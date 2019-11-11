<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MMAsiteController extends AbstractController
{
	/**
     * @Route("/event/{id}", name="voirevent")
     */
	public function showEvent(EventRepository $repo,$id){
        $event=$repo->find($id);
        if($event){
		return $this->render('blog/event.html.twig',[
            'event'=>$event
            ]);
        }
        else{
            return $this->redirectToRoute('adminPanel');
        }        
    }    
	/**
     * @Route("/events", name="events")
     */
	public function showEvents(EventRepository $repo){
        //$criteria = new \Doctrine\Common\Collections\Criteria();
        //$criteria->where($criteria->expr()->gte('date', new \dateTime("Now")))
        //->orderBy(['Date']);    
        //$events = $repo->matching($criteria);
        $events=$repo->findAllGreaterEqualThanDate(new \dateTime("Now"));
        dump($events);
		return $this->render('blog/events.html.twig',[
            'events'=>$events
        ]);
    }
	/**
     * @Route("/events/create", name="eventscreate")
     */
	public function createEvents(){
       
		return $this->render('blog/createevent.html.twig');
	}         

	/**
     * @Route("/", name="home")
     */
	public function Home(){
		return $this->render('blog/home.html.twig',[
	'title'=>"Bienvenue",'age'=>18]);
    }


}
