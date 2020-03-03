<?php
$sutarties_nr =  $vardas = $adresas = $tel_nr = $imone = $imones_kodas = $imones_adresas = $imones_tel = $x = $z = $y = 
$sklypo_adresas = $sklypo_plotas = $kaina = $sask_nr = $bauda = $bankas = $metai = $menuo = $diena = $miestas = 
$gimimo_metai = $gimimo_menuo = $gimimo_diena = $sklypo_paskirtis ="";
$error_sutartis = $error_data = $error_miestas = $error_vardas = $error_gimimo_data = $error_adresas = $error_tel_nr = $error_imone = 
$error_imones_kodas = $error_imones_adresas = $error_imones_tel= $error_sklypo_paskirtis = $error_x = $error_sklypo_adresas = 
$error_sklypo_plotas = $error_kaina =  $error_sask_nr = $error_bankas = $error_bauda = $error_bauda_nr 
 = $error_tel_nr_nr = $error_imones_kodas_nr = $error_imones_tel_nr = $error_kaina_nr = "" ;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sutarties_nr = $_POST['sutarties_nr'];
    $metai = $_POST['metai'];
    $menuo = $_POST['menuo'];
    $diena = $_POST['diena'];
    $miestas = $_POST['miestas'];
    $vardas = $_POST['vardas'];
    $gimimo_metai = $_POST['gimimo_metai'];
    $gimimo_menuo = $_POST['gimimo_menuo'];
    $gimimo_diena = $_POST['gimimo_diena'];
    $adresas = $_POST['adresas'];
    $tel_nr = $_POST['tel_nr'];
    $imone = $_POST['imone'];
    $imones_kodas = $_POST['imones_kodas'];
    $imones_adresas = $_POST['imones_adresas'];
    $imones_tel = $_POST['imones_tel'];
    $sklypo_paskirtis = $_POST['sklypo_paskirtis'];
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    $sklypo_adresas = $_POST['sklypo_adresas'];
    $sklypo_plotas = $_POST['sklypo_plotas'];
    $kaina = $_POST['kaina'];
    $sask_nr = $_POST['sask_nr'];
    $bankas = $_POST['bankas'];
    $bauda = $_POST['bauda'];

    if(empty($sutarties_nr)){
        $error_sutartis = "Įveskite sutarties numerį!"; }
        elseif(empty($metai and $menuo and $diena)){
            $error_data = "Pasirinkite datą!"; }
                elseif(empty($miestas)){
                $error_miestas = "Pasirinkite miestą!"; }
                    elseif(empty($vardas)){
                    $error_vardas = "Įveskite vardą ir pavardę!"; }
                        elseif(empty($gimimo_metai and $gimimo_menuo and $gimimo_diena)){
                        $error_gimimo_data = "Pasirinkite gimimo datą!"; }
                            elseif(empty($adresas)){
                            $error_adresas = "Įveskite adresą!"; }
                                elseif(empty($tel_nr)){
                                $error_tel_nr = "Įveskite telefono numerį!"; }
                                elseif(!is_numeric($tel_nr)){
                                    $error_tel_nr_nr = "Galima įvesti tik skaičius!"; }
                                    elseif(empty($imone)){
                                    $error_imone = "Įveskite įmonės pavadinimą!"; }
                                        elseif(empty($imones_kodas)){
                                        $error_imones_kodas = "Įveskite įmonės kodą!"; }
                                        elseif(!is_numeric($imones_kodas)){
                                            $error_imones_kodas_nr = "Kodą gali sudaryti tik skaičiai!"; }
                                            elseif(empty($imones_adresas)){
                                            $error_imones_adresas = "Įveskite adresą!"; }
                                                elseif(empty($imones_tel)){
                                                $error_imones_tel = "Įveskite telefono numerį!"; }
                                                elseif(!is_numeric($imones_tel)){
                                                    $error_imones_tel_nr = "Įveskite teisingą telefono numerį!"; }
                                                    elseif(empty($sklypo_paskirtis)){
                                                    $error_sklypo_paskirtis = "Pasirinkite!"; }
                                                        elseif(empty($x and $y and $z)){
                                                        $error_x = "Įveskite kadastrinį Nr.!"; }
                                                            elseif(empty($sklypo_adresas)){
                                                            $error_sklypo_adresas = "Įveskite sklypo adresą!"; }
                                                                elseif(empty($sklypo_plotas)){
                                                                $error_sklypo_plotas = "Įveskite sklypo plotą!"; }
                                                                    elseif(empty($kaina)){
                                                                    $error_kaina = "Įveskite kainą!"; }
                                                                    elseif(!is_numeric($kaina)){
                                                                        $error_kaina_nr = "Galima įvesti tik skaičius!"; }
                                                                        elseif(empty($sask_nr)){
                                                                        $error_sask_nr = "Įveskite sąskaitos Nr.!"; }
                                                                            elseif(empty($bankas)){
                                                                            $error_bankas = "Pasirinkite banką!"; }
                                                                                elseif(empty($bauda)){
                                                                                $error_bauda = "Įveskite baudą!"; }
                                                                                elseif(!is_numeric($bauda)){
                                                                                $error_bauda_nr = "Galima įvesti tik skaičius!"; }
                                                                                    else {require_once 'pdf.php';}     
}