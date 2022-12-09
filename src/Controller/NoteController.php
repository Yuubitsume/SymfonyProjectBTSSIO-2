<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Entity\User;
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

            $form = $this->createFormBuilder()
                ->add('user', User::class, [
                    'Choice_label' => 'username',
                    'query_builder' => function(UserRepository $UserRepo) {
                        return $UserRepo->createQueryBuilder('user')->orderBy('username', 'ASC');
                    }
                ])         
                ->add('matiere', Matiere::class, [
                    'Choice_label' => 'matiere',
                    'query_builder' => function(MatiereRepository $matiereRepo) {
                        return $matiereRepo->createQueryBuilder('matiere')->orderBy('libellé', 'ASC');
                    }
                ])   
                ->add('note_controle.note') 
                ->add('note_controle.coefficient') 
                ->getForm();    
                
                
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                        
                    $entityManager->persist($form);
                    $entityManager->flush();
                    // do anything else you need here, like send an email
                };

                return $this->render('note/note.html.twig', [
                    'NoteForm' =>  $form->createView(),
                ]);
    }
}

/*
Au cas où, remplace ça à la place de la version du dessus.

 public function note(Request $request, EntityManagerInterface $entityManager): Response
        {

            $note = new NoteControle();
            $form = $this->createForm(NoteType::class, $note);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                        
                $entityManager->persist($note);
                $entityManager->flush();
                // do anything else you need here, like send an email
            };

            return $this->render('note/note.html.twig', [
                'NoteForm' =>  $form->createView(),
            ]);
    }
}
*/