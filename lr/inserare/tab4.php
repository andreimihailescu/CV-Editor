<!-- Limbi straine -->
<div class="bhoechie-tab-content">
    <center>
        <body>
        <div class="col-md-11 col-md-offset-0">
            <table style="width:120%">
                <tr>
                    <td>Selecteaza limba straina:</td>
                    <td><select id="tab4_limba" name="tab4_limba">
                        <option <?php if($arrayResult['tab4_limba'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_limba'] == "Araba"){echo "selected";} ?> value="Araba">Araba</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Albaneza"){echo "selected";} ?> value="Albaneza">Albaneza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Armeana"){echo "selected";} ?> value="Armeana">Armeana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Azerbaijana"){echo "selected";} ?> value="Azerbaijana">Azerbaijana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Bielorusa"){echo "selected";} ?> value="Bielorusa">Bielorusa</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Bosniaca"){echo "selected";} ?> value="Bosniaca">Bosniaca</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Bulgara"){echo "selected";} ?> value="Bulgara">Bulgara</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Ceha"){echo "selected";} ?> value="Ceha">Ceha</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Chineza"){echo "selected";} ?> value="Chineza">Chineza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Croata"){echo "selected";} ?> value="Croata">Croata</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Daneza"){echo "selected";} ?> value="Daneza">Daneza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Ebraica"){echo "selected";} ?> value="Ebraica">Ebraica</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Engleza"){echo "selected";} ?> value="Engleza">Engleza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Estoniana"){echo "selected";} ?> value="Estoniana">Estoniana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Finlandeza"){echo "selected";} ?> value="Finlandeza">Finlandeza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Germana"){echo "selected";} ?> value="Germana">Germana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Greaca"){echo "selected";} ?> value="Greaca">Greaca</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Irlandeza"){echo "selected";} ?> value="Irlandeza">Irlandeza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Italiana"){echo "selected";} ?> value="Italiana">Italiana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Japoneza"){echo "selected";} ?> value="Japoneza">Japoneza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Lituaniana"){echo "selected";} ?> value="Lituaniana">Lituaniana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Macedoneana"){echo "selected";} ?> value="Macedoneana">Macedoneana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Maghiara"){echo "selected";} ?> value="Maghiara">Maghiara</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Norvegiana"){echo "selected";} ?> value="Norvegiana">Norvegiana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Olandeza"){echo "selected";} ?> value="Olandeza">Olandeza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Poloneza"){echo "selected";} ?> value="Poloneza">Poloneza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Portugheza"){echo "selected";} ?> value="Portugheza">Portugheza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Rusa"){echo "selected";} ?> value="Rusa">Rusa</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Sarba"){echo "selected";} ?> value="Sarba">Sarba</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Slovaca"){echo "selected";} ?> value="Slovaca">Slovaca</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Slovena"){echo "selected";} ?> value="Slovena">Slovena</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Spaniola"){echo "selected";} ?> value="Spaniola">Spaniola</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Suedeza"){echo "selected";} ?> value="Suedeza">Suedeza</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Turca"){echo "selected";} ?> value="Turca">Turca</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Ucraineana"){echo "selected";} ?> value="Ucraineana">Ucraineana</option>
                        <option <?php if($arrayResult['tab4_limba'] == "Coreeana"){echo "selected";} ?> value="Coreeana">Coreeana</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Nivel cunoastere:</td>
                    <td><select id="tab4_nivel" name="tab4_nivel">
                        <option <?php if($arrayResult['tab4_nivel'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_nivel'] == "incepataor"){echo "selected";} ?> value="incepataor">incepataor</option>
                        <option <?php if($arrayResult['tab4_nivel'] == "mediu"){echo "selected";} ?> value="mediu">mediu</option>
                        <option <?php if($arrayResult['tab4_nivel'] == "avansat"){echo "selected";} ?> value="avansat">avansat</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Ascultare:</td>
                    <td><select name="tab4_ascultare" id="tab4_ascultare">
                        <option <?php if($arrayResult['tab4_ascultare'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "A1"){echo "selected";} ?> value="A1" label="A1">A1</option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "A2"){echo "selected";} ?> value="A2" label="A2">A2</option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "B1"){echo "selected";} ?> value="B1" label="B1">B1</option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "B2"){echo "selected";} ?> value="B2" label="B2">B2</option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "C1"){echo "selected";} ?> value="C1" label="C1">C1</option>
                        <option <?php if($arrayResult['tab4_ascultare'] == "C2"){echo "selected";} ?> value="C2" label="C2">C2</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Citire</td>
                    <td><select name="tab4_citire" id="tab4_citire">
                        <option <?php if($arrayResult['tab4_citire'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_citire'] == "A1"){echo "selected";} ?> value="A1" label="A1">A1</option>
                        <option <?php if($arrayResult['tab4_citire'] == "A2"){echo "selected";} ?> value="A2" label="A2">A2</option>
                        <option <?php if($arrayResult['tab4_citire'] == "B1"){echo "selected";} ?> value="B1" label="B1">B1</option>
                        <option <?php if($arrayResult['tab4_citire'] == "B2"){echo "selected";} ?> value="B2" label="B2">B2</option>
                        <option <?php if($arrayResult['tab4_citire'] == "C1"){echo "selected";} ?> value="C1" label="C1">C1</option>
                        <option <?php if($arrayResult['tab4_citire'] == "C2"){echo "selected";} ?> value="C2" label="C2">C2</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Vorbire:</td>
                    <td><select name="tab4_vorbire" id="tab4_vorbire">
                        <option <?php if($arrayResult['tab4_discurs'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_discurs'] == "A1"){echo "selected";} ?> value="A1" label="A1">A1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "A2"){echo "selected";} ?> value="A2" label="A2">A2</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "B1"){echo "selected";} ?> value="B1" label="B1">B1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "B2"){echo "selected";} ?> value="B2" label="B2">B2</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "C1"){echo "selected";} ?> value="C1" label="C1">C1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "C2"){echo "selected";} ?> value="C2" label="C2">C2</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Discurs oral:</td>
                    <td><select name="tab4_discurs" id="tab4_discurs">
                        <option <?php if($arrayResult['tab4_discurs'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_discurs'] == "A1"){echo "selected";} ?> value="A1" label="A1">A1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "A2"){echo "selected";} ?> value="A2" label="A2">A2</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "B1"){echo "selected";} ?> value="B1" label="B1">B1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "B2"){echo "selected";} ?> value="B2" label="B2">B2</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "C1"){echo "selected";} ?> value="C1" label="C1">C1</option>
                        <option <?php if($arrayResult['tab4_discurs'] == "C2"){echo "selected";} ?> value="C2" label="C2">C2</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Scriere:</td>
                    <td><select name="tab4_scriere" id="tab4_scriere">
                        <option <?php if($arrayResult['tab4_scriere'] == ""){echo "selected";} ?> value=""></option>
                        <option <?php if($arrayResult['tab4_scriere'] == "A1"){echo "selected";} ?> value="A1" label="A1">A1</option>
                        <option <?php if($arrayResult['tab4_scriere'] == "A2"){echo "selected";} ?> value="A2" label="A2">A2</option>
                        <option <?php if($arrayResult['tab4_scriere'] == "B1"){echo "selected";} ?> value="B1" label="B1">B1</option>
                        <option <?php if($arrayResult['tab4_scriere'] == "B2"){echo "selected";} ?> value="B2" label="B2">B2</option>
                        <option <?php if($arrayResult['tab4_scriere'] == "C1"){echo "selected";} ?> value="C1" label="C1">C1</option>
                        <option <?php if($arrayResult['tab4_scriere'] == "C2"){echo "selected";} ?> value="C2" label="C2">C2</option>
                    </select></td>
                </tr>

                <tr>
                    <td>Limbaj de specialitate:</td>
                    <td><select name="tab4_limbaj_specialitate" id="tab4_limbaj_specialitate">
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == ""){echo "selected";} ?> value="" label="" selected="selected"></option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "juridic"){echo "selected";} ?> value="juridic" label="juridic">juridic</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "business"){echo "selected";} ?> value="business" label="business">business</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "tehnic"){echo "selected";} ?> value="tehnic" label="tehnic">tehnic</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "beletristic"){echo "selected";} ?> value="beletristic" label="beletristic">beletristic</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "medical"){echo "selected";} ?> value="medical" label="medical">medical</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "IT"){echo "selected";} ?> value="IT" label="IT">IT</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "corespondenta si documente tip"){echo "selected";} ?> value="corespondenta si documente tip" label="corespondenta si documente tip">corespondenta si documente tip</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "materiale publicitare"){echo "selected";} ?> value="materiale publicitare" label="materiale publicitare">materiale publicitare</option>
                        <option <?php if($arrayResult['tab4_limbaj_specialitate'] == "turism"){echo "selected";} ?> value="turism" label="turism">turism</option>
                    </select></td>
                </tr>
             </table>
                <br><button type="button" class="btn btn-primary ButtonNext">Mai departe</button>

            </div>
        </body>
    </center>
</div>
