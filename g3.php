<?php
if(isset($_COOKIE['abuse_interstitial'])&&strpos($_SERVER['REQUEST_URI'],"/g3.php")!==false){echo('<mark>post CAPTCHA endpoints (chat, file upload, etc) will use up my 20k requests / 1GB per mth fast, limit time to 30m a day please</mark>');}
if(strpos($_SERVER['REQUEST_URI'],"/g3.php/")!==false){exit('<meta http-equiv="refresh" content="0 /g3.php"/><mark style="font-size:1.2em;padding:0.3em">Auto redirect</mark>');}
if(!function_exists('ini_parse_quantity')){echo '<mark>Upgrade your PHP for more features / security</mark>';}
#Audio functions
function gt(){$v='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';$l='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
echo'<audio autoplay src="data:audio/mpeg;base64,SUQzBABAAAAAZQAAAAwBIAUKOn0nKUNPTU0AAAALAAAAAAAAAEd1aXRhckNPTU0AAAALAAAAWFhYAEd1aXRhclRZRVIAAAAFAAAAMjAyNFREUkMAAAAFAAAAMjAyNFRQRTEAAAAHAAAAQWVyYTIz//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAAMAAAJqgBaWlpaWlpaWnFxcXFxcXFxgYGBgYGBgYGRkZGRkZGRkZGioqKioqKioq6urq6urq6uv7+/v7+/v7+/zMzMzMzMzMzZ2dnZ2dnZ2ebm5ubm5ubm5vPz8/Pz8/Pz//////////8AAAAUTEFNRTMuMTAwBJgAAAAAAAAAABUgJALeQQABpAAACao8wpc'.$v.$v.$v.$v.$v.$v.'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//vAxAAABhABX9QAAALzqC3/MYAACgk0NmaJpGyJ6yjhObg+H1AgMBDg+H/4fgg74PxAGCgIO/znE4fy7//vKBjDETvB+aiIh9eVlXZUS2NtOJNSABOiWkMLkLaDGwqOEo9tyR5ddk4FUVZNUfpvGiX2dN1IBYskduBnCX4xJRuB45L5JD8YmoPa7cjklf6JNc4/j9xqBLDY29gz4xBE3ypV1GJVKI7ZlsxIoxS01PHpXO6q0l+9SVqaX49tR6U2Z+I4WIlQVaSM2rdmmsapInbjVa/Ys1btSTxrvML2Nyx2phR/Y+vqrbyvynCrZyz3Wl3zNBZq442dShMLNxWxrspiira8dWZBEFIoqBkUDroIPHI8SBd0gnHjvUpxXhfLzql5lNpzKXkbtF8+jRvMLospUvWr0lKmU8yrSFaLajWrmzXU6fX0of+tdvetPHdSrWJ5syUVmEGEk0+HR/I3hZEsFuh78JpzkQrUxK3tStQ1rWlluY2UU88RJKXaQKp3ki++hO9jUen/2b3aqsbPdiYEAkkucAoSgxjw4KiXILQitvyKf6IDEU3m95K4muWm96Pau3X7Xr5atT9cZF7DyEryQtzpFNbte7mkdiAklJQDnch/TM20dYkYlUPdjqn7xTRq72rRJqtFWp50ile0ktbmOllztG57ELud7urn3pU3AQASCdAUEFEVKNnHMw0W+kHTvDdpDe9qF3OJqXsIlLn0V3MrXfRW44wuhV7dTtCujLlmZzDJfEwQeiNpGWFdIgmIgh5Yzof3ko6rTa+8TuaRWrorv1Lu672FlKed1Kfp1t+EeEASEk4AIjMtSDhsQAb2HOMPA6AoSvKXuStV9CFPPsQpTzzELuYTUva1e+0puelXvuSpoxgwkpAA+L6Yuh3ODwz4PfQh5ILJHZRVN4ZQw81CVT2XU9yarmpRzjS3k13NbXX23ng3NAIKdoANSMP/3KBXEDRUwND/+0DE7AAJ6S9v/MOAAOgFrnzDjYDM+ICHKypxqSq7mMQq5tCnvampzCKVb2ld0mpd7KtjLiidiAhN3gCB7AQaLztDQ4C5Ybr7JSMte1r1st3P3Lcsfu5OCavl5OL9T3/0fvemHa6qxZ6WJwMAEleAJMCvKXigAvQlsrX36pG/jhb7r3OWtRS8Ms/UpeWv3PXvx+de4/WGP2QquxhhfFccpUBvou0HuQ1UrNTos6X0R+45MhS3fv/7IMT3gAdQyXHkrEUA1gtufPSJFL8UvLU5OpKcvDNz/49d49W26vW9hWYzAhJ7gBtKBl6QspUxgXoipA8La8bQX0qVc9KFz7ULVdTU96E7jxMtukVKsZRi3bmisQoJ2p0RvGpyIPcCOnT3QcrqkgDx5aDlbjrUpXPalXtSq9xJC9v/+yDE9gBGcCdx57CkoMIMbrjGiJRFt7xVJzICC5gAED0DlsdWL8Rc67zwqftDLYwiWWt7EoXcyXVc1C73kl9iUy1S8E6CBLclAHxPilVYVuslplQ9JdbmpQu97S8cfpKKto3ualSGmJUHERIUoAAxQwNJlnvSUakhA7zbOBPg3INJ//sgxPqABlQtc+YU6GDHCC389giUjz7yVrk3vX3gnWtnzr3z4StwyGqkKBe1gk8aEb0VQ6YCR6HAh0sAcEs9ByinnWEkqe7KquYla7ia1wSodFUwEhOgAA+kgPZthWwUsPwp7xJT3EVqW+hCrWILKv0Lc8il2aHNFUQIL1EPLJU4h//7EMT+gAZYMW3mJOggzZktvLCOdcY2YB8aRA1I3aXniJbe1CVT2tVzUFlucRQpTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVdaJH2wSoAABpQeheWRPGjVTcij76GBL//sgxPSARfTJa+WEU6jCmy24wIo9vHmzSZPJu+L3/GnfikxBTUUzLjEwMK'.$l.''.$l.'qqqqqv/7EMT6gEYkNW3nrKZgqges/MSI2K'.$l.''.$l.'//sQxPYARVwtZeUkQ2CUBKv8dhxc'.$l.''.$l.'r/+xDE94BFfHVZ56RIiKgHq7zDCRC'.$l.''.$l.'v/7EMT2AES4LV3gMKDgnAaqvNWcWK'.$l.''.$l.'//sQxOgDxHQvUaSBJCgAAD/AAAAE'.$l.''.$l.'o=">
</audio>';}
function pn(){echo'<audio autoplay><source src="data:audio/mpeg;base64,SUQzBABAAAABDQAAAAwBIAUOUj4iKlRYWFgAAAASAAAAQ09NTQBsaWtlIGRheSAxNzhDT01NAAAAEQAAAAAAAABsaWtlIGRheSAxNzhDT01NAAAAEQAAAFhYWABsaWtlIGRheSAxNzhUWUVSAAAABQAAADIwMjNURFJDAAAABQAAADIwMjNUUEUxAAAABwAAAEFlcmEyM//jGMQADIC+BEFPEAIDP8Upr5u81d/fDyJDQxklZ51IaCoP8NQJgjG9Xs+6Q1YyZfx9wImXjwMZQMRPD8EHFP3/cqtzD//tJv/jGMQJD1jGXAGdMADjLK41jOCgP59bAYChSpu7SSDEzEsAzmlPwKAzXDMRSjydEjAME27BYJONzk1GtqZ8mnpCSv/n/+vy3v/jGMQGDhiiUAHdAAH/Huu1qallLIXFdgwFBQwVCwxNFIylWY/k3E0FBoDA0YAA6GAipFIZiT9SmM2cA6FBm1XDPv4U2puIN//jGMQIDSiaRAAHcigWMDIIjgXAUxTC1QTu39z0UTDHwGztKA1pdJdrfSCVXRyP/9H////yH////OLlLdJTuw46JgNADMCwEf/jGMQODEiOUAAAfCCMJIDgyVHwDDcBqBIAJdilgDdIJwgYZ/+hjf////U7////ENX//ZlorUdMBri0BbUGgOgMVYFQNNdCQP/jGMQXDbruWACwBSTJUDEAYGQDQAROwzJEjV1v/////X///+j/////////jrmAdSVuQucuAYBBJg4VGQ1WckUh4K0H0y6YoP/jGMQbDKCWSAAAeCAQGAtWindyfpLB9KHf//////qPf///4mrqX+ktT90yfIARwaADYcBcIYGHUKgGso+gDCWhURfClRvkqf/jGMQjDDCOTAFWEACQTFSP///////////4nv/909qHIe3Z1V/J5gMBLkSBGQZAWo7UYLjGZNVmaSwmQoXBwQmYElmhKADQfP/jGMQtGBryOAGdOADemAwWmAQMkwIKxGufwKFDDhwycdnf6GW/T//2U8091f1zf/X/6Zjf/T/+VRrf9f/8l/11/rWusWje1v/jGMQHC+C1qAHPAADL17qExK1lgHMPUQpbHyGpWxuiGkteHMdTNmz59ur2uHwSPIUe///5VUxBTUUzLjEwMFVVVVVVVVVVVQ==" /></audio>';}
function makesum($j){$e=100+($j%900);return $e;}
function filter($e,$a){
if(!file_exists('whitelist.txt')||(file_exists('whitelist.txt')&&file_get_contents('whitelist.txt')!='off')){
$x=['Teenlov','baddad','badmom','childlov','cp :D','suck d','hild p','DM me','DM @','t.me','nigge','i watch pedo','incest','pajee','dolceri','opic link','?invite=','cp vid','kill them all','05dd3b3dd','pussy','cheese piz','cp tel','1705262','bomb','jew','child tor','ve me cp',
'ck a 8yo','tortub','changehd','cream pi','porn?','hottie','slut','on fuckin','yatl','edoli','gekkko','loli','sexy l','j2gpb','rape th','oy vid','irl vid','ucking my sis','horny','pizza link','telcp','2nkcsr',
'cum in','cums in','edo links','selling my n','05962e20f','gas immigr','ITTLE GIR','load cp','cp link ?','kidfli','cum on','jewish ga','r*pe and m*rder','yos are sex','onion cent','teen vid','trading leak',
'tits','whore','coxpql','killing their kid','kill their offspr','zioni','ewish reta','ipe their fam','racemix','PREPUBE','years old f','1488',' rape','club p','ldren p','porn vid','uoxqi4',
'give us cp','anti-white','very young','my cum','na cum','schoolgir','reteen',' cepe ','can i sex','his fantasy','my breast','rape my','evki.uno','cums on','rape or incest','erect','_CUM_',
'snapchat blackm','mega.nz/f','nipple','little boy','boobjob','blow job','avorite age','05b0f5bb','looking for porn','onlyfan','extreme porn','hairy cock','kinder p','Avenue','boys to play','have cp li',
'young fun','dick swing','up your ass','hebe','any kids?','omgporn','c. P.','1096047','rape/forced vid','rape vid','kids pant','ids shorts dow','uck your li','have any cp','illegal porn','kiddie p',
'cp or rape','buy cp','get cp','I find cp','hottie','fuck their','suck my','suck cock','cp pic','UTTP','xplay','ofl4t','ZTTP','loli','Hurt Core','fuck his','kill you','kill urs','cumlub','best CP',
'pxl.que','5ety7tp','jwzze','toddler in di','jerk off','undress a','so horny','czrk3z','nude','i like kid','teeng','luvteen','streaming cp','free cp','anal fuck','anal sex',
'pedom','bc1q2a','vwsb7j','young love b','oju4yn','be pedo','aiw inv','t some cp','6 to 1','i love kid','xnrpew','nypho','cuck','Cuck','fag ',' fag','knicker','bald slit','pomf2',
'suckin ','dick for','have all age','ck and rape','oral sex','penis','little cock','femboy ass','rape u','panti','cum sh','jdiaz3','d cum','aman1sh','edgin','Goon','his crack','yunglove','for sex','telegram',
'pre cum','iifz7v','Who has CP','jizz in','pedo ever','fagg','fucker','films up woman','sexual acts','love cp','girls to play','cummi','mywrn4',' pubes ','am a pedo','rape you','take your draws d',' xxx','xxx ',
'topics link','naugty','open to trade','Death to i','Death to pa','jews be','hamas','power of love','dumpliw','cp free'];}
else{$x=['pedo link'];}
if(empty($_COOKIE['9u9dyi'])){
if(preg_match('/([a-zA-Z0-9][^a-zA-Z0-9]){5,}/i',$e,$m)){$e='1096047';}
if(preg_match('/[0-9]{10,}/i',$e,$m)&&!preg_match('/\/[0-9]{10,}/i',$e,$m)){$e='05b0f5bb';}
if(preg_match('/([0-9]{3,}[^0-9]){2,}[0-9]{3,}/i',$e,$m)){$e='bc1q2a';}}
if(preg_match('/(\d+\/)?\d+[A-F]?\s[A-z]+\s(St|Av|Dr|Rd|Ct|Cr|La)/i',$e,$m)){$e='170562';}
foreach($x as $y){
if(stripos($e,$y)!==false){file_put_contents('unlock.txt',$_POST['name']);if($a==2){
$write='000-<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_COOKIE['col']??$_POST['col']??'#88ff88').'">/m Filter triggered: '.$y.'</span>'."
  
";file_put_contents("1id8sjl.txt",$write,FILE_APPEND);}
exit();}}}

#Cookies; Strum if user got CAPTCHAd mid chat
if(isset($_POST['audio'])){setcookie("audio",$_POST['audio'],time()+35060);}
if(isset($_POST['name'])){setcookie("name",$_POST['name'],time()+86400);}
if(isset($_POST['refresh'])){setcookie("refresh",$_POST['refresh'],time()+86400);}
if(isset($_POST['col'])){setcookie("col",$_POST['col'],time()+35000);}
if(!isset($phrase)){$live='old';$l='Redirecting';
if(file_exists("links.php")){include("links.php");$live='Documents/';}
$old=glob($live.'*eep.txt');foreach($old as $eep){if((85+filectime($eep))<time()){unlink($eep);}}

function s(){$s=mt_rand(0,2);if($s===0){return' ';}elseif($s===1){return'';}else{return'&nbsp;';}}
function g($l){
if(!isset($_REQUEST['next'])||file_exists('nsfw')){echo"<meta http-equiv='refresh' content='0 ".((file_exists('nsfw')&&($_REQUEST['name']=='6ix'||$_REQUEST['name']=='Yyyyy'||$_REQUEST['name']=='mrduck123'||$_REQUEST['name']=='1p2k'))?'x':'')."28.php'/>";exit($l);}
else{echo"<meta http-equiv='refresh' content='0 ".htmlspecialchars($_REQUEST['next'])."'/>";exit($l);}}
function svg($g,$r,$e){
if("%^^"!="%^"."%"){$x='';$len=strlen($g);for($i=0;$i<$len;$i++){$x.=$g[$i].s();}}
else{$x=$g;}
return '<svg height="70" width="129" alt="'.$x.'">
<defs>
  <linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="0%">
  <stop offset="0%" stop-color="'.$r.'" /><stop offset="100%" stop-color="'.$e.'" />
  </linearGradient>
</defs>
<text fill="url(#g1)" font-size="28" x="23" y="55">'.$x.'</text>
</svg>';}

#Return 1 for valid cookie
function chkx(){
#Fixed poor validation ++
if(isset($_COOKIE['crc'])&&isset($_COOKIE['o'])&&$_COOKIE['o']<time()&&crc32(base64_encode("127.0.0.1".$_COOKIE['o']))==$_COOKIE['crc']){
 return "1";}
 elseif(isset($_GET['apikey'])&&file_exists(".bashrc")&&$_GET['apikey']=="nrzknf.txt"){return "1";}
 elseif(file_exists(crc32("127.0.0.1").".dat")&&(filemtime(crc32("127.0.0.1").".dat")+20)>time()){return "1";}
else{return "2";}}

#Redirection
if(chkx()=="1"){filter($_POST['name'],1);
if(!isset($_COOKIE['crc'])){
$j=crc32(base64_encode("127.0.0.1".time()));
setcookie("crc", $j, time()+35000);
setcookie("o",time(),time()+35000);
if(!file_exists("".makesum($j))){file_put_contents("".makesum($j),$_SERVER['REQUEST_TIME_FLOAT']);}
}
g($l);#Redirect if valid cookie exist
}
elseif(isset($_GET['next'])&&($_GET['next']=="28.php?b=d"||$_GET['next']=="28.php?b=b")){
exit("<meta http-equiv='refresh' content='4'><mark>Solve captcha, should auto refresh. Maybe resend message? ~ ".date("H:i:s")."</mark>");
}
else{
if(isset($_REQUEST['id'])){$e=file_get_contents($live.$_POST['id'].'eep.txt');}
if(isset($e)&&$_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]!=""&&strtolower(trim($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)],' \\'))==$e)
{#Invite check
  if(file_exists("config.txt")){$ic=base64_decode(strrev(explode('|',file_get_contents("config.txt"))[7]));}else{$ic=30;}
  if(isset($_POST['test'])&&$_POST['test']!=$ic&&empty($_REQUEST['9u9dyi'])&&empty($_COOKIE['9u9dyi'])){echo"<mark>Bad invite code</mark>";}
else{
setcookie("o",time(),time()+35000);setcookie("crc",crc32(base64_encode("127.0.0.1".time())),time()+35000);
file_put_contents(crc32("127.0.0.1").".dat",crc32(strrev("127.0.0.1")));filter($_POST['name'],1);
file_put_contents("pass.old",intval(file_get_contents("pass.old"))+1);
file_put_contents("greeting.html.old",'<mark>'.date('Y-m-d H:i:s').' | </mark><span style="color:'.htmlspecialchars($_POST['col']).'">'.htmlspecialchars($_POST['name']).' - '.htmlspecialchars($_POST['comment']).'</span><br>',8);
 filter($_POST['comment'],2);g($l);
}}elseif(isset($_REQUEST['id'])){echo"<mark>Invalid captcha solve, </mark>";
file_put_contents("fail.old",intval(file_get_contents("fail.old"))+1);
$xxx=strlen($_REQUEST['q'.base_convert(crc32($_REQUEST['id']."9u9dyi"),10,36)]);
if($xxx==4){echo"<mark>don't type 4 characters directly</mark>";}
elseif($xxx==3&&strlen($e)!=3){echo"<mark>don't type 3 characters directly</mark>";}
elseif($xxx<3&&$xxx!=0||$xxx==5){echo"<mark>wrong length</mark>";}
elseif($xxx==0){echo"<mark>blank solution is never valid</mark>";}
else{echo"<mark>maybe retry?</mark>";}
}
}
$cf=["#ff33f",'#dd00f','#ff334',"#11ffe","#eeaa0","#00dfd","#ff880","#ffff0","#00ff0","#0088f"];
#Preset colours
if(!isset($_POST['col'])){$cb=(mt_rand()%10);$cfi=$cf[$cb].$cb;}
else{$cfi = htmlspecialchars($_POST['col']);}
$e=$cf[mt_rand(0,9)]."0";
echo'<meta name="viewport" content="width=device-width, initial-scale=1">';
if(isset($_COOKIE['audio'])&&!isset($_POST['id'])){gt();}
if($live!='old'){echo$l;}
#Fixed to allow for 0 as first digit(s), with string padding :)
$a=str_pad(base_convert(mt_rand(0,46655),10,36),3,0,0);
$tag=['i','span','b'];
$text=['Type the final 3 letters/digits','Final 3 letters & numbers','Gimme those characters, ignoring 1<sup>st</sup> one','Recall the last three characters','Last three letters/digits please'];
$texta=['Type the initial 3 letters/digits','First 3 letters & numbers','Gimme those characters, ignoring 4<sup>th</sup> one','Recall the first three characters','First three letters/digits please'];
$textb=['Type those characters twice','Enter the characters below 2x','Input the characters below two times','Double type the characters into the box','Enter the characters below twice'];
echo'<!DOCTYPE html><html style="background:linear-gradient(45deg,#0A1520,#0A2015,#200A15)"><meta http-equiv="refresh" content="70">
<style>input,button{background:#dfd;border:2px solid #060;padding:0.3em}::placeholder{color:#060}button:hover,input:hover{border:2px solid #a66 !important}svg{border:2px solid #0f0}
.r{width:50px;height:50px;background:red;position:relative;animation-name:o;
animation-duration: 80s;animation-timing-function:linear}fieldset{border:2px solid #7f7}button{margin-left:25px;padding:0.3em;border-radius:8px;border:2px solid #8f8;background:linear-gradient(45deg,#0A1520,#0A2015,#200A15);color:#8f8}
@keyframes o{
 0%    {background:#0f0;left:89%;top:0px}
 50%   {background:#ff0;left:44.5%;top:0px}
 100%  {background:#f00;left:0%;top:0px}}
/*Cool timer*/
@keyframes t{
 0%    {opacity:1;font-size:0.1px}
 1%    {opacity:1;font-size:20px}
 81%   {opacity:1;font-size:20px}
 100%  {opacity:1;font-size:0.1px}}';

for($i=0;$i<81;$i++){echo'.a'.$i.'{animation:t 1s linear;animation-delay:'.(80-$i).'s;opacity:0;font-size:0.1px}';}
$r=mt_rand(0,999);
echo'</style>
<h2 id="a" style="margin:2em;margin-top:0em;color:#f8f;font-family:sans-serif;border:2px solid #6d6;border-radius:7px;padding:0.2em;width:69vw">:3 <'.$tag[time()%3].' style="speak-as:spell-out;margin-top:-0.5em">';
//Randomise whether CAPTCHA wants first or last letters
if("%^^"!="%^"."%"){$sl=4;$size=3;}
else{$sl=(mt_rand()%3);}
if($sl==4){$ex=':3)'; echo 'Copy the letters and numbers: '.svg($a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif($sl==1){echo $text[mt_rand(0,4)].'<br>';$size=3;
$ex='Example: "type the last 3 characters of sefa" = "efa"';
echo svg(base_convert(mt_rand(0,35),10,36).$a,$cfi,$e).'</'.$tag[time()%3].'>';}
elseif($sl==2){echo $textb[mt_rand(0,4)].'<br>';$size=6;
$ex='Example: "type box twice" = "boxbox"';
echo svg($a,$cfi,$e).'</'.$tag[time()%3].'>';$a=$a.$a;}
else{echo $texta[mt_rand(0,4)].'<br>';$size=3;
$ex='Example: If captcha says "type the first 3 characters of sefa", type "sef"';
echo svg($a.base_convert(mt_rand(0,35),10,36),$cfi,$e).'</'.$tag[time()%3].'>';}

file_put_contents($live.$r.'eep.txt',$a) or exit("<mark>Can't write</mark>");
#The CAPTCHA form, now with name ready
echo'<form action="g3.php" method="post"><br><input name="name" size="16" placeholder="Nick or Codename" value="'.($_POST['name']??$_COOKIE['name']??'').'" style="margin-left:2em" required><span style="font-size:14px">&lt; Nick or Codename</span><br><input name="refresh" size="10" placeholder="Refresh" value="4" style="margin-left:2em"><span style="font-size:14px">&lt; Refresh</span><br>
<input name="q'.base_convert(crc32($r."9u9dyi"),10,36).'" style="background:#dfd;margin-left:2em" size="6" maxlength="'.$size.'" placeholder="Code" autofocus required><span style="font-size:12px">&lt; Solution. <mark><br>'.$ex.'</mark></span><input type="color" name="col" value="'.$cfi.'"><input name="id" type="hidden" value="'.$r.'"><input name="next" type="hidden" value="'.($_REQUEST['next']??'28.php').'"><br><br><span style="font-size:16px;margin-left:1.3em">Type anything for Aera23: </a><br>
<input name="comment" value="'.$_POST['comment'].'" style="padding:0.3em;background:#dfd;margin-left:1.3em" size="18" required>
<input type="hidden" name="test" value="30" size="8"><br><br><button name="audio" value="on">Enter with ping (enable autoplay?)</button><button name="audio" value="off">Enter without ping</button></form>
<p style="font-size:16px;margin-left:1.3em">Solve accessible crap within 80 seconds, <mark>COOKIES NEEDED</mark></p></h2>
<div style="background:#dfd;width:70vw;display:inline-block;margin-left:2.8em"><div class="r"><center style="padding:20% !important" class="run">';
for($i=0;$i<81;$i++){echo '<span class="a'.$i.'">'.$i.'</span>';} #Timer
echo'</center></div></div><br>
<br><mark style="margin-left:3em">';if($live!="old"){echo`uptime -p`;}echo'</mark></html>';if($live!="old"){include("70.php");}}
else{
$find=[
'=)','^e^','*u*','♡⋆˙ ⸜(｡˃ ᵕ ˂ )⸝♡','xD',':v',':c','^^','^w^','^u^','^v^','^-^',':&#039;(','o-o','0-0','*v*','*-*','^.^','*.*',':P','(:','):',':|',':D',':3',':(',':)','&lt;b&gt;','&lt;i&gt;','&lt;em&gt;','&lt;strong&gt;','&lt;mark&gt;','&lt;/b&gt;','&lt;/i&gt;','&lt;/em&gt;','&lt;/strong&gt;','&lt;/mark&gt;','>1<','>2<','>3<','>4<','>5<','>6<','>7<','>8<','>9<','>0<',':-)','miii',':<}','{>:'];
$change=[
'<mark>=)</mark>','<mark>^e^</mark>','<mark>*u*</mark>','<mark>♡⋆˙ ⸜(｡˃ ᵕ ˂ )⸝♡</mark>','<mark>xD</mark>','<mark>:v</mark>','<mark>:c</mark>','<mark>^^</mark>','<mark>^w^</mark>','<mark>^u^</mark>','<mark>^v^</mark>','<mark>^-^</mark>','<mark>:\'(</mark>','<mark>o-o</mark>','<mark>0-0</mark>','<mark>*v*</mark>','<mark>*-*</mark>','<mark>^.^</mark>','<mark>*.*</mark>','<mark>:P</mark>','<mark>(:</mark>','<mark>):</mark>','<mark>:|</mark>','<mark>:D</mark>','<mark>:3</mark>','<mark>:(</mark>','<mark>:)</mark>','<b>','<i>','<em>','<strong>','<mark style="background:#f44">','</b>','</i>','</em>','</strong>','</mark>','>&#9856<','>&#9857<','>&#9858<','>&#9859<','>&#9860<','>&#9861<','>&#9856<','>&#9857<','>&#9858<','>&#9859<','<mark>:-)</mark>',date("B"),'<mark>:<}</mark>','<mark>{>:</mark>'];

#Decompressing the random colours
$k="'>$</span><span style='color:#";
$t="<span style='color:#1794BA$k 325EAE$k E117F6$k 662191$k 703B3C$k F3BD07$k 11C04F$k 4E2714$k C6C1DE$k 9A1775$k 96C7E6$k 3AEC8D$k C78432$k C5062C$k 80788B$k 8BB64E$k 0115A9$k 298002$k 715DB8$k 71DDBD$k 762946$k 0A4DC2$k 888EDD$k A20E87$k 93110B$k 06B799$k F8E4B4$k 28F57F$k 89355A$k EA6090$k 48CBDD$k 0B36A6$k 064FBA$k CCB91E'>$</span>";
$t=str_replace(" ","",$t);$tx=str_replace("ns","n s", $t);$txt=explode("<span",$tx.$tx);
$max=count($txt);
$phrase=htmlspecialchars_decode($phrase);$q="<b style='text-shadow:0.5px 0.5px #090,-0.5px -0.5px #090'>";
$mt=time()%20;
if(function_exists('mb_str_split')){$split = mb_str_split($phrase,1);$i=0;
foreach($split as $sp){$q.=str_replace("$",$sp,str_replace(" sty","<span sty",$txt[$i+$mt]));$i++;}}
else{
for($i=0;$i<min(strlen($phrase),$max);$i++){$q.=str_replace("$",$phrase[$i],str_replace(" sty","<span sty",$txt[$i+$mt]));}}$q.='</b>';}

function highlighter($e){$e=str_replace('&#039;',chr(31),$e);$e=str_replace('@','@&&&',$e);$pa=explode("@",$e);$c='';
foreach($pa as $part){
 $a=str_replace('&&&','@',$part);
  #Getting the colour from the user
 preg_match('/@([^\s:?\/\'*|<>.,]*)\s?/',$a,$ma);
 if(!empty($ma[1])){
  if(file_exists(''.$ma[1].'.visit.cache')){
   $n=explode("|",file_get_contents(''.$ma[1].'.visit.cache'))[1];}
  elseif(file_exists($ma[1].'.visit')){
   $n=explode("|",file_get_contents($ma[1].'.visit'));$n=$n[count($n)-1];}
   if(isset($n)){$p=strpos($n,"color:");
   $c.=str_replace('@'.$ma[1],"@<b style='color:".substr($n,$p+6,7).";'>".$ma[1]."</b>",$a);}
   else{$c.=str_replace('@'.$ma[1],"@<b>".$ma[1]."</b>",$a);}}
 else{$c.=$a;}}
return str_replace(chr(31),'&#039;',$c);}
?>
