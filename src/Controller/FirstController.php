<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{

    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
       return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
           'firstName'=>'Amani',
           'name'=>'salah'
        ]);
    }



    #[Route('/sayHello/{name}/{firstname}', name:'say.hello')]
       public function sayHello($name1 , $firstname1):Response
    {
        return $this->render('first/Hello.html.twig',[
            'controller_name' => 'FirstController',
            'nom'=> $name1,
            'prom'=> $firstname1
        ]);
    }
    #[Route('/browse/{slug}')]
    public function browse(string $slug=null): Response
    {
        if($slug){
            $title='genre: '.$slug;}
        else {
            $title='All genres ';
        }
        return new Response ($title);
    }
}