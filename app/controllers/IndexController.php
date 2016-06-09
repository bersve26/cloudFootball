<?php



class IndexController extends ControllerBase
{

    public function indexAction()
    {
//		$this->response->setContentType('application/json', 'UTF-8');
//		$this->response->setContent(json_encode(array("test test test")));
//		error_log("in indexAction");
		return array("test test test");
//		return $this->response->send();
//	    return array('one', 'two', 'three');
	}

}

