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


$AdminMessage .= "<font face=Tahoma size=2><br><font color=green>1. ���������� �� �� � ��������� ��� �������� ������������ �����?</font><br><b>$Q1</b><br>\n";

$AdminMessage .= "<br><font color=green>2. ����� ��� �������� ��� ��� �������� ��������������?</font><br><b>$Q2";
$AdminMessage .= ($Q2string) ? " (".$Q2string.")</b>\n<br>" : "</b>\n<BR>";

$AdminMessage .= "<br><font color=green>3. ��� �� ����� ������� ����������� ����?</font><BR><b>$Q3</b><BR><b>$Q3string</b>\n<BR>";

$AdminMessage .= "<br><font color=green>4. ����� �����/������ �������� ����������� ������ ��� ��������?</font><BR><b>$Q4</b><br><b>$Q4string</b>\n<br>";

$AdminMessage .= "<br><font color=green>5. � ������ �� ���� ������/������� �������� ����������� ������ �� ����� ������� (��������� ���� ��� ������)?</font><BR><b>$Q5</b><br><b>$Q5string</b>\n<br>";

$AdminMessage .= "<br><font color=green>6. ��� ��� ��� �������� ������������ (�������� ������) ��� ������ ����� �������� ������������ �����? ������� ��, ��� ��� ��� ����� �� 10-�������� �����.</font><br>";
$AdminMessage .= "<b>1) $Q61</b>\n<br>";
$AdminMessage .= "<b>2) $Q62</b>\n<br>";
$AdminMessage .= "<b>3) $Q63</b>\n<br>";
$AdminMessage .= "<b>4) $Q64</b>\n<br>";
$AdminMessage .= "<b>5) $Q65</b>\n<br>";
$AdminMessage .= "<b>6) $Q66</b>\n<br>";
$AdminMessage .= "<b>7) $Q67</b>\n<br>";
$AdminMessage .= "<b>8) $Q68</b>\n<br>";
if ($Q6string!="")
	$AdminMessage .= "�������������:<br><b>".$Q6string." - ".$Q69."<br>";

if ($Q6string2!="")
	$AdminMessage .= $Q6string2." - ".$Q60."</b>\n<br>\n";
else
	$AdminMessage .= "</b>\n<br>\n";

$AdminMessage .= "<br><font color=green>7. ��������, ��� ���� �������� �����������, ������� �� ������� � ���������� �������, ����� ������������ ����� �� ������ ��������� �� ������������ �������� ����� (��� ���, ���� ���������� ������� ��������) ��� ��������� ������ ����� (��� ���, ���� ���������� ����� ��������)?</font><br><b>$Q7</b>\n<br>";

$AdminMessage .= "<br><font color=green>8. �������, ����������, �� ����� ���������� �� ������ ������� � ������ �������� ������������ �����?</font><br><b>$Q8</b><br><b>$Q8string</b>\n<br>";

$AdminMessage .= "<br><font color=green>9. �������, ����������, ����� ������ / ������� �� ��������� (��������� ��� � ������) �������?</font><br><b>$Q9</b><br><b>$Q9string</b>\n<br>";

$AdminMessage .= "<br><font color=green>10. �������, ����������, ����� ������ ����������� �� ��������� (����� ������ ����) ��������?</font><br><b>$Q10</b><br><b>$Q10string</b>\n<br>";

$AdminMessage .= "<br><font color=green>11. �������, ����������, ����� �����-������ �� ��������� (����� ������ ����) ��������?</font><br><b>$Q11</b><br><b>$Q11string</b>\n<br>";

$AdminMessage .= "<br><font color=green>12. �������, ����������, ��� �� ������ ����� ���������� � ������ ����������� ����� � ���� INTERNET?</font><br><b>$Q12</b><br><b>$Q12string</b>";
$AdminMessage .= (Q12string2!="") ? "<br>������������������ ����� � ������:<br><b>".nl2br(htmlspecialchars($Q12string2))."</b><br>" : "\n<br>";

$AdminMessage .= "<br><font color=green>13. ������� ���� ���</font><br><b>$Q13</b>\n<br>";
$AdminMessage .= "<br><font color=green>14. ������� ���� �������</font><br><b>$Q14</b>\n<br>";

$AdminMessage .= "<br><font color=green>15. � ����� �� ��������� ��������� �� �� ���� �������?</font><br><b>$Q15";
$AdminMessage .= ($Q15string!="") ? ", " . $Q15string . "</b>\n<br></font>" : "</b>\n<br></font>";

$AdminMessage .= "<hr> IP-�����: ".$_SERVER['REMOTE_ADDR']." (".$HTTP_X_FORWARDED_FOR.")";
$AdminMessage .= "<br> �������: ".$HTTP_USER_AGENT;

$from="$UserName <$UserEmail>";
$headers="Content-Type: text/html; charset=windows-1251\n";
$headers.="From: $from\nX-Mailer: Carline Server www.carline.ru";
mail($AdminEmail, "$SiteName - ������", $AdminMessage, $headers);
		echo ('

<HTML>
<HEAD>
<TITLE> ������! </TITLE>
<META NAME="Generator" CONTENT="Microsoft FrontPage 4.0">
<META NAME="Author" CONTENT="Vitaly Ivanov">
<META NAME="Keywords" CONTENT="������">
<META http-equiv="content-type" content="text/html; charset=windows-1251">
<TITLE> ������ </TITLE>
</HEAD>

');

echo ("
<BODY text=#000000>
<center>
<table width=100% cellspacing=0 cellpadding=0 valign=center border=0><tr><td><center><font face=Verdana size=3><B>�������</B></font></td></tr></table>

<BR><BR>
<CENTER>
 <b>���������� ������ �������</b><BR><BR>

</CENTER>

<table width=100% cellspacing=0 cellpadding=0 valign=center border=0><tr><td><center><font face=Verdana size=2><center><a href=\"javascript:history.back();\">�������</a></center></font></td></tr></table>
<br>
	<br>

");

?>
</BODY>
</HTML>

