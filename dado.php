<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jugador dado</title>
  </head>
  <body>
  <?php
//Creamos la clase
  class jugadorDado
  {
//Dejamos los atritubos en privado
  private $minNumDado=0;
  private $maxNumDado=12;
  private $tiradas=[];
//Setters
  public function setminNumDado($minNumDado){
    $this->minNumdado=$minNumDado;
  }
  public function setmaxNumDado($maxNumDado){
    $this->maxNumDado=$maxNumDado;
  }
//Getters
  public function getminNumDado(){
    return $this->minNumDado;
  }

  public function getmaxNumDado(){
    return $this->maxNumDado;
  }

  public function tirarDado(){
    //al usar tirar, se generan aleatoriamente el numero de minNumDado y de maxNumDado
    $tirar=rand($this->minNumDado,$this->maxNumDado);
    $this->guardarTirada($tirar);
    return $tirar;
  }
  public function guardarTirada($tirar){
    $this->tiradas[]=$tirar;
  }
  public function imprimirTiradas(){
    print_r($this->tiradas);
  }

  public function calcularMediaTiradas(){
    echo "La media es: " .array_sum($this->tiradas)/count($this->tiradas);
    echo "<br>";
    echo "La media redondeada es: " .round(array_sum($this->tiradas)/count($this->tiradas));
  }

}

   ?>
  </body>
</html>
