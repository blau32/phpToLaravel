<?php

$contactFile = '.contact.dat';
$contents = fopen($contactFile, 'a+');

$addText = 'adding 1 line'."\n";

fwrite($contents, $addText);

fclose($contents);