<?php

/*********************************************************************
* Extension configuration file for ext "externalimport_tut".
*
* Generated by ext 23-07-2013 15:27 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Import Test Data',
  'description' => 'Test data and scenarios for the External Import extension.',
  'category' => 'example',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'shy' => '',
  'dependencies' => 'external_import,svconnector_csv,svconnector_feed,news',
  'conflicts' => '',
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
  'version' => '0.3.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'external_import' => '3.0.0-0.0.0',
      'svconnector_feed' => '2.0.0-0.0.0',
      'typo3' => '7.6.0-7.6.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
      'devlog' => '',
    ),
  ),
  '_md5_values_when_last_written' => 'a:18:{s:9:"ChangeLog";s:4:"1df2";s:36:"class.tx_externalimporttut_hooks.php";s:4:"22cf";s:46:"class.tx_externalimporttut_transformations.php";s:4:"6035";s:12:"ext_icon.gif";s:4:"da0a";s:17:"ext_localconf.php";s:4:"7dcd";s:14:"ext_tables.php";s:4:"bada";s:14:"ext_tables.sql";s:4:"7525";s:41:"icon_tx_externalimporttut_departments.gif";s:4:"0cdd";s:35:"icon_tx_externalimporttut_teams.gif";s:4:"0094";s:16:"locallang_db.xml";s:4:"bcf0";s:10:"README.txt";s:4:"5a50";s:7:"tca.php";s:4:"3bb9";s:14:"doc/manual.pdf";s:4:"5674";s:14:"doc/manual.sxw";s:4:"e3e6";s:19:"res/departments.txt";s:4:"4626";s:17:"res/employees.txt";s:4:"8c68";s:16:"res/holidays.txt";s:4:"7b08";s:13:"res/teams.txt";s:4:"ad82";}',
  'suggests' =>
  array (
  ),
);

?>