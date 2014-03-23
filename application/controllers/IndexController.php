<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */

        //echo $this->view->baseUrl();
        
    }

    public function indexAction()
    {
        $this->view->welcome = "Welcome to Scrum";
        $scrum = new stdClass();
        $scrum->url = "/scrum/list";
        $scrum->label = array(); 
        $scrum->label[] = "Crouch!";
        $scrum->label[] = "...Touch!";
        $scrum->label[] = "...Pause!";
        $scrum->label[] = "...Engage!";
        
        //Zend_Debug::dump($scrum);//exit;
        $this->view->scrumurl = $scrum;
    }


}

