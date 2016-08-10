<?php

namespace Application\Controller;

use Application\Model\Dummy;

class IndexController extends \Eta\Controller\ActionController {

	public function indexAction() {
		$result = Dummy::doSomething();
        return [
            'testVar' => $result
        ];
	}

}