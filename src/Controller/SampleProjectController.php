<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SampleProjectController extends AbstractController
{
    /**
     * @Route("/sample/project", name="app_sample_project")
     */
    public function index(): Response
    {
        return $this->render('sample_project/index.html.twig', [
            'controller_name' => 'SampleProjectController',
        ]);
    }
}
