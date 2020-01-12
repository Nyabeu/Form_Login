<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogedController extends AbstractController
{
    /**
     * @Route("/connected", name="user_connected")
     */
    public function logedUser(): Response
    {
		/** @var \App\Entity\User $user */
        $user = $this->getUser(); 
        return $this->render('connected/conect.html.twig',['user'=>$user]);
    }

}
