<?php
/*
./noyau/fonctions.php
Fonctions bien utiles poiur notre framework
*/


/**
* Fonction de slugification à la volée
* @param string $str [description]
* @return string     [description]
*/

namespace Noyau\Fonctions;
function slugify(string $str) {
 return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
 }
