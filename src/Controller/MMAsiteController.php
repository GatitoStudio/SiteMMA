<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\UsersRepository;
use App\Repository\AnnaleRepository;
use App\Repository\EmploisdutempsRepository;
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

        $events=$repo->findAllGreaterEqualThanDate(new \dateTime("Now"));
        dump($events);
		return $this->render('blog/events.html.twig',[
            'events'=>$events
        ]);
    }
        
	/**
     * @Route("/edt/{id}", name="showEdt")
     */
	public function showEdt(EmploisdutempsRepository $repo,EventRepository $eventrepo,$id){
        $edt=$repo->find($id);
        //$file = 'https://www.emploisdutemps.uha.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=76dc4a599ebf765d6894fa77151504334592592d3b282f749c9a606b710f264f2a2c262ab3ba48506729f6560ae33af62704eb6c3e6444d06eebeb5635bb9f49,1';
        if ($stream = fopen($edt->getLien(), 'r')) {
            $data =stream_get_contents ($stream);
        }
        fclose($stream);
        $lesevents= $eventrepo->findAllGreaterEqualThanDate(new \dateTime("Now"));
        $data = str_replace("END:VCALENDAR\r\n", "", $data);

        foreach($lesevents as $unevent){
            $data=$data."\r\nBEGIN:VEVENT\r\nDTSTAMP:20191227T115318Z\r\nDTSTART:".$unevent->GetDate()->format("Ymd")."T".$unevent->GetDate()->format("His")."Z\r\nDTEND:20191228T224500Z\r\nSUMMARY:".$unevent->GetNom()."\r\nLOCATION:".$unevent->GetAdresse();
        }
        $data=$data."\r\nEND:VEVENT\r\nEND:VCALENDAR\r\n";
       // return $this->render('blog/home.html.twig');
        dump($data);
        return $this->render('blog/edt.html.twig',[
            'edt'=>$data
        ]);
    }
	/**
     * @Route("/", name="home")
     */
	public function Home(EventRepository $repo){
        $events=$repo->findAllGreaterEqualThanDate(new \dateTime("Now"));

		return $this->render('blog/home.html.twig',[
            'events'=>$events
        ]);
    }

	public function lesemploisdutempsmenu(EmploisdutempsRepository $repo){
        $lesemploisdutemps=$repo->findAll();
        return $this->render('blog/dropdownemploisdutemps.html.twig',[
            'edt'=>$lesemploisdutemps
        ]
    );
    }
    public function lesAnnalesmenu(AnnaleRepository $repo){
        $lesAnnales=$repo->findAll();
        return $this->render('blog/dropdownAnnales.html.twig',[
            'annales'=>$lesAnnales
        ]
    );
    }

}
