<?php


namespace Application;

class Module extends \Eta\Core\Module {

	public function onInitialize() {

	}

	public function getRouting() {
		return [
			"application/index" => [
				'type' => 'Literal',
				'route' => "",
				'constraints' => [
					'controller' => 'Index',
					'action' => 'index'
				]
			],
            /*
			"application/segment" => [
				'type' => 'Segment',
				'route' => "/foo/[:controller[/:action][/]]",
				'constraints' => [
					'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
					'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
				]
			],
			"application/literal" => [
				'type' => 'Literal',
				'route' => "/fooo",
				'constraints' => [
					'controller' => 'Index',
					'action' => 'fooofooo'
				]
			],
			"application/regex" => [
				'type' => 'Regex',
				'route' => "/foobar/(?<numbers>[0-9]+)",
				'constraints' => [
					'controller' => 'Index',
					'action' => 'regex-numbers'
				]
			]
			*/
		];
	}
}