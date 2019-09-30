<html>
<head>
<title>Loan Calculator</title>
<style>

h1{font-family:Bodoni MT; font-size:50px; color:Red; }

body{background-image:url("");
     background-size:cover;
	 background-repeat:no-repeat;
	 background-attachment: fixed;
	 
	 }
h3{font-size:25px; }
h4{font-size:18px; color:yellow;}
h5{font-size:18px; color:#1aff1a;}
h6{font-size:18px; color:blue;}
h2{font-size:18px; color:#ff0000;}



</style>	 
</head>
<body bgcolor="pink">

<center><h1><u><b>Loan Calculator</b></u></h1></center><br><br>


<form method="post">
<h6>
 Enter your Details:
<br><br>Full Name: 
<input type="text"  name="name"><br><br>
Enter the Amount: <input type="number" name="Amount"><br><br>
Enter customer no.:
<input type="number" name="Cno"><br><br>
Choose the purpose of the Loan: 
<select name="pur">
<option>
<option value="Car Loan">Car Loan (Min Interest=8%)
<option value="Home Loan">Home Loan (Min Interest=11%)
<option value="Student Loan">Student Loan (Min Interest=5%)
<option value="Personal Loan">Personal Loan (Min Interest=6.5%)
</select><br><br>
Enter the Time period(Months): <input type="number" name="Time"><br><br>
Enter the Rate of Interest: <input type="text" name="Rate"><br><br>
<input type="submit" name="Submit"><br><br>



</form>

<?php
if($_POST)
{
$name=$_POST['name'];
$cno=$_POST['Cno'];
$pur=$_POST['pur'];
$amount=$_POST['Amount'];
$Rate=$_POST['Rate'];
$Time=$_POST['Time'];

if(($cno<0) || ($amount<0) || ($Rate<0) || ($Time<0))
{
echo"<h1>Please Enter Valid Details</h1>";
}
else
{

if($pur=="Home Loan" && $rate<10)
{
$rate=10;
}
if($pur=="Car Loan" && $Rate<7)
{
$rate=7;
}
if($pur=="Student Loan" && $Rate<6)
{
$rate=6;
}
if($pur=="Personal Loan" && $Rate<5)
{
$rate=5;
}




echo"Full Name: $name<br> Contact Number: $cno<br>";
echo"Loan Purpose: $pur<br>";
echo"Loan Amount: $amount";
echo"Interest: $Rate <br>";
echo"Time Period: $Time months<br>";


$Rate=($Rate/1200);
$a=pow(1+$Rate,$Time);
$e=($amount*$Rate*$a)/($a-1);

echo "EMI is: $e </h2><table border=10px  cellspacing=10 cellpadding=10 align=center><tr><th>MONTH</th><th>PRINCIPAL</th><th>INTEREST</th><th>BALANCE</th></tr>";
for($i=1;$i<=$Time;$i++)
{
     
 $interest=($amount*$Rate);
  $principal=$e-$interest;
 $bal=$amount-$principal;
 if($bal<0)
  {
    $bal=0;
  }
  echo "<tr><td>$i</td><td>$principal</td><td>$interest</td><td>$bal</td></tr>";
  $amt=$bal;
}
echo"</div>";
}
}
?>

</body>
</html>
