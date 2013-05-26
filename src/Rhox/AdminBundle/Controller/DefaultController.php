<?php

namespace Rhox\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'Rhox.pl';
        return $this->render('RhoxAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
