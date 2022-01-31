<?php

namespace App\Controller;

use App\Form\ReponsesType;
use App\Repository\QuestionsRepository;
use App\Entity\ReponsesQuestionnaireGeneral;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionnaireController extends AbstractController
{
    /**
     * @Route("/questionnaire", name="questionnaire")
     * 
     */
    public function index(QuestionsRepository $questionsRepository, Request $request): Response
{
    $questions = $questionsRepository->findAll();

        $reponses = new ReponsesQuestionnaireGeneral();

        $form = $this->createForm(ReponsesType::class, $reponses);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if ($form->isValid()) {

              
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($reponses);
                $manager->flush();
                return $this->redirectToRoute('app_register');
                
            }
        }

        return $this->render('registration/questions.html.twig', [
            'questions' => $questions,
                'questionnaireForm' => $form->createView(),
        ]);
    }
}
   
 
