<?php


function PersonnagesManager($classe)
{
  require 'class/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

 spl_autoload_register('PersonnagesManager'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


$perso = new Personnage;

print_r($perso);