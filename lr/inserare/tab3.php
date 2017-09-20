<!-- Educatie tab -->
<div class="bhoechie-tab-content">
    <center>
        <body>
                        <div class="col-md-11 col-md-offset-0">
            <table style="width:120%">
                <tr>
                    <td><h4><strong>Liceul:</strong></h4></td>
                </tr>
                <tr>
                    <td>Denumire institutie:</td>
                    <td><input type="text" class="form-control" name="tab3_denumire" id="tab3_denumire" value="<?php echo $arrayResult['tab3_denumire']; ?>"></td>
                </tr>

                <tr>
                    <td>Localitate:</td>
                    <td><input type="text" class="form-control" name="tab3_localitate" id="tab3_localitate" value="<?php echo $arrayResult['tab3_localitate']; ?>"></td>
                </tr>
                <tr>
                    <td>Perioada:</td>
                    <td> 
                    <select id="tab3_an1" name="tab3_an1">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_an1'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    -
                    <select id="tab3_an2" name="tab3_an2">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_an2'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Specializare:</td>
                    <td><input type="text" class="form-control" name="tab3_specializare" id="tab3_specializare" value="<?php echo $arrayResult['tab3_specializare']; ?>"></td>
                </tr>

                <tr>
                    <td>Discipline pricipale studiate <br>/ Competente dobandite:</td>
                    <td><textarea name="tab3_disciplina" rows="5" cols="30"><?php echo $arrayResult['tab3_disciplina']; ?></textarea></td>
                </tr>

                </table>

                <hr>

                <table style="width:120%">
                <tr>
                    <td><h4><strong>Facultate:</strong></h4></td>
                </tr>

                <tr>
                    <td>Denumire institutie:</td>
                    <td><input type="text" class="form-control" name="tab3_fac_denumire" id="tab3_fac_denumire" value="<?php echo $arrayResult['tab3_fac_denumire']; ?>"></td>
                </tr>

                <tr>
                    <td>Localitate:</td>
                    <td><input type="text" class="form-control" name="tab3_fac_localitate" id="tab3_fac_localitate" value="<?php echo $arrayResult['tab3_fac_localitate']; ?>"></td>
                </tr>

                <tr>
                    <td>Domeniul de studii:</td>
                    <td><select id="tab3_fac_domeniul" name="tab3_fac_domeniul">
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Studii generale"){echo "selected";} ?> value="Studii generale">Studii generale</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Muzica"){echo "selected";} ?> value="Muzica">Muzica</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Matematica"){echo "selected";} ?> value="Matematica">Matematica</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Constructii"){echo "selected";} ?> value="Constructii">Constructii</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Teologie"){echo "selected";} ?>  value="Teologie">Teologie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Biologie"){echo "selected";} ?> value="Biologie">Biologie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Chimie"){echo "selected";} ?> value="Chimie">Chimie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Management"){echo "selected";} ?> value="Management">Management</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Consultanta"){echo "selected";} ?> value="Consultanta">Consultanta</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "IT"){echo "selected";} ?> value="IT">IT</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Geografie"){echo "selected";} ?> value="Geografie">Geografie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Drept"){echo "selected";} ?> value="Drept">Drept</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Arte"){echo "selected";} ?> value="Arte">Arte</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Economic"){echo "selected";} ?> value="Economic">Economic</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Inginerie"){echo "selected";} ?> value="Inginerie">Inginerie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Farmacie - Medicina"){echo "selected";} ?> value="Farmacie - Medicina">Farmacie - Medicina</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Litere"){echo "selected";} ?> value="Litere">Litere</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Psihologie"){echo "selected";} ?> value="Psihologie">Psihologie</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Stiintele Educatiei"){echo "selected";} ?> value="Stiintele Educatiei">Stiintele Educatiei</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Jurnalism"){echo "selected";} ?> value="Jurnalism">Jurnalism</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Comunicare si PR"){echo "selected";} ?> value="Comunicare si PR">Comunicare si PR</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Arhitectura"){echo "selected";} ?> value="Arhitectura">Arhitectura</option>
                        <option <?php if($arrayResult['tab3_fac_domeniul'] == "Altul"){echo "selected";} ?> value="Altul">Altul</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Perioada:</td>
                    <td> 
                    <select id="tab3_fac_an1" name="tab3_fac_an1">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_fac_an1'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    -
                    <select id="tab3_fac_an2" name="tab3_fac_an2">
                    <option value=""></option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_fac_an2'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Specializare:</td>
                    <td><input type="text" class="form-control" name="tab3_fac_specializare" id="tab3_fac_specializare" value="<?php echo $arrayResult['tab3_fac_specializare']; ?>"></td>
                </tr>

                <tr>
                    <td>Discipline pricipale studiate <br>/ Competente dobandite:</td>
                    <td><textarea name="tab3_fac_disciplina" rows="5" cols="30"><?php echo $arrayResult['tab3_fac_disciplina']; ?></textarea></td>
                </tr>
                                
                </table>


                <hr>

                <table style="width:120%">
                <tr>
                    <td><h4><strong>Masterat:</strong></h4></td>
                </tr>

                <tr>
                    <td>Denumire institutie:</td>
                    <td><input type="text" class="form-control" name="tab3_mas_denumire" id="tab3_mas_denumire" value="<?php echo $arrayResult['tab3_mas_denumire']; ?>"></td>
                </tr>

                <tr>
                    <td>Localitate:</td>
                    <td><input type="text" class="form-control" name="tab3_mas_localitate" id="tab3_mas_localitate" value="<?php echo $arrayResult['tab3_mas_localitate']; ?>"></td>
                </tr>

                <tr>
                    <td>Domeniul de studii:</td>
                    <td><select id="tab3_mas_domeniul" name="tab3_mas_domeniul">
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "-"){echo "selected";} ?> value="-">-</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Studii generale"){echo "selected";} ?> value="Studii generale">Studii generale</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Muzica"){echo "selected";} ?> value="Muzica">Muzica</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Matematica"){echo "selected";} ?> value="Matematica">Matematica</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Constructii"){echo "selected";} ?> value="Constructii">Constructii</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Teologie"){echo "selected";} ?>  value="Teologie">Teologie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Biologie"){echo "selected";} ?> value="Biologie">Biologie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Chimie"){echo "selected";} ?> value="Chimie">Chimie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Management"){echo "selected";} ?> value="Management">Management</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Consultanta"){echo "selected";} ?> value="Consultanta">Consultanta</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "IT"){echo "selected";} ?> value="IT">IT</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Geografie"){echo "selected";} ?> value="Geografie">Geografie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Drept"){echo "selected";} ?> value="Drept">Drept</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Arte"){echo "selected";} ?> value="Arte">Arte</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Economic"){echo "selected";} ?> value="Economic">Economic</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Inginerie"){echo "selected";} ?> value="Inginerie">Inginerie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Farmacie - Medicina"){echo "selected";} ?> value="Farmacie - Medicina">Farmacie - Medicina</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Litere"){echo "selected";} ?> value="Litere">Litere</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Psihologie"){echo "selected";} ?> value="Psihologie">Psihologie</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Stiintele Educatiei"){echo "selected";} ?> value="Stiintele Educatiei">Stiintele Educatiei</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Jurnalism"){echo "selected";} ?> value="Jurnalism">Jurnalism</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Comunicare si PR"){echo "selected";} ?> value="Comunicare si PR">Comunicare si PR</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Arhitectura"){echo "selected";} ?> value="Arhitectura">Arhitectura</option>
                        <option <?php if($arrayResult['tab3_mas_domeniul'] == "Altul"){echo "selected";} ?> value="Altul">Altul</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Perioada:</td>
                    <td> 
                    <select id="tab3_mas_an1" name="tab3_mas_an1">
                    <option value="-">-</option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_mas_an1'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    -
                    <select id="tab3_mas_an2" name="tab3_mas_an2">
                    <option value="-">-</option>
                    <?php
                    for($i = 2016; $i >= 1900; $i--){
                         if ($arrayResult['tab3_mas_an2'] == $i){
                              echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                         }
                         else{
                              echo '<option value="'. $i .'">'. $i .'</option>';
                         } 
                    }
                    ?>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Specializare:</td>
                    <td><input type="text" class="form-control" name="tab3_mas_specializare" id="tab3_mas_specializare" value="<?php echo $arrayResult['tab3_mas_specializare']; ?>"></td>
                </tr>

                <tr>
                    <td>Discipline pricipale studiate <br>/ Competente dobandite:</td>
                    <td><textarea name="tab3_mas_disciplina" rows="5" cols="30"><?php echo $arrayResult['tab3_mas_disciplina']; ?></textarea></td>
                </tr>
                                
                </table>
                
               <br><button type="button" class="btn btn-primary ButtonNext">Mai departe</button>

                <br><br>
                
            </div>

        </body>
    </center>
</div>
