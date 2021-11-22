<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    #[Route('/invoice', name: 'invoice')]
    public function index(Request $request): Response
    {
        //$ipAddress = $request->getClientIp();
        return $this->render('base.html.twig', []);
    }
}
