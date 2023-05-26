<?php
$arUrlRewrite=array (
  8 => 
  array (
    'CONDITION' => '#^/catalog/([\\w,-]+)/([\\d]+)/(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_ID=$2',
    'ID' => '',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/([\\w,-]+)/(\\?.*)?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
