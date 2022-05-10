<?php

namespace App\Controller;

use App\Entity\OrderEntity;
use App\Form\OrderForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    #[Route(path:'/')]
    public function view(Request $request): Response
    {
        $order = new OrderEntity();
        $form = $this->createForm(OrderForm::class, $order);
        $form->handleRequest($request);
        return $this->renderForm('index.html.twig', ['form' => $form]);
    }
}