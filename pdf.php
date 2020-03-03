<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->setFooter('{PAGENO}');

$html ='
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css"> 
</head>
<body>
<div class="relative">
<p class="top">PRELIMINARIOJI PIRKIMO – PARDAVIMO SUTARTIS Nr. <u>'.$sutarties_nr.'</u><p>
<p class="topdown"><u>'.$metai.' m. '.$menuo.' mėn. '.$diena.' d.,</u><br><br>
<u>'.$miestas.'</u><br>
(Vieta)</p>
<p class="text"><u>'.$vardas.'</u> (vardas, pavardė), gimimo data <u>'.$gimimo_metai.' '.$gimimo_menuo.' '.$gimimo_diena.'</u>, gyvenantis adresu <u>'.$adresas.'</u>, toliau Sutartyje vadinamas <b><i>„Pardavėjas“</i></b>,
<p class="text">ir</p>
<p class="text"><u>'.$imone.'</u>, juridinio asmens kodas <u>'.$imones_kodas.'</u>, buveinės adresas <u>'.$imones_adresas.'</u>, toliau Sutartyje vadinamas <b><i>„Pirkėjas“</b></i>,</p>
<p></p>
<p class="text">Pardavėjas ir Pirkėjas, kartu toliau vadinami Šalimis, vadovaudamiesi LR CK 6.165, 6.394, pasirašė šią sutartį, toliau vadinama <b><i>Sutartimi</i></b></p>
<p class="paragraph text">1. Sutarties objektas</p>
<p class="text">
1.1. Šioje sutartyje numatytomis sąlygomis ir terminais <i>Pardavėjas</i> įsipareigoja parduoti <i>Pirkėjui</i>, jam
nuosavybės teise priklausantį turtą – žemės sklypą, sklypo paskirtis - '.$sklypo_paskirtis.', kadastrinis Nr.
'.$x.'/'.$y.':'.$z.', adresas '.$sklypo_adresas.', sklypo plotas '.$sklypo_plotas.', (toliau sutartyje
vadinamą „Turtas“), o <i>Pirkėjas</i> įsipareigoja šį Turtą nupirkti. Turto perleidimui šalys susitaria
sudaryti kitą, notariškai tvirtinamą pagrindinę Turto pirkimo – pardavimo sutartį.</p>
<p class="paragraph text">2. Esminės Turto pirkimo – pardavimo sąlygos</p>
<p class="text">2.1. Šalių susitarimu, pagrindinė Turto pirkimo – pardavimo sutartis turi būti sudaryta ne vėliau,
kaip iki (<i>du mėnesiai nuo preliminariosios sutarties pasirašymo</i>). Prieš sudarant pagrindinę Turto
pirkimo – pardavimo sutartį, šalys turi suderinti tikslų sutarties sudarymo laiką ir vietą, ne vėlesnį,
nei galutinis pagrindinės Turto pirkimo – pardavimo sutarties sudarymo terminas.<br><br>
2.2. Preliminarios sutarties 2.2. punkte nurodytu terminu nesudarius pagrindinės Turto pirkimo –
pardavimo sutarties, pareiga ją sudaryti šalims pasibaigia, išskyrus atvejį, jei pagrindinės sutarties
sudarymo laikas šalių susitarimu yra pratęsiamas.<br><br>
2.3. Pagrindinės Turto pirkimo–pardavimo sutarties sudarymo metu Turtas turi atitikti šios Sutarties
nuostatas ir būti laisvas nuo bet kokių daiktinių teisių (servitutų, uzufruktų, hipotekų, ir pan.),
trečiųjų asmenų teisių (turto patikėjimo, nuomos, panaudos ir pan.), teismo sprendimu ar kitos
institucijos nutarimu pritaikyto arešto ar kitų apribojimų (draudimo disponuoti, įsiskolinimo už
įsigytą turtą ir pan.,), kurie nėra nurodyti šioje Sutartyje.<br>
2.4. Išlaidas susijusias su notaro paslaugomis pilnai apmoka Pirkėjas.
2.5. Pardavėjas teikdamas Nacionalinės žemės tarnybos prie Žemės ūkio ministerijos skyriui, apie
parduodamą žemės sklypą, pardavimo sąlygose pateiks informaciją apie tai, kad sklypui parduoti
buvo organizuotas aukcionas internetinėje sistemoje. dydžio atlyginimą aukciono organizatoriui
sumoka Pirkėjas (ar galėtume pridėti dar vieną sakinį, kad pabrėžtume jog tai yra papildomas
mokestis, neįskaičiuotas į pardavėjo kainą). Prieš sudarant pagrindinę Turto pirkimo – pardavimo
sutartį, šalys turi suderinti tikslų sutarties sudarymo laiką ir vietą, ne vėlesnį, nei galutinis
pagrindinės Turto pirkimo – pardavimo sutarties sudarymo terminas. Pirkėjas</p>

<p class="text">pareiškia, kad Turtą yra apžiūrėjęs gyvai ir tuo atveju jeigu Pardavėjas vengia ar nepagrįstai atsisako
sudaryti su Pirkėju pagrindinę Turto pirkimo–pardavimo sutartį, nurodytomis sąlygomis ir terminais,
tai jis įsipareigoja padengti kitos šalies patirtus tiesioginius minimalius nuostolius.</p>
<p class="paragraph text">3. Turto kaina ir atsiskaitymo sąlygos</p>
<p class="text">3.1. Šalys susitaria, kad bendra Turto kaina, už kurią <i>Pardavėjas</i> parduos, o <i>Pirkėjas</i> įsigis Turtą, yra
<u>'.$kaina.'</u> Eur. (<i>suma žodžiais</i>).<br><br>
3.2. Pirkėjas, pasirašydamas šią sutartį per 5 darbo dienas įsipareigoja sumokėti (10 (dešimt)
procentų rankpinigius nuo Turto vertės) Eur sumą pavedimu į <u>'.$bankas.'</u> atsiskaitomąją banko
sąskaitą <u>'.$sask_nr.'</u>, ir kuri pagrindinės sutarties sudarymo atveju yra įskaitoma į bendrą
Pirkėjo mokėtiną pirkimo – pardavimo kainą, nurodytą Sutarties 3.1 p. Nesumokėjus nurodytos
sumos per 5 darbo dienas, ši Sutartis netenka galios.<br><br>
3.3. Nuosavybės teisės perėjimo momentu laikoma Pirkėjo pilnas atsiskaitymas Pardavėjui už
perkamą Turtą;</p>
<p class="paragraph text">4. Kitos Šalių pareigos ir atsakomybės:</p>
<p class="text">4.1. Šalys susitaria, kad <i>Pardavėjas</i> surinks ir paruoš visus pirkimui–pardavimui reikalingus
dokumentus savo lėšomis. <i>Pirkėjas</i> įsipareigoja atlyginti <i>Pirkėjo</i> patirtas tiesiogines ir netiesiogines
išlaidas, jei vėliau atsisakys sudaryti Notarinę pirkimo – pardavimo sutartį.<br><br>
4.4. Ne vėliau, kaip iki pagrindinės Turto pirkimo – pardavimo sutarties sudarymo dienos,
Pardavėjas privalo sumokėti visus būtinus, su Turtu susijusius mokėjimus, padengti skolas Turtui. To
nepadarius, ši pareiga Pardavėjui išliks ir sudarius pagrindinę sutartį.<br><br>
4.5. <i>Pardavėjas</i> įsipareigoja iki pagrindinės Turto pirkimo – pardavimo sutarties sudarymo tinkamai
naudotis Turtu, nedaryti jokių pertvarkymų ir užkirsti kelią bet kokiems veiksmams, kurie galėtų
kaip nors pakenkti Turtui ar iš esmės sumažinti jo vertę.<br><br>
4.6. Jeigu <i>Pardavėjas</i> pažeidžia šios Sutarties sąlygas, vengia ar nepagrįstai atsisako sudaryti su
<i>Pirkėju</i> pagrindinės Turto pirkimo–pardavimo sutarties, tai jis įsipareigoja padengti kitos šalies
patirtus tiesioginius minimalius nuostoliu ir sumokėti baudą <u>'.$bauda.'</u> Eur</p>

<table class="table text">
	<tr >
		<td>
		<i>Pardavėjas</i>
		<td>
		<i>Pirkėjas</i>
        </td>
	</tr>
	<tr>
		<td >
		'.$vardas.'
        </td>
		<td>
		'.$imone.'
        </td>
	</tr>
	<tr>
		<td >
		Gimimo data: '.$gimimo_metai.' '.$gimimo_menuo.' '.$gimimo_diena.'
		</td>
		<td >
		Juridinio asmens kodas: '.$imones_kodas.'
        </td>
	</tr>
	<tr>
		<td>
		Gyv. Vieta: '.$adresas.'
        </td>
		<td>
		Buveinės adresas: '.$imones_adresas.'
        </td>
	</tr>
	<tr>
		<td>
		Tel. '.$tel_nr.'
        </td>
		<td >
		Tel. '.$imones_tel.'
        </td>
	</tr>
	<tr>
		<td >
		<br><br><br>
		______________________
        <br>
        (parašas)
        </td>
		<td >
		<br><br><br>
		______________________
        <br>
		(parašas)
        </td>
	</tr>
</table>
</div>
</body>
</html>
';
$mpdf->WriteHTML($html);

$mpdf->Output('sutartis.pdf', 'I');
