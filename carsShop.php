\<?php
/*echo  (int )(15.2+14.7+(10.5+10.5));
echo '<br>';
echo gettype((int)(15.2+14.7+(10.5+10.5)));
echo '<br>';
echo gettype(100);
echo '<br>';
echo"we lovewe <br> enrnt <br> school";
echo '<br>';
echo nl2br ('
hallo "elzero"
we love $ programming$
languages specially "php"
');
echo '<br>';
$something ="programing";
echo<<<"cod"
hello\php\
we love $something
cod;

echo '<br>';
echo (int)"9";
echo '<br>';
echo gettype((int)"hello php");
echo '<br>';
print_r(['frontend'=>"arery",
   [ "js"=>"arre",
    "html",
    "css",]

]);
//echo '<br>';
//$neam="elzero";
//$$neam="web";
//echo $$neam ;
echo '<br>';
$neam="elzero";
$$neam="web";
echo $neam;
echo '<br>';
$a=200;
$b=$a;
$a=100;
$b=$a;
echo $b;
echo '<br>';
echo php_uname();

echo '<br>';
echo __lINE__;
echo '<br>';
echo __FILE__;
echo __DIR__;
echo '<br>';
echo PHP_VERSION;
echo '<br>';
define("breake","ad");
echo '<br>';
echo breake;
echo '<br>';
//echo PHP_SERVE
echo '<br>';
//print_r($_SERVERName);
echo '<br>';
echo"fdkfdk";
echo '<br>';
$a="10";
echo $a;
echo gettype($a);
echo '<br>';
$d=10;
echo++ $d;
$a=300;
 $b=200;
 $c=100;
 if($a>$b){
    echo"a is larger than b";
 }elseif($a>$c)
 {echo"a is larger than c";}
 else{echo"a is no larger than b or c";}

echo '<br>';
echo $a > $b ? "a+c= b":"jj";
echo '<br>';
$genre="hake and slash";
switch($genre){
case"reg":echo "i recommend castklj";
break;
case"hake and slash":
    echo "yeas";
break;}
echo"<br>";
$n1=23;
$n2=5;
$op='+';
switch($op){
case'+':
    echo $n1+$n2;
    break;
    case'-':
        echo $n1-$n2;
        break;
        case'/':
            echo (int)($n1/$n2);
            echo"<br>";
            echo $n1%$n2;
            break;
            case'*':
                echo $n1*$n2;
                break;
                default:
                echo" unkonwn operation";
}
echo '<br>';
$day=1;
if($day=="sat"){
    echo"we open 3;3";
}elseif($day=="tue"){
    echo "we open in 4:4";
}else{echo"no";}
echo '<br>';

for($index=0;$index<=20;$index+=2){

    echo "$index <br>" ;
}
echo '<br>';
$num=2;
while($num<520){
echo "$num <br>";
$num+=44;}

echo "fggfgf";
echo '<br>';
echo '<br>';
$stop=3;
$start=10;
$end=0;
for($start;$start>=$end;$start--){
if($start<11){
    echo"o$start<br>";
}
if($start==$stop){
    break;
}


}
echo '<br>';
$nums=["ahmed","qassm","hady","jun"];
for($i=0;$i<3;$i++){
    echo $nums[$i];
}
echo '<br>';
$nume=[1,13,12,20,51,17,30];
for($i=0;$i<=10;$i++){
if($nume[$i]%2==0){
    echo $nume[$i];
}
}
$start=0;
$mix=[1,2,3,"a","b","b",4];
foreach($mix as $ty=> $er){
  if($ty==$start):
    continue;
  endif;
  
  
    echo $er;
}
echo '<br>';
//require_once("Untitled-.php");
//include_once("Untitled-1.php");
echo"fjkf";
$mone=["ahmed"=>100,"sayed"=>150,"osama"=>100,"maher"=>250];
foreach($mone as $kaky=>$valoy){
    echo"the neam is $keky and i need$valoy pound from him";
}
function hallo($num,$tayp=""){
    if($tayp=="male"){
        echo"hallo mr $num";
    
    }elseif ($tayp=="female") 
    {
        echo "hallo miss $num";
    } else{
        echo"hallo $num";
    }
    
}
echo hallo("osame","male");
echo '<br>';
echo hallo("alska","female");
echo '<br>';
echo hallo("osame");
echo '<br>';
function gat($a,$b,$c,$d,...$e){
    echo $a.$b.$c.$d;
    foreach($e as $e):
        echo "$e";
    endforeach;
}
echo '<br>';
echo gat("qassm","mohamed","abo","ara",1,2,4,3,3);
echo '<br>';
echo '<br>';
function sum(...$e)
{$v=0;
    foreach($e as $e){
        if($e==5){
            $e=0;
        }elseif($e==10){
            $e=20;
        }
       $a+=$e;
    }
    echo $a;
}
echo '<br>';
echo sum(10,12,5,6,6,10);
echo '<br>';
echo sum(10,5,10,5);
echo '<br>';
function gaat($a,$b,$c,$d,...$e){
    echo $a.$b.$c.$d;
    foreach($e as $e):
        echo "$e";
    endforeach;
}
echo '<br>';
echo gaat("qassm","mohamed","abo","ara",1,2,4,3,3);

echo '<br>';
function muli(...$r){
    $m=1;
        foreach($r as $r){
    if(is_string($r)){
        continue;
    }elseif(is_float($r)){
      $r=  (int)($r);   
    }
      $m=$m*$r;
    }
    echo $m;
    }
    echo '<br>';
    echo muli(10,20);
    echo '<br>';
    echo muli("a",10,30);
    echo '<br>';
    echo muli(100.5,10,"b");
    echo '<br>';
    echo '<br>';
function math($v,$j,$l){
if($l=="-"){
 echo $v-$j;
}elseif($l=="+"){
    echo $v+$j;
}elseif($l=="*"){
    echo $v*$j;
}else{echo"not fuind"; }
}
echo '<br>';
echo math(10,4,"*");
echo '<br>';
echo '<br>';
echo math(10,4,"*");
echo '<br>';
$masseg="hallo";
function halo($t){
 global $masseg;
 echo $masseg.$t;
}
echo '<br>';
echo halo("qassm");
echo '<br>';
echo '<br>';

$d=fn($t)=>"hallo$t";
echo '<br>';
echo $d("qassm");
echo '<br>';
function hallo($num,$tayp=""){
    if($tayp=="male"){
        echo"hallo mr $num";
    
    }elseif ($tayp=="female") 
    {
        echo "hallo miss $num";
    } else{
        echo"hallo $num";
    }
    
}
echo hallo("osame","male");
echo '<br>';
echo hallo("alska","female");
echo '<br>';
echo hallo("osame");
echo '<br>';
//function sum(){
   // print_r(func_get_arg());
  //  for($i=0;$i<=func_get_arg();$i++ ){
    //    echo $i;
   // }
//}
echo '<br>';
//sum("ffs","ffd","fdf");
echo '<br>';
//function work($mu,$nu,$ye){
   /* if(is_string($ye)){
        $nu=$ye;
    } elseif(is_string($nu)){
        $nu=$mu;
    }
    elseif(is_int($ye)){
        $nu=$ye;
    }elseif(is_int($mu)){
        $nu=$mu;
    }elseif(is_bool($mu)){
        $ye=$mu;
    }elseif(is_bool($nu)){
        $ye=$nu;
    }
echo "hallo $mu,your age is $nu you are availabl $ye" ;

}
echo '<br>';
echo work("qassm",true,30);
echo '<br>';
function math($v,$j,$l){
if($l=="-"){
 echo $v-$j;
}elseif($l=="+"){
    echo $v+$j;
}elseif($l=="*"){
    echo $v*$j;
}else{echo"not fuind"; }
}
echo '<br>';
echo math(10,4,"*");
$d=9;
echo '<br>';
if(4==4){
    for($y=0;$y<=5;$y++){
        echo"qassm";
        echo '<br>';
    }}
    switch($r='+'){
        case'+':
        echo 1+2;
        break;
    }
   
    echo  gettype((string )(15.2+14.7+(10.5+10.5)));
echo '<br>';
    echo<<<"cod"
    hhbhnbhbh $d 
    cod;
echo '<br>';
print_r(["hhh"]);

echo '<br>';
echo __lINE__;
echo '<br>';
echo __FILE__;
echo __DIR__;
echo '<br>';
$a=[8,3];
foreach($a as $a){
    echo"er";
    continue;}
echo '<br>';
$start=1;
$mix=[1,2,3,"a","b","b",4];
foreach($mix as $ty=> $er){
  if($ty==$start):
    continue;
  endif;
  
  
    echo $er;
}
echo '<br>';
function ee($r,$e){
    echo $r+$e;
}
ee(2,3);
echo '<br>';
echo '<br>';
$friends = ["ag"=>"ahmed","om"=>"osamea",
"mg"=>"momede","as"=>"farid"];
echo '<pre>';
print_r(array_chunk($friends,2,true));
echo'</per>';
echo '<br>';
$codes =["h","c","j"];
$means=["html","css","javascript"];
echo '<br>';
echo '<pre>';
print_r(array_combine($codes,$means));
echo'</per>';
echo '<br>';
echo '<pre>';
print_r(array_flip($friends));
echo'</per>';
echo '<br>';
$sum=[10,20,30];
print_r(array_sum($sum));
echo '<br>';
$numes=[5,5,6,7];
echo '<br>';
$chares=["a","b","c","d","e"];
$char="@@";
$zero=0;

echo '<br>';
print_r(array_push($chares,$char));
echo '<br>';
print_r($chares);

echo '<br>';
$numes=[1,2,3,4,5,6];
echo next($numes);
echo next($numes);
echo current($numes);
echo '<br>';
print_r(array_slice($numes,-5,3));
echo '<br>';
$mix=[1,2,3,"a","b","c",7,8,9];
echo '<br>';
$nums=[4,5,6];
print_r(array_splice($mix,3,3,$nums));
echo '<br>';
print_r($mix);
echo '<br>';
$number=[11,2,10,7,20,50];
function sum($a){
    $s=0;
    foreach($a as $e){
        $s+=$e;
    }
    return $s;
}
echo '<br>';
echo sum($number);
echo '<br>';
function mix($a){
    return max($a);
}
echo '<br>';
function miix($a){
    $mix=$a[0];
    foreach($a as $e){
        if($e>$mix){
            $mix=$e;
            
     }
    }
    return $mix;
}
echo '<br>';
echo miix($number);
echo '<br>';
function miin($a){
    $min=$a[0];
    foreach($a as $e){
        if($e<$min){
            $min=$e;
            
     }
    }
    return $min;
}
echo '<br>';
echo miin($number);

echo '<br>';
function odd($a){
    $odd=$a;
   foreach($a as $e){
        if($e%2!= 0)
        {
           $od[]=$e; 
        }
   }return $od;
}
$w=[1,2,34,5];
print_r (odd($w));
echo '<br>';
function odd($a){
    $odd=$a;
   foreach($a as $e){
        if(is_numeric($e) &&$e%2!= 0)
        {
           $od[]=$e; 
        }
   }return $od;
}
$w=[1,2,34,5,"e"];
print_r (odd($w));
echo '<br>';
echo '<br>';
function sumword($a){
    $word=" ";
    foreach($a as $e){
$word .=$e;
    }return $word;
}
echo '<br>';
$q=['Q','a','s','s','m'];
echo sumword($q);
echo '<br>';
echo '<br>';
$frinds=["osii","ahmed","qassm","ibrahem"];
 echo $frinds[array_rand($frinds)];
echo '<br>';
$E=11.5;
var_dump(filter_var($E,FILTER_VALIDATE_FLOAT));
echo '<br>';
$F=11.5;
$R=9.4898;
$T=-7.5;
echo round($F,0,PHP_ROUND_HALF_DOWN);
echo '<br>';
echo round($R,1);
echo '<br>';
echo round($T,0,PHP_ROUND_HALF_DOWN);
echo '<br>'; 
$l1="http://www.elz      ero.org";
$l2="http://!elzero.org";
$l3="http://elzero.org";
$l4="http://elzero.o!rg";
$a=filter_var(filter_var($l2,FILTER_VALIDATE_URL));
if($a==true){
    echo"a valid url ";}
    else{
        echo"not a";
    }
    echo '<br>';
    var_dump(filter_var(filter_var($l1,FILTER_SANITIZE_URL)));
    echo '<br>';
    var_dump(filter_var(filter_var($l2,FILTER_SANITIZE_URL)));
    echo '<br>';
    var_dump(filter_var(filter_var($l3,FILTER_SANITIZE_URL)));
    echo '<br>';
    var_dump(filter_var(filter_var($l4,FILTER_SANITIZE_URL)));
    echo '<br>';
    echo '<br>';
echo round((disk_total_space("c:")+ disk_total_space("d:"))/1024/1024/1024/1024);
echo '<br>';
echo filesize("pq.txt");
echo '<br>';
echo file_exists("pq.txt");
echo '<br>';
echo is_dir("pq.txt");
echo '<br>';
echo '<br>';
echo date_default_timezone_get();
echo date_default_timezone_set("Asia/Riyadh");
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
echo date("D, d M y -h:i:s A");
echo '<br>';
echo date("l,d F Y - h:i:s A");
echo '<br>';
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
echo '<br>';
$d=date_create("2005-10-2");
date_add($d,date_interval_create_from_date_string("15 hour 15 minutes 15 seconds"));
echo date_format($d,"Y-m-d H:i:s");
echo '<br>';
echo '<br>';
echo date("y-m-d");
echo '<br>';
echo date_default_timezone_get();
$now=date_create("now");
echo'<pre>';
$d=date_create("1990-10-01");
$dat= date_diff($d,$now);
print_r( $dat);
echo'</pre>';
echo "kk" .$dat->days;
echo '<br>';
echo "kk" .$dat->y;
echo '<br>';
echo '<br>';
echo time();
echo '<br>';
$E=date_diff(date_create("1970/01/01 0:0:0"),date_create("now"));
print_r(date_diff(date_create("1970/01/01 0:0:0"),date_create("2024-12-31 11:10:0")));
echo '<br>';
echo  $E->s;

echo '<br>';
setcookie("site[layout]","boxed",time()+60*60*24*30*5,"/");
echo '<br>';
setcookie("site[font]","swat",time()+60*60*24*30*5,"/");
setcookie("site[color]","bule",time()+60*60*24*30*5,"/");
echo '<br>';
print_r($_COOKIE);
echo '<br>';
echo '<br>';
setcookie("site[layout]","boxed");
echo '<br>';
setcookie("site[font]","swat",time()+60*60*24*30*5,"/");
setcookie("site[color]","bule",time()+60*60*24*30*5,"/");
echo '<br>';
print_r($_COOKIE);
echo '<br>';
echo '<br>';
echo '<br>';//       -------sql--------
$dse ='mysql :host=localhost;dbname=MYSQL';
$USER='root';
$pass='';
$option=array(
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',);
try{
    $db=new PDO($dsn,$user,$pass,$option);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTTON);
    
}

echo '<br>';*/




// إعداد الاتصال بقاعدة البيانات
$host = "localhost";
$dbname = "cars_show";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("<p style='color:red;'>فشل الاتصال بقاعدة البيانات</p>");
}

$sql = "SELECT price,id from `cars` WHERE`id`LIKE'1'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>قائمة العناصر</title>
    <style>
        body { font-family: Arial; direction: rtl; text-align: right; }
        table { border-collapse: collapse; width: 70%; margin: 20px auto; }
        th, td { border: 1px solid #aaa; padding: 8px; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">📋 قائمة العناصر</h2>
    <table>
        <tr>
            <th>المعرف</th>
            <th>الاسم</th>
            <th>الوصف</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
            <td><?= htmlspecialchars($row['id']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>














