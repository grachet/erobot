<?php

namespace IUT\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('IUTAdminBundle:Default:index.html.twig');
    }
}
