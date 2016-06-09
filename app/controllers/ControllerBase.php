<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
/*	protected $outputFields = array(
		'result' => '',
		'error' => false,
		'message' => ''
	); */

	public function beforeExecuteRoute(\Phalcon\Mvc\Dispatcher $dispatcher){
		$this->response->setContentType('application/json', 'UTF-8');
	}
/*	public function beforeExecuteRoute(\Phalcon\Mvc\Dispatcher $dispatcher){
		$response = $this->response;
		$response->setHeader('Access-Control-Allow-Origin', '*');
		$response->setHeader('Access-Control-Allow-Headers', 'X-Requested-With');
		$response->sendHeaders();
		$reqVar = null;
		$URI = explode('/', $this->request->getURI());

		if($this->request->isPost()){
			$reqVar = json_decode(file_get_contents('php://input'), true);
		}
	}

	public function afterExecuteRoute(\Phalcon\Mvc\Dispatcher $dispatcher){
		error_log("in afterExecuteRoute");

//		$this->response->setContentType('application/json', 'UTF-8');

		$data = $dispatcher->getReturnedValue();
		$output['result'] = $data;
    	$outputJSON = json_encode($output);
		error_log("outputJSON: ".$outputJSON);
		$this->response->setContent($outputJSON);
		return $this->response->send();
	} */
}
