<?php

/**
  * formatea fecha
  * */
  if(!function_exists("fecha"))
  {
      function fecha($fecha){
        $dia=substr($fecha,8,2);
        $mes=substr($fecha,5,2);
        $anio=substr($fecha,0,4);
      switch ($mes){
        case '01':
        $mes="Enero";
        break;
        case '02':
        $mes="Febrero";
        break;
        case '03':
        $mes="Marzo";
        break;
        case '04':
        $mes="Abril";
        break;
        case '05':
        $mes="Mayo";
        break;
        case '06':
        $mes="Junio";
        break;
        case '07':
        $mes="Julio";
        break;
        case '08':
        $mes="Agosto";
        break;
        case '09':
        $mes="Septiembre";
        break;
        case '10':
        $mes="Octubre";
        break;
        case '11':
        $mes="Noviembre";
        break;
        case '12':
        $mes="Diciembre";
        break;
      }
      $fecha=$dia." de ".$mes." de ".$anio;
      return $fecha;
      }
  }
  /**
   * calcular edad desde fecha de nacimiento
   * */
   if(!function_exists("calculaEdad"))
   {
      function calculaEdad($fecha)
      {
          //fecha actual

              $dia=date("j");
              $mes=date("n");
              $ano=date("Y");

              //fecha de nacimiento
                $dianaz=substr($fecha,8,2);
                $mesnaz=substr($fecha,5,2);
                $anonaz=substr($fecha,0,4);


              //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

              if (($mesnaz == $mes) && ($dianaz > $dia)) {
              $ano=($ano-1); }

              //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

              if ($mesnaz > $mes) {
              $ano=($ano-1);}

              //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

              $edad=($ano-$anonaz);

              return $edad;
      }
   }


 ?>
