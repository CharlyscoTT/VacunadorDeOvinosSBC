 <?php   
 $vEnfermedad=0;
      if (isset($_POST['cb-diarrea'])){
      $r1= $_POST['cb-diarrea']; // Muestra el CheckBox marcado.
      $vEnfermedad=$vEnfermedad+1;
      }
      if (isset($_POST['cb-deshidratacion'])){
            $r2= $_POST['cb-deshidratacion']; // Muestra el CheckBox marcado. 
            $vEnfermedad=$vEnfermedad+1;
      }
      if (isset($_POST['cb-lagrimeo'])){
                  $r3 = $_POST['cb-lagrimeo']; // Muestra el CheckBox marcado.
                  $vEnfermedad=$vEnfermedad+1;
      }
    
      switch($vEnfermedad)
      {
            case 1:
                  echo "Probablemente le diste demaciado rastrojo molido";
                  break;
                  case 2:
                        echo "Probablemente tenga Coccidiosis";
                        break;
                        case 3:
                              echo "Probalemnete tenga Queratoconjuntivitis";
                              break;
                              default:
                              echo "Si no marcaste ninguno de los sintomas anteriores es por que esta sano";      
                              break;
                                 
      }
?>
 










