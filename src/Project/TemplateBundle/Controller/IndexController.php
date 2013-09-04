<?php

namespace Project\TemplateBundle\Controller;

use Project\TemplateBundle\Controller\BaseController;

class IndexController extends BaseController
{
    public function indexAction()
    {
        return $this->render('ProjectTemplateBundle:Index:index.html.twig',
            array()
        );
    }
}
