<!-- Experienta profesionala -->

<div class="bhoechie-tab-content">
        <center>
            
            <body>
            <div class="col-md-11 col-md-offset-0">
               <table style="width:120%">
               <tr>
                   <td>Nume Angajator:</td>
                   <td><input type="text" class="form-control" name="tab2_nume_angajator" id="tab2_nume_angajator" value="<?php echo $arrayResult['tab2_nume_angajator']; ?>"></td>
               </tr>

               <tr>
                   <td>Localitate/Judet:</td>
                   <td><input type="text" class="form-control" name="tab2_localitate" id="tab2_localitate" value="<?php echo $arrayResult['tab2_localitate']; ?>"></td>
               </tr>

               <tr>
                   <td>Tara:</td>
                   <td><input type="text" class="form-control" name="tab2_tara" id="tab2_tara" value="<?php echo $arrayResult['tab2_tara']; ?>"></td>
               </tr>

               <tr>
                   <td>Domeniul de activitate <br>al angajatorului:</td>
                   <td><select id="tab2_domeniu_angajator" name="tab2_domeniu_angajator">
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == ""){echo "selected";} ?> value=""></option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Administratie / Sector public"){echo "selected";} ?> value="Administratie / Sector public">Administratie / Sector public</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Alimentara"){echo "selected";} ?> value="Alimentara">Alimentara</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Arta / Entertainment"){echo "selected";} ?> value="Arta / Entertainment">Arta / Entertainment</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Banci / Servicii financiare"){echo "selected";} ?> value="Banci / Servicii financiare">Banci / Servicii financiare</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Call center/BPO"){echo "selected";} ?> value="Call center/BPO">Call center/BPO</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Chimica"){echo "selected";} ?> value="Chimica">Chimica</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Comert / Retail"){echo "selected";} ?> value="Comert / Retail">Comert / Retail</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Constructii / Energetica"){echo "selected";} ?> value="Constructii / Energetica">Constructii / Energetica</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Drept"){echo "selected";} ?> value="Drept">Drept</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Educatie / Training"){echo "selected";} ?> value="Educatie / Training">Educatie / Training</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Imobiliara"){echo "selected";} ?> value="Imobiliara">Imobiliara</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Inginerie"){echo "selected";} ?> value="Inginerie">Inginerie</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "IT / Telecom"){echo "selected";} ?> value="IT / Telecom">IT / Telecom</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Masini / Auto"){echo "selected";} ?> value="Masini / Auto">Masini / Auto</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Media / Online"){echo "selected";} ?> value="Media / Online">Media / Online</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Paza si protectie"){echo "selected";} ?> value="Paza si protectie">Paza si protectie</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Petrol / Gaze"){echo "selected";} ?> value="Petrol / Gaze">Petrol / Gaze</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Prestari servicii"){echo "selected";} ?> value="Prestari servicii">Prestari servicii</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Productie si exploatare"){echo "selected";} ?> value="Productie si exploatare">Productie si exploatare</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Publicitate / Marketing / PR"){echo "selected";} ?> value="Publicitate / Marketing / PR">Publicitate / Marketing / PR</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Resurse umane"){echo "selected";} ?> value="Resurse umane">Resurse umane</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Sanatate"){echo "selected";} ?> value="Sanatate">Sanatate</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Sport"){echo "selected";} ?> value="Sport">Sport</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Textila"){echo "selected";} ?> value="Textila">Textila</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Transport / Logistica / Import - Export"){echo "selected";} ?> value="Transport / Logistica / Import - Export">Transport / Logistica / Import - Export</option>
                    <option <?php if($arrayResult['tab2_domeniu_angajator'] == "Turism / HoReCa"){echo "selected";} ?> value="Turism / HoReCa">Turism / HoReCa</option>
                </select></td>
               </tr>

               <tr>
                   <td>Perioada:</td>


                   <td><select id="tab2_perioada_luna" name="tab2_perioada_luna">
                    <option <?php if($arrayResult['tab2_perioada_luna'] == ""){echo "selected";} ?> value=""></option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "January"){echo "selected";} ?> value="January">January</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "Febuary"){echo "selected";} ?> value="Febuary">Febuary</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "March"){echo "selected";} ?> value="March">March</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "April"){echo "selected";} ?> value="April">April</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "May"){echo "selected";} ?> value="May">May</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "June"){echo "selected";} ?> value="June">June</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "July"){echo "selected";} ?> value="July">July</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "August"){echo "selected";} ?> value="August">August</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "September"){echo "selected";} ?> value="September">September</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "October"){echo "selected";} ?> value="October">October</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "November"){echo "selected";} ?> value="November">November</option>
                    <option <?php if($arrayResult['tab2_perioada_luna'] == "December"){echo "selected";} ?> value="December">December</option>
                  </select>
               <select id="tab2_perioada_an" name="tab2_perioada_an">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab2_perioada_an'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
               
                  </select>
                    -
                  
                <select id="tab2_perioada_luna2" name="tab2_perioada_luna2">
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "-"){echo "selected";} ?> value=""></option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "January"){echo "selected";} ?> value="January">January</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "Febuary"){echo "selected";} ?> value="Febuary">Febuary</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "March"){echo "selected";} ?> value="March">March</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "April"){echo "selected";} ?> value="April">April</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "May"){echo "selected";} ?> value="May">May</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "June"){echo "selected";} ?> value="June">June</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "July"){echo "selected";} ?> value="July">July</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "August"){echo "selected";} ?> value="August">August</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "September"){echo "selected";} ?> value="September">September</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "October"){echo "selected";} ?> value="October">October</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "November"){echo "selected";} ?> value="November">November</option>
                    <option <?php if($arrayResult['tab2_perioada_luna2'] == "December"){echo "selected";} ?> value="December">December</option>
                  </select>
                
                <select id="tab2_perioada_an2" name="tab2_perioada_an2">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab2_perioada_an2'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    
                    
                  </select></td>
               </tr>


               <tr>
                   <td>Functia sau postul ocupat:</td>
                   <td><input type="text" class="form-control" name="tab2_functia" id="tab2_functia" value="<?php echo $arrayResult['tab2_functia']; ?>"></td>
               </tr>

               <tr>
                   <td>Tip de job:</td>
                   <td><select id="tab2_tip_job" name="tab2_tip_job">
                    <option <?php if($arrayResult['tab2_tip_job'] == "-"){echo "selected";} ?> value=""></option>
                    <option <?php if($arrayResult['tab2_tip_job'] == "Internship / Practica"){echo "selected";} ?> value="Internship / Practica">Internship / Practica</option>
                    <option <?php if($arrayResult['tab2_tip_job'] == "Full time"){echo "selected";} ?> value="Full time">Full time</option>
                    <option <?php if($arrayResult['tab2_tip_job'] == "Part time"){echo "selected";} ?> value="Part time">Part time</option>
                    <option <?php if($arrayResult['tab2_tip_job'] == "Colaborare"){echo "selected";} ?> value="Colaborare">Colaborare</option>
                    <option <?php if($arrayResult['tab2_tip_job'] == "Proiect"){echo "selected";} ?> value="Proiect">Proiect</option>
                    </select></td>
               </tr>
               
               <tr>
                   <td>Nivel job:</td>
                   <td><select id="tab2_nivel_job" name="tab2_nivel_job">
                    <option <?php if($arrayResult['tab2_nivel_job'] == "-"){echo "selected";} ?> value=""></option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Entry"){echo "selected";} ?> value="Entry">Entry</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Specialist"){echo "selected";} ?> value="Specialist">Specialist</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Expert"){echo "selected";} ?> value="Expert">Expert</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Team leader"){echo "selected";} ?> value="Team leader">Team leader</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Supervisor"){echo "selected";} ?> value="Supervisor">Supervisor</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Project Manager"){echo "selected";} ?> value="Project Manager">Project Manager</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Middle Manager"){echo "selected";} ?> value="Middle Manager">Middle Manager</option>
                    <option <?php if($arrayResult['tab2_nivel_job'] == "Top Manager"){echo "selected";} ?> value="Top Manager">Top Manager</option>
                </select></td>
               </tr>

               <tr>
                   <td>Activitati si <br>responsabilitati principale:</td>
                   <td><textarea name="tab2_activitati" rows="5" cols="30"><?php echo $arrayResult['tab2_activitati']; ?></textarea></td>
               </tr>
               
             </table>
             <br><button type="button" class="btn btn-primary ButtonNext">Mai departe</button><br><br>
        </body>
    </center>
</div>

<?php 

    
?>