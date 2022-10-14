<?php

namespace App\Controller;

use App\Entity\NoteControle;
use App\Form\NoteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class NoteController extends AbstractController
{
        #[Route('/note', name: 'app_note')]
        public function note(Request $request, EntityManagerInterface $entityManager): Response
        {

            $note = new NoteControle();
            $form = $this->createForm(NoteType::class, $note);
            $form->handleRequest($request);
            var_dump($form->isValid());
                exit();  
            if ($form->isSubmitted() && $form->isValid()) {
                var_dump("ici");
                exit();          
                $note = $form->getData();     
                $entityManager->persist($note);
                $entityManager->flush();
                // do anything else you need here, like send an email
            };

            return $this->render('note/note.html.twig', [
                'NoteForm' =>  $form->createView(),
            ]);
    }
}

    
