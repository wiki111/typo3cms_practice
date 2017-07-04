<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "introduction".
 *
 * Auto generated 04-07-2017 05:58
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'The official Introduction Package',
  'description' => 'This package delivers a new website (page tree) and shows all out-of-the-box features of TYPO3, and includes a theme based on Twitter Bootstrap 3, and a style editor to customize the design. Sample editors and backend groups are added',
  'category' => 'distribution',
  'version' => '2.3.0',
  'state' => 'stable',
  'clearcacheonload' => true,
  'author' => 'Introduction Package Team',
  'author_email' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.9.99',
      'bootstrap_package' => '7.0.0-7.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'uploadfolder' => true,
  'createDirs' => '',
  'author_company' => '',
);

