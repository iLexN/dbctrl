<?php
//include database connection function
require 'config.php';

$manager= $xpdo->getManager();
$generator= $manager->getGenerator();

/*
 * Build the Schema
 */
//$xml= $generator->writeSchema('enquiries.schema.xml','directory_name', 'xPDOObject','');

/*
 * Schema needs to be manually edited to add the JOIN. Note
 */

//...

/*
 * From the schema, build the classes
 */
$schema = 'enquiries.schema.manual.xml';
$target = 'model/';
$generator->parseSchema($schema,$target);
