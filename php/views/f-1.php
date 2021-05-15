<div class="container">
    <div class="row"> 
        <form action="php/controller/action.php" method="POST">
        Selecciona el Tipo de Raza
            <select class="form-control form-control-lg">
                <option>Blackbelly</option>
                <option>Katahdin</option>
                <option>Saint Croix</option>
                <option>Dorper</option>
                <option>Dorset</option>
                <option>Suffolk</option> 
             </select>
        <br>
        Peso 
        <input class="form-control" type="text">
        <br>
        Edad(Calculada en Meses)
        <input class="form-control" type="text">
        <br>
        <div class="form-check">
            <input type="checkbox" name="cb-diarrea" value="diarrea"> Diarrea<br>

            <input type="checkbox" name="cb-deshidratacion" value="tengo sed"> Deshidratación<br>

            <input type="checkbox" name="cb-lagrimeo" value="mis ojos"> Lagrimeo <br>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" >Dar Diagnostico</button>

        <!-- Posibles Enfermedades 
        
            1.- Acidosis ruminal (Indigestión por granos, empacho).... Indigestión, deshidratación, falta de apetito, embotamiento diarrea, incoordinación
            2.- Coccidiosis ........................ Diarrea y deshidratación. Puede ocurrir la muerte
            3.- Diarrea (Corderos recién nacidos) .. Diarreas severas, deshidratación y muerte
            4.- Queratoconjuntivitis (Ojo rosado) .. Lagrimeo, hinchazón y dolor ocular, opacidad de la cornea, ceguera parpados invertidos 
            5.- Conjuntivitis ...................... Excesivo lagrimeo, inflamación de parpados y opacidad de la cornea

              -->

  

        </form> 
    </div>
</div>