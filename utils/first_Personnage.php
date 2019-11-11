<?php
class Personnage 
{
  private $_vie;
  private $_force            = 20;
  private $_localisation     = 0; 
  private $_experience       = 0;   
  private $_degats           = 0;   


  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

    public function __construct($force, $degats) // Constructeur demandant 2 paramètres
  {

    $this->setForce($force); 
    $this->setDegats($degats); 
    $this->_experience = 1; 
  }

  private static $_textAdire = 'Je vais manger un chou';

  public function deplacer() 
  {

  }

  public function gagnerExperience() 
  {
    $this->_experience = $this->_experience + 5;
  }
        
  public function frapper(Personnage $enemy)
  {
    $enemy->_degats += $this->_force;
  }

  public function afficherExperience()
  {
    echo "Vous avez " . $this->_experience . " EXP";
  }

  public static function chatting() {
    echo self::$_textAdire;
  }

  public function parler() 
  {
    echo "Hello wurd";
  }

  // ********** GETTERS *************

  public function getForce(){
    return $this->_force;
  }

  public function getExperience(){
    return $this->_experience;
  }

  public function getDegats(){
    return $this->_degats;
  }

  public function getLocalisation(){
    return $this->_degats;
  }

  // ********** SETTERS *************
      // Force
  public function setForce($force)
  {
    if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    
    if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }

      if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
    {
    $this->_force = $force;
    }
  }
      // ******* Experiences 
  public function setExperience($experience)
  {
    if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    
    if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }
    
    $this->_experience = $experience;
  }

  public function setDegats($degats)
  {
    if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    $this->_degats = $degats;
  }


    
}  

$perso = new Personnage(20,20);

$perso->chatting();





// $perso->gagnerExperience();

// $degatsInfliged =  $perso->getForce() +  $perso->getDegats();

// echo ' vous infligez ' . $degatsInfliged . ' pts de dégats';
