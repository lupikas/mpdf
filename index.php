<?php

require_once 'submit.php';

?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Branginu.lt sutarties forma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <link rel="stylesheet" href="style/index_style.css">
</head>
<body>
    <h3 class="header">Norėdami sudaryti PRELIMINARIĄJĄ PIRKIMO – PARDAVIMO SUTARTĮ užpildykite žemiau esančią formą!</h3>
    <div class="container">
    <p class="important">*Svarbu! Būtina užpildyti visus formos laukus!</p>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        
            <h4>Prašome įvesti sutarties rekvizitus</h4>
            <hr>
                <table class="table table-borderless table-warning">
                    <tr>
                        <td>
                            Sutarties numeris:
                            <br>
                            <input type="text" name="sutarties_nr" value="<?php echo $sutarties_nr; ?>">
                            <p class="error"><?php echo $error_sutartis; ?></p>
                        </td>
                        <td>
                            Sutarties sudarymo data:
                            <br>
                            <select name="metai">
                                <option  selected value="<?php echo $metai; ?>"><?php echo $metai; ?></option>
                                <option  value="2016">2016</option>
                                <option  value="2017">2017</option>
                                <option  value="2018">2018</option>
                                <option  value="2019">2019</option>
                                <option  value="2020">2020</option>
                            </select>
                            <select name="menuo">
                                <option  selected value="<?php echo $menuo; ?>"><?php echo $menuo; ?></option>
                                <option  value="Sausio">Sausis</option>
                                <option  value="Vasario">Vasaris</option>
                                <option  value="Kovo">Kovas</option>
                                <option  value="Balandžio">Balandis</option>
                                <option  value="Gegužės">Gegužė</option>
                                <option  value="Birželio">Birželis</option>
                                <option  value="Liepos">Liepa</option>
                                <option  value="Rugpjūčio">Rugpjūtis</option>
                                <option  value="Rugsėjo">Rugsėjis</option>
                                <option  value="Spalio">Spalis</option>
                                <option  value="Lapkričio">Lapkritis</option>
                                <option  value="Gruodžio">Gruodis</option>
                            </select>
                            <select name="diena">
                                <option  selected value="<?php echo $diena; ?>"><?php echo $diena; ?></option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <p class="error"><?php echo $error_data; ?></p>
                        </td>
                        <td>
                            Sutarties sudarymo vieta:
                            <br>
                            <select name="miestas">
                                <option  selected value="<?php echo $miestas; ?>"><?php echo $miestas; ?></option>
                                <option value="Vilnius">Vilnius</option>
                                <option value="Kaunas">Kaunas</option>
                                <option value="Klaipėda">Klaipėda</option>
                                <option value="Šiauliai">Šiauliai</option>
                                <option value="Panevėžys">Panevėžys</option>
                                <option value="Akmenė">Akmenė</option>
                                <option value="Alytus">Alytus</option>
                                <option value="Anykščiai">Anykščiai</option>
                                <option value="Birštonas">Birštonas</option>
                                <option value="Biržai">Biržai</option>
                            </select>
                            <p class="error"><?php echo $error_miestas; ?></p>
                        </td>
                    </tr>
                </table>
            <br>
                <table class="table table-borderless">
                    <tr>
                        <td class="table-success">
                            <h4>Prašome įvesti savo informaciją</h4>
                        </td>
                        <td class="table-warning">
                            <h4>Prašome įvesti pirkėjo informaciją</h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-success">
                            Jūsų vardas ir pavardė:
                            <br>
                            <input type="text" name="vardas" size="40" value="<?php echo $vardas; ?>">
                            <p class="error"><?php echo $error_vardas; ?></p>                           
                            Pasirinkite savo gimimo datą:
                            <br>
                            <select name="gimimo_metai">
                                <option  selected value="<?php echo $gimimo_metai; ?>"><?php echo $gimimo_metai; ?></option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                            </select>
                            <select name="gimimo_menuo">
                                <option  selected value="<?php echo $gimimo_menuo; ?>"><?php echo $gimimo_menuo; ?></option>
                                <option  value="Sausio">Sausis</option>
                                <option  value="Vasario">Vasaris</option>
                                <option  value="Kovo">Kovas</option>
                                <option  value="Balandžio">Balandis</option>
                                <option  value="Gegužės">Gegužė</option>
                                <option  value="Birželio">Birželis</option>
                                <option  value="Liepos">Liepa</option>
                                <option  value="Rugpjūčio">Rugpjūtis</option>
                                <option  value="Rugsėjo">Rugsėjis</option>
                                <option  value="Spalio">Spalis</option>
                                <option  value="Lapkričio">Lapkritis</option>
                                <option  value="Gruodžio">Gruodis</option>
                            </select>
                            <select name="gimimo_diena">
                                <option  selected value="<?php echo $gimimo_diena; ?>"><?php echo $gimimo_diena; ?></option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <p class="error"><?php echo $error_gimimo_data; ?></p>
                            Jūsų gyvenamosios vietos adresas:
                            <br>
                            <input type="text" name="adresas" size="40" value="<?php echo $adresas; ?>">
                            <p class="error"><?php echo $error_adresas; ?></p>
                            Jūsų telefono Nr.:<span class="text-muted">(370xxxxxxxx)</span>
                            <br>
                            <input type="text" name="tel_nr" size="40" value="<?php echo $tel_nr; ?>">
                            <p class="error"><?php echo $error_tel_nr; ?></p>
                            <p class="error"><?php echo $error_tel_nr_nr; ?></p>
                        </td>
                        <td class="table-warning">
                            Įmonės pavadinimas:
                            <br>
                            <input type="text" name="imone" size="40" value="<?php echo $imone; ?>">
                            <p class="error"><?php echo $error_imone; ?></p>
                            Įmonės kodas:
                            <br>
                            <input type="text" name="imones_kodas" size="40" value="<?php echo $imones_kodas; ?>">
                            <p class="error"><?php echo $error_imones_kodas; ?></p>
                            <p class="error"><?php echo $error_imones_kodas_nr; ?></p>
                            Įmonės buveinės adresas:
                            <br>
                            <input type="text" name="imones_adresas" size="40" value="<?php echo $imones_adresas; ?>">
                            <p class="error"><?php echo $error_imones_adresas; ?></p>
                            Įmonės telefono Nr.:<span class="text-muted">(370xxxxxxxx)</span>
                            <br>
                            <input type="text" name="imones_tel" size="40" value="<?php echo $imones_tel; ?>">
                            <p class="error"><?php echo $error_imones_tel; ?></p>
                            <p class="error"><?php echo $error_imones_tel_nr; ?></p>
                        </td>
                    </tr>
                </table>
            <br><br>
                <h4>Prašome įvesti sklypo informaciją</h4>
                <hr>
                <table class="table table-borderless table-warning">
                    <tr>
                        <td>
                            Sklypo paskirtis:
                            <br>
                            <select name="sklypo_paskirtis">
                                <option  selected value="<?php echo $sklypo_paskirtis; ?>"><?php echo $sklypo_paskirtis; ?></option>
                                <option value="žemės ūkio">Žemės ūkio</option>
                                <option value="miškų ūkio">Miškų ūkio</option>
                             <option value="kitos paskirties">Kitos paskirties</option>
                            </select>
                            <p class="error"><?php echo $error_sklypo_paskirtis; ?></p>
                        </td>
                        <td>
                            Sklypo kadastrinis Nr:
                            <br>
                            <input type="text" name="x" size="4" maxlength="4" value="<?php echo $x; ?>"> / 
                            <input type="text" name="y" size="4" maxlength="4" value="<?php echo $y; ?>"> : 
                            <input type="text" name="z" size="4" maxlength="4" value="<?php echo $z; ?>">
                            <p class="error"><?php echo $error_x; ?></p>
                        </td>
                        <td>
                            Sklypo adresas:
                            <br>
                            <input type="text" name="sklypo_adresas" size="40" value="<?php echo $sklypo_adresas; ?>">
                            <p class="error"><?php echo $error_sklypo_adresas; ?></p>
                        </td>
                        <td>
                            Sklypo plotas (ha):
                            <br>
                            <input type="text" name="sklypo_plotas" size="15" value="<?php echo $sklypo_plotas; ?>">
                            <p class="error"><?php echo $error_sklypo_plotas; ?></p>
                        </td>
                    </tr>
                </table>
            <br><br>
            <h4>Sklypo kaina, atsiskaitymo ir kitos sąlygos</h4>
            <hr>
                <table class="table table-borderless table-warning">
                    <tr>
                        <td>
                            Sklypo kaina (Eur):
                            <br>
                            <input type="text" name="kaina" size="15" value="<?php echo $kaina; ?>">
                            <p class="error"><?php echo $error_kaina; ?></p>
                            <p class="error"><?php echo $error_kaina_nr; ?></p>
                        </td>
                        <td>
                            Sąskaitos Nr.:
                            <br>
                            <input type="text" name="sask_nr" size="40" value="<?php echo $sask_nr; ?>">
                            <p class="error"><?php echo $error_sask_nr; ?></p>
                            Pasirinkite banką:
                            <br>
                            <select name="bankas">
                                <option selected value="<?php echo $bankas; ?>"><?php echo $bankas; ?></option>
                                <option value="Swedbank">Swedbank</option>
                                <option value="SEB">SEB</option>
                                <option value="Luminor | DNB">Luminor | DNB</option>
                                <option value="Luminor | Nordea">Luminor | Nordea</option>
                                <option value="Citadele">Citadele</option>
                                <option value="Šiaulių bankas">Šiaulių bankas</option>
                                <option value="Medicinos bankas">Medicinos bankas</option>
                            </select>
                            <p class="error"><?php echo $error_bankas; ?></p>
                        </td>
                        <td>
                            Paskirkite baudą (Eur):
                            <br>
                            <input type="text" name="bauda" size="15" value="<?php echo $bauda; ?>">
                            <p class="error"><?php echo $error_bauda; ?></p>
                            <p class="error"><?php echo $error_bauda_nr; ?></p>
                        </td>
                    </tr>
                </table>
            <button type="submit" class="btn btn-primary button">Generuoti sutartį</button>
        </div>
    </form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>