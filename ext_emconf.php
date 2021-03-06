<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Locate',
    'description' => 'The users country and prefered language and other facts will be detected. Depending on configurable rules the user can be redirected to other languages or pages.  New functionality can be added easily.',
    'version' => '9.0.0',
    'category' => 'fe',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'static_info_tables' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Florian Wessels',
    'author_email' => 'typo3-ext@bitmotion.de',
    'author_company' => 'Bitmotion GmbH',
    'autoload' => [
        'psr-4' => [
            'Bitmotion\\Locate\\' => 'Classes',
        ],
    ],
];
