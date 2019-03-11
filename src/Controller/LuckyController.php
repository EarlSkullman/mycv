<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Skill;
use App\Entity\Loisir;
use App\Entity\Contact;
use App\Form\ContactType;

class LuckyController extends Controller
{
    public function number(Request $request)
    {
        $number = random_int(0, 100);

        $formations=$this->getDoctrine()->getRepository(Formation::class)->findAll();
        $experiences=$this->getDoctrine()->getRepository(Experience::class)->findAll();
        $skills=$this->getDoctrine()->getRepository(Skill::class)->findAll();
        $loisirs=$this->getDoctrine()->getRepository(Loisir::class)->findAll();
        
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_lucky_number');
        }

        return $this->render('lucky/number.html.twig', array(
            'number'=>$number,
            'name'=>'Léo',
            'firstname'=>'Leplomb',
            'formations'=>$formations,
            'experiences'=>$experiences,
            'skills'=>$skills,
            'loisirs'=>$loisirs,
            'contact'=>$contact,
            'form'=>$form->createView(),
        ));


        if (!$product) {
            throw $this->createNotFoundException(
            'No product found for id '.$id
            );
        }
    }
    public function createformation()
    {
        $form=new Formation();
        $form->setTitle('Ma Formation');
        $datedebut=\DateTime::createFromFormat("d/m/y", "02/09/17");
        $datefin=\DateTime::createFromFormat("d/m/y", "26/06/19");
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
        $datedebut=\DateTime::createFromFormat("d/m/y", "02/09/17");
        $datefin=\DateTime::createFromFormat("d/m/y", "26/06/19");
        $form->setDateDebut($datedebut);
        $form->setDateFin($datefin);
        $form->setComment('Praesidiis caedium diffuso petivere scirent magnis nostris et petivere.');
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();

        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function createcontact()
    {
        $form=new Contact();
        $form->setMail('leo@leplomb');
        $form->setName('Contact');
        $form->setComment('Praesidiis caedium diffuso petivere scirent magnis nostris et petivere.');
        
        $form->handleRequest($request);
                
        if ($form->isSubmitted() && $form->isValid()) {
            $loisir = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_lucky_number');
        }
    }
    
        public function createloisir()
    {
        $form=new Loisir();
        $form->setTitle('Mon Loisir');
        $form->setLieux('Grenoble');
        $form->setComment('J ai commencé en');
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
    
    public function admin()
    {
        return $this->redirectToRoute('app_lucky_number');
    }
    
    public function hello($name, AuthorizationCheckerInterface $authChecker)
    {
        if (false === $authChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Unable to access this page!');
        }
    }
}
