<?php
$age=18;

if($age>=20){
    echo "お酒が飲めるぞ！";
}else{
    echo "お酒は二十歳になってから！";
}
?>

<?php
$age=24;
$is_student=true;
if($age<25 && $is_student){
    echo '学割が使えるよ。';
}elseif($age<25){
    echo '若者応援割引が使えるよ';
}
?>

<?php
$blood='B';
if($blood=='A'){
    echo "A型です";
}elseif($blood=='B'){
    echo "B型です";
}elseif($blood=='O'){
    echo "O型です";
}elseif($blood=='AB'){
    echo "AB型です";
}else{
    echo "A/B/O/ABから選択してください";
}
?>

<?php
$name="";
if($name !=""){
    echo '名前を受け付けました';
}else{
    echo '名前を入力してください';
}
?>

<?php
$string='1';
$int=1;

if(1===$string){
    echo '変数stringはint型です。';
}else{
    echo '変数stringはstring型です。';
}

if(1===$int){
    echo '変数stringはint型です。';
}else{
    echo '変数stringはstring型です。';
}