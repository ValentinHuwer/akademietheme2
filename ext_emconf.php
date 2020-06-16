<?php

/**
 * Extension Manager/Repository config file for ext "akademietheme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'akademieTheme',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PandoMediaGmbh\\Akademietheme\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Valentin Huwer',
    'author_email' => 'valentin-huwer@gmx.de',
    'author_company' => 'Pando Media GmbH',
    'version' => '1.0.0',
];
