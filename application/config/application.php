<?php

return [
	"searchPath" => [],
	"modules" => [
		'Application'
	],
	"layouts" => [
		"default" => "application/data/layouts/default"
	],
    "plugins" => [
        "init" => [
            "application/plugin/initPlugin.php" => "\\initPlugin"
        ],
        "finalize" => [

        ]
    ]
];