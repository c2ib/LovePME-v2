<?php

namespace App\Controller;

use App\Repository\QuestionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuestionnaireController extends AbstractController
{
    /**
     * @Route("/questionnaire", name="questionnaire")
     * 
     */
    public function index(QuestionsRepository $questionsRepository): Response
{
    $questions = $questionsRepository->findAll();



    {
        return $this->render('registration/questions.html.twig', [
            'questions' => $questions,
        ]);
    }
}
   
 
}