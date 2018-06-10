<?php

namespace Company\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompanyCommonBundle:Default:index.html.twig');
    }
}
