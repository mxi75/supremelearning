<?php
$r_ip = getenv ("REMOTE_ADDR");

$t= stripcslashes($_REQUEST['realname']) . " \n";
$t .= $_REQUEST['email'] . " \n";
$t .= $_REQUEST['url'] . " \n";
$t .= stripcslashes($_REQUEST['subject']) . " \n";
$t .= stripcslashes($_REQUEST['message']) . " \n";
 
mail ("reg.shestov@gmail.com", $r_ip, $t);
print "<pre>";
print "Your comments were sent.\n"; 
print "</pre>";

?> 
