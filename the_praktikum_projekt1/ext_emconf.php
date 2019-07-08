<?php

/**
 * Extension Manager/Repository config file for ext "the_praktikum_projekt1".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'The Praktikum Projekt 1',
    'description' => 'The Praktikum Projekt 1 für das Praktikum TYPO3',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ion2s\\ThePraktikumProjekt1\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Aleksandra Fey',
    'author_email' => 'aleksandra.fey@ion2s.com',
    'author_company' => 'ion2s',
    'version' => '1.0.0',
];
