<?php
$c1=mysqli_connect('localhost','root');
if($c1)
{
    echo"connection succesful";

}
else{
    echo"no connection";

}
mysqli_select_db($c1, 'gym1');
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip_code=$_POST['zip_code'];
$name_on_card=$_POST['name_on_card'];
$credit_card_number=$_POST['credit_card_number'];
$exp_month=$_POST['exp_month'];
$exp_year=$_POST['exp_year'];
$CVV=$_POST['CVV'];
$quary1="insert into gym3 (full_name, email, address, city, state, zip_code, name_on_card, credit_card_number, exp_month, exp_year, CVV) values('$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$name_on_card', '$credit_card_number', '$exp_month', '$exp_year', '$CVV')";
mysqli_query($c1,$quary1);
echo "$quary1";
header('location: onlinepayment.php');

?>