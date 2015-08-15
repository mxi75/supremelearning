<? 
// - edit!
$SiteName = "SupremeLearning";
$AdminEmail = "reg.shestov@gmail.com";
$AdminName = "Michael Y. Shestov";
// -  end!

$Q3 = @implode("<br>\n", $Q3);
$Q4 = @implode("<br>\n", $Q4);
$Q5 = @implode("<br>\n", $Q5);
$Q8 = @implode("<br>\n", $Q8);
$Q9 = @implode("<br>\n", $Q9);
$Q10 = @implode("<br>\n", $Q10);
$Q11 = @implode("<br>\n", $Q11);
$Q12 = @implode("<br>\n", $Q12);


$AdminMessage .= "<font face=Tahoma size=2><br><font color=green>1. окюмхпсере кх бш б акхфюиьхи цнд насвемхе хмнярпюммнлс ъгшйс?</font><br><b>$Q1</b><br>\n";

$AdminMessage .= "<br><font color=green>2. йюйни бхд насвемхъ дкъ бюя мюханкее опедонврхрекем?</font><br><b>$Q2";
$AdminMessage .= ($Q2string) ? " (".$Q2string.")</b>\n<br>" : "</b>\n<BR>";

$AdminMessage .= "<br><font color=green>3. цде бш пюмее хгсвюкх хмнярпюммши ъгшй?</font><BR><b>$Q3</b><BR><b>$Q3string</b>\n<BR>";

$AdminMessage .= "<br><font color=green>4. йюйхе йспяш/лерндш хгсвемхъ хмнярпюммшу ъгшйнб бюл хгбеярмш?</font><BR><b>$Q4</b><br><b>$Q4string</b>\n<br>";

$AdminMessage .= "<br><font color=green>5. я йюйхлх хг щрху йспянб/лернднб хгсвемхъ хмнярпюммшу ъгшйнб бш кхвмн гмюйнлш (насвюкхяэ нвмн хкх гюнвмн)?</font><BR><b>$Q5</b><br><b>$Q5string</b>\n<br>";

$AdminMessage .= "<br><font color=green>6. врн дкъ бюя ъбкъеряъ нопедекъчыхл (мюханкее бюфмшл) опх бшанпе йспяю хгсвемхъ хмнярпюммнцн ъгшйю? нжемхре рн, врн дкъ бюя бюфмн он 10-аюккэмни ьйюке.</font><br>";
$AdminMessage .= "<b>1) $Q61</b>\n<br>";
$AdminMessage .= "<b>2) $Q62</b>\n<br>";
$AdminMessage .= "<b>3) $Q63</b>\n<br>";
$AdminMessage .= "<b>4) $Q64</b>\n<br>";
$AdminMessage .= "<b>5) $Q65</b>\n<br>";
$AdminMessage .= "<b>6) $Q66</b>\n<br>";
$AdminMessage .= "<b>7) $Q67</b>\n<br>";
$AdminMessage .= "<b>8) $Q68</b>\n<br>";
if ($Q6string!="")
	$AdminMessage .= "дНОНКМХРЕКЭМН:<br><b>".$Q6string." - ".$Q69."<br>";

if ($Q6string2!="")
	$AdminMessage .= $Q6string2." - ".$Q60."</b>\n<br>\n";
else
	$AdminMessage .= "</b>\n<br>\n";

$AdminMessage .= "<br><font color=green>7. свхршбюъ, врн йспя нрбевюер рпеанбюмхъл, йнрнпше бш сйюгюкх б опедшдсыел бнопняе, йюйсч люйяхлюкэмсч ясллс бш цнрнбш онрпюрхрэ мю опхнаперемхе гюнвмнцн йспяю (дкъ реу, йнцн хмрепеясер гюнвмне насвемхе) хкх оняеыемхе нвмнцн йспяю (дкъ реу, йнцн хмрепеясер нвмне насвемхе)?</font><br><b>$Q7</b>\n<br>";

$AdminMessage .= "<br><font color=green>8. яйюфхре, онфюксиярю, хг йюйху хярнвмхйнб бш нашвмн сгмюере н йспяюу хгсвемхъ хмнярпюммнцн ъгшйю?</font><br><b>$Q8</b><br><b>$Q8string</b>\n<br>";

$AdminMessage .= "<br><font color=green>9. сйюфхре, онфюксиярю, йюйхе цюгерш / фспмюкш бш пецскъпмн (меяйнкэйн пюг б медекч) вхрюере?</font><br><b>$Q9</b><br><b>$Q9string</b>\n<br>";

$AdminMessage .= "<br><font color=green>10. сйюфхре, онфюксиярю, йюйхе йюмюкш рекебхдемхъ бш пецскъпмн (онврх йюфдши демэ) ялнрпхре?</font><br><b>$Q10</b><br><b>$Q10string</b>\n<br>";

$AdminMessage .= "<br><font color=green>11. сйюфхре, онфюксиярю, йюйхе пюдхн-йюмюкш бш пецскъпмн (онврх йюфдши демэ) яксьюере?</font><br><b>$Q11</b><br><b>$Q11string</b>\n<br>";

$AdminMessage .= "<br><font color=green>12. яйюфхре, онфюксиярю, йюй бш нашвмн хыхре хмтнплюжхч н йспяюу юмцкхияйнцн ъгшйю б яерх INTERNET?</font><br><b>$Q12</b><br><b>$Q12string</b>";
$AdminMessage .= (Q12string2!="") ? "<br>яОЕЖХЮКХГХПНБЮММШЕ ЯЮИРШ Х ТНПСЛШ:<br><b>".nl2br(htmlspecialchars($Q12string2))."</b><br>" : "\n<br>";

$AdminMessage .= "<br><font color=green>13. сйюфхре ябни онк</font><br><b>$Q13</b>\n<br>";
$AdminMessage .= "<br><font color=green>14. сйюфхре ябни бнгпюяр</font><br><b>$Q14</b>\n<br>";

$AdminMessage .= "<br><font color=green>15. й йюйни хг якедсчыху йюрецнпхи бш аш яеаъ нрмеякх?</font><br><b>$Q15";
$AdminMessage .= ($Q15string!="") ? ", " . $Q15string . "</b>\n<br></font>" : "</b>\n<br></font>";

$AdminMessage .= "<hr> IP-ЮДПЕЯ: ".$_SERVER['REMOTE_ADDR']." (".$HTTP_X_FORWARDED_FOR.")";
$AdminMessage .= "<br> аПЮСГЕП: ".$HTTP_USER_AGENT;

$from="$UserName <$UserEmail>";
$headers="Content-Type: text/html; charset=windows-1251\n";
$headers.="From: $from\nX-Mailer: Carline Server www.carline.ru";
mail($AdminEmail, "$SiteName - юМЙЕРЮ", $AdminMessage, $headers);
		echo ('

<HTML>
<HEAD>
<TITLE> юМЙЕРЮ! </TITLE>
<META NAME="Generator" CONTENT="Microsoft FrontPage 4.0">
<META NAME="Author" CONTENT="Vitaly Ivanov">
<META NAME="Keywords" CONTENT="юМЙЕРЮ">
<META http-equiv="content-type" content="text/html; charset=windows-1251">
<TITLE> юМЙЕРЮ </TITLE>
</HEAD>

');

echo ("
<BODY text=#000000>
<center>
<table width=100% cellspacing=0 cellpadding=0 valign=center border=0><tr><td><center><font face=Verdana size=3><B>яОЮЯХАН</B></font></td></tr></table>

<BR><BR>
<CENTER>
 <b>хМТНПЛЮЖХЪ ОПНЬКЮ СЯОЕЬМН</b><BR><BR>

</CENTER>

<table width=100% cellspacing=0 cellpadding=0 valign=center border=0><tr><td><center><font face=Verdana size=2><center><a href=\"javascript:history.back();\">нАПЮРМН</a></center></font></td></tr></table>
<br>
	<br>

");

?>
</BODY>
</HTML>

