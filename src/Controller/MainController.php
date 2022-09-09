<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('', name: 'main')]

class MainController extends AbstractController
{
    // Attributs Php: permet de donner des détails supplémentaires au code.#[]
    // Définit une route et lui donne un nom qui doit être unique dans l'application.
    // Nom du controller_Nom de la méthode.
    // Response correspond au typage de la réponse.

// -------------------------------------------------------------------------------

    #[Route('/', name: 'index', methods:['GET'])]
    public function index(): Response
    {
        // return $this->redirectToRoute('game_list'); redirection interne
        // return $this->redirect('https://google.com'); redirection externe
        // return $this->json([ 'status' => 'true'])

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

// -------------------------------------------------------------------------------

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
// -------------------------------------------------------------------------------