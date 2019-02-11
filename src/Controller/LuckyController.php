<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;

use App\Entity\Experience;

use App\Entity\Skill;

class LuckyController extends Controller
{
    public function number()
    {
        $number = random_int(0, 100);
        $formations=$this->getDoctrine()->getRepository(Formation::class)->findAll();
        $experiences=$this->getDoctrine()->getRepository(Experience::class)->findAll();
        $skills=$this->getDoctrine()->getRepository(Skill::class)->findAll();
        return $this->render('lucky/number.html.twig', array(
            'number'=>$number,
            'name'=>'Léo',
            'firstname'=>'Leplomb',
            'formations'=>$formations,
            'experiences'=>$experiences,
            'skills'=>$skills,
        ));


        if(!$product){
        throw $this->createNotFoundException(
            'No product found for id '.$id
            );
        }
    }
    public function createformation () 
    {
        $form=new Formation();
        $form->setTitle('Ma Formation');
        $datedebut=\DateTime::createFromFormat("d/m/y","02/09/17");
        $datefin=\DateTime::createFromFormat("d/m/y","26/06/19");
        $form->setDateDebut($datedebut);
        $form->setDateFin($datefin);
        $form->setLieux('Grenoble');
        $form->setComment('J ai commencé en');
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();

        return $this->redirectToRoute('app_lucky_number');
        
    }
    
    public function createexpericence() 
    {
        $form=new Experience();
        $form->setTitle('Mon Experience');
        $datedebut=\DateTime::createFromFormat("d/m/y","02/09/17");
        $datefin=\DateTime::createFromFormat("d/m/y","26/06/19");
        $form->setDateDebut($datedebut);
        $form->setDateFin($datefin);
        $form->setComment('Praesidiis caedium diffuso petivere scirent magnis nostris et petivere.');
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();

        return $this->redirectToRoute('app_lucky_number');
        
    }
    
    public function createskill() 
    {
        $form=new Skill();
        $form->setTitle('Mon skill');
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();

        return $this->redirectToRoute('app_lucky_number');
        
    }
    
}