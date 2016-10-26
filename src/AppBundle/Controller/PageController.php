<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Model\Person;

class PageController extends Controller
{
    /**
     * @Route("/index", name="index_page")
     */
    public function indexAction()
    {

        return $this->render('AppBundle:Page:index.html.twig', array(
            'content' => 'index'
        ));
    }

    /**
     * @Route("/page1", name="page1")
     */
    public function page1Action()
    {

        return $this->render('AppBundle:Page:page1.html.twig', array(
            'content' => 'tresc strony page1'
        ));
    }


    /**
     * @Route("/page2", name="page2")
     */
    public function page2Action()
    {
        return $this->render('AppBundle:Page:page2.html.twig', array(
            'content' => ' hhhhh'
        ));
    }

}
