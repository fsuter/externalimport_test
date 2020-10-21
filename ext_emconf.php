<?php

/*********************************************************************
 * Extension configuration file for ext "externalimport_test".
 *
 * Generated by ext 16-11-2016 17:14 UTC
 *
 * https://github.com/t3elmar/Ext
 *********************************************************************/

$EM_CONF[$_EXTKEY] = [
        'title' => 'External Import Test Data',
        'description' => 'Test data and scenarios for the External Import extension.',
        'category' => 'example',
        'author' => 'Francois Suter (Idéative)',
        'author_email' => 'typo3@cobweb.ch',
        'shy' => '',
        'priority' => '',
        'module' => '',
        'state' => 'alpha',
        'internal' => '',
        'uploadfolder' => 0,
        'createDirs' => '',
        'modify_tables' => '',
        'clearCacheOnLoad' => 1,
        'lockType' => '',
        'author_company' => '',
        'version' => '0.8.0',
        'constraints' =>
                [
                        'depends' =>
                                [
                                        'external_import' => '5.0.0-0.0.0',
                                        'svconnector_feed' => '2.2.0-0.0.0',
                                        'svconnector_csv' => '2.2.0-0.0.0',
                                        'svconnector_json' => '2.2.0-0.0.0',
                                        'typo3' => '9.5.0-10.4.99',
                                ],
                        'conflicts' =>
                                [
                                ],
                        'suggests' =>
                                [
                                ],
                ],
];
