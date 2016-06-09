<?php

class PredictController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->response->setContentType('application/json', 'UTF-8');

        $teams = Teams::find();
        $teamNames = array();
        foreach($teams as $name){
            $teamNames[] = $name;
        }
        $this->response->setContent(json_encode($teamNames));
        return $this->response->send();

//        return $teamNames;
    }

}

