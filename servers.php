<?php
// insert your full URL here with http://
$domain = "http://animy-animy.1d35.starter-us-east-1.openshiftapps.com";
// SERVERS START
$proxies = array(); 
//1stproxylist
if($domain =="") { 
$proxies[] = "drive.php";
} else {
$proxies[] = "".$domain."/drive.php";
}
// CREATE THIS NEW LINE LIKE THIS $proxies[] = "http://mysamplewebsite.com/drive.php?id="; IF YOU WANT TO add servers
 
$proxy = $proxies[array_rand($proxies)];   
 


 



//SERVERS END

?>
