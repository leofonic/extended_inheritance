<?php
$aModule = array(
    'id'          => 'extended_inheritance',
    'title'       => 'Extended Inheritance',
    'description' =>  array(
        'de'=>'Erlaubt Felder vom Vater an Varianten zu vererben',
        'en'=>'Allows to inherit fields from parent to variant',
    ),
    'version'     => '1.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxarticle'  => 'extended_inheritance/core/extended_inheritance_oxarticle',
    ),
    'settings'    => array(
        array('group' => 'main', 'name' => 'aDoubleCopyFields', 'type' => 'arr',  'value' => array('oxarticles__oxweight','oxarticles__oxpricea','oxarticles__oxpriceb','oxarticles__oxpricec',)),
        array('group' => 'main', 'name' => 'aInheritFields', 'type' => 'arr',  'value' => array('')),
    )
);