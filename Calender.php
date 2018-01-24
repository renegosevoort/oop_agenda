<?php

Class agenda {

  private $datum;
  private $afspraak;
  public $lijst;



  private function getdatum ($datum){
    $this->datum = $datum;
  }
  private function getafspraak ($afspraak){
    $this->afspraak = $afspraak;
  }
  public function Setlijst ($lijst){
      $this->lijst = $lijst;
  }
  function addAppointment($x,$day,$month,$year,$omschrijving)
  {
      $afspraak = new afspraak();
      $afspraak->Setid($x)->Setday($day)->Setmonth($month)->Setyear($year)->Setomschrijving($omschrijving);
      $this->lijst[]=$afspraak;
  }
     // echo "<table>"
    public function draw(){
        // Begin van de tabel, border voor de duidelijkheid
        // php_eol = end of line een lijnbreek.
        echo '<table border="1">'.PHP_EOL;

        foreach($this->lijst as $afspraak){
            echo '<tr>'.PHP_EOL;
            // gaan we door de calender om de afspraken weer tegeven
            echo '<td>'.$afspraak->Getdatum().'</td>'.PHP_EOL;
            echo '<td>'.$afspraak->Getinfo().'</td>'.PHP_EOL;
            echo '</tr>' .PHP_EOL;
        }

        echo '</table>' .PHP_EOL;
    }


   }







Class afspraak {

  public $dag;
  public $maand;
  public $jaar;
  public $id;
  public $omschrijving;

  public function Setday ($dag){
    $this->dag = $dag;
    return $this;

  }
  public function Setmonth ($maand){
    $this->maand = $maand;
    return $this;
  }

  public function Setyear ($jaar){
    $this->jaar = $jaar;
    return $this;
  }
  public function Setid($id){
      $this->id = $id;
      return $this;
  }
  public function Setomschrijving ($omschrijving){
      $this->omschrijving =$omschrijving;
      return $this;
  }
  public function Getdatum(){
      return $this->dag . '-' .$this->maand .'-' . $this->jaar;
  }
  public function Getinfo(){
      return $this->omschrijving;
  }

}
  //functie voor een  nieuwe agendapunt.
    $a = new agenda();

for ($x = 0; $x<= 0; $x++){
     $a->addAppointment("0", "2", "januari", "2018" , "eerste werkdag");
     $a->addAppointment("1", "6", "januari", "2018" , "halve dag");
     $a->addAppointment("2", "9", "januari", "2018" , "Maandag");
     $a->addAppointment("3", "10", "januari", "2018" , "dinsdag");
     $a->addAppointment("4", "11", "januari", "2018" , "Woensdag");
     $a->addAppointment("5", "12", "januari", "2018" , "donderdag");
     $a->addAppointment("6", "13", "januari", "2018" , "vrijdag");
     $a->addAppointment("7", "14", "januari", "2018" , "zaterdag");
     $a->addAppointment("8", "15", "januari", "2018" , "zondag");
     $a->addAppointment("9", "16", "januari", "2018" , "maandag");
}
// unset($lijst);
// print_r ($a);

$a->draw();

 ?>
