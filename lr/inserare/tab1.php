<!-- informatii personale -->
<div class="bhoechie-tab-content active">
    <center>
        <body>
            <div class="col-md-11 col-md-offset-0">
            <table style="width:120%">
                <tr>
                    <td>Nume*:</td>
                    <td><input type="text" class="form-control" name="tab1_nume" id="tab1_nume" value="<?php echo $arrayResult['tab1_nume']; ?>"></td>
                </tr>

                <tr>
                    <td>Prenume*:</td>
                    <td><input type="text" class="form-control" name="tab1_prenume" id="tab1_prenume" value="<?php echo $arrayResult['tab1_prenume']; ?>"></td>
                </tr>
                <tr>
                    <td>Email*:</td>
                    <td><input type="text" class="form-control" name="tab1_email" id="tab1_email" value="<?php echo $arrayResult['tab1_email']; ?>"></td>
                </tr>
                <tr>
                    <td>Telefon mobil*:</td>
                    <td><input type="text" class="form-control" name="tab1_telefon" id="tab1_telefon" value="<?php echo $arrayResult['tab1_telefon']; ?>"></td>
                </tr>
                <tr>
                    <td>Sex*:</td>
                    <td>
                    <input type="radio" name="tab1_sex" value="Masculin"  <?php if($arrayResult['tab1_sex'] == "Masculin"){echo "checked";} ?>  > M
                    <input type="radio" name="tab1_sex" value="Feminin"  <?php if($arrayResult['tab1_sex'] == "Feminin"){echo "checked";} ?>  > F
                    </td>
                </tr>
                <tr>
                    <td>Data nasterii:</td>
                    <td>
                    <select id="tab1_luna" name="tab1_luna" >
                        <option value=""></option>
                        <option  <?php if($arrayResult['tab1_luna'] == "January"){echo "selected";} ?>  value="January">January</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "Febuary"){echo "selected";} ?>  value="Febuary">Febuary</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "March"){echo "selected";} ?>  value="March">March</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "April"){echo "selected";} ?>  value="April">April</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "May"){echo "selected";} ?>  value="May">May</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "June"){echo "selected";} ?>  value="June">June</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "July"){echo "selected";} ?>  value="July">July</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "August"){echo "selected";} ?>  value="August">August</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "September"){echo "selected";} ?>  value="September">September</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "October"){echo "selected";} ?>  value="October">October</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "November"){echo "selected";} ?>  value="November">November</option>
                        <option  <?php if($arrayResult['tab1_luna'] == "December"){echo "selected";} ?>  value="December">December</option>
                    </select>
                    <select id="tab1_ziua" name="tab1_ziua">
                        <option value=""></option>
                        <?php
                        for($i = 31; $i >= 1; $i--){
                             if ($arrayResult['tab1_ziua'] == $i){
                                  echo '<option value="'. $i .'"' . 'selected' .'>'. $i .'</option>';
                             }
                             else{
                                  echo '<option value="'. $i .'">'. $i .'</option>';
                             } 
                        }
                        ?>
                    
                    </select>
                    <select id="tab1_an" name="tab1_an">
                        <option value=""></option>
                        <?php
                        for($i = 2016; $i >= 1900; $i--){
                             if ($arrayResult['tab1_an'] == $i){
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
                    <td>Localitate*:</td>
                    <td><input type="text" class="form-control" name="tab1_localitate" id="tab1_localitate" value="<?php echo $arrayResult['tab1_localitate']; ?>"></td>
                </tr>
                <tr>
                    <td>Facultate*:</td>
                    <td><input type="text" class="form-control" name="tab1_facultate" id="tab1_facultate" value="<?php echo $arrayResult['tab1_facultate']; ?>"></td>
                </tr>
            </table>
            
            <br><button type="button" class="btn btn-primary ButtonNext">Mai departe</button><br><br>
            

        </body>
    </center>
</div>
