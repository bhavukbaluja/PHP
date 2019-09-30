<html>
<body>
<html>
<head>
<title>Indian Railways</title>
<style>

h1{font-family:Bodoni MT; font-size:50px; color:Red; }

body{background-image:url("photos/4.jpg");
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
<body>

<center><h1><u><b>Welcome to The Indian Railways</b></u></h1></center>
<center><img src="photos/IndianRailways.jpg" style="width:100px;height:100px;"></a></center>
<form method="POST">
	<h3><b>From</b><br><select name= "from">
	<option>(select)
    <option value= "Delhi">Delhi</option> 
	<option value= "Dehradun">Dehradun</option> 
	<option value= "Mumbai">Mumbai</option> 
	<option value= "Firozpur">Firozpur</option> 
	<option value= "Amritsar">Amritsar</option> 
    </select> 	<br><br>
	
	<b>To</b><br><select name= "to">
	<option>(select)
	<option value= "Delhi">Delhi</option> 
	<option value= "Dehradun">Dehradun</option> 
	<option value= "Mumbai">Mumbai</option> 
	<option value= "Firozpur">Firozpur</option> 
	<option value= "Amritsar">Amritsar</option> 
    </select><br><br> 
   </h3>
    	

    	
	
	<input type="submit" value="Search">
</form>
<?php
if($_POST)
{	
$f= $_POST['from'];
$t= $_POST['to'];

if($f==$t)
{ echo"<h4>Please Select Another City !<h4>\n";
}
else{
echo "<h4>List of Trains from $f to $t:<br></h4>";

switch($f)
{		case "Dehradun":
			if($t== "Delhi")
				{
				echo "<ul>";
				echo "<h4><li>12018 Dehradun Satabdi Express <br> </li></h4>";
				echo "<h4><li>12056 New Delhi Janshatabdi Express <br> </li></h4>";
				echo "<h4><li>14042 Mussoorie Express  <br> </li></h4> ";
				echo "<h4><li>12402 Nanda Devi Express <br> </li></h4> ";
				echo "<h4><li>19020 Dehradun Express <br> </li> </h4>";
				echo "</ul>"; 
				
				}
			else if($t== "Mumbai")
				{
				echo "<ul>";
				echo "<li><h4>19020 Dehradun - Mumbai Bandra Terminus Express</h4> </li>";
				echo "<li><h4>22660 Dehradun-Kochuvali Superfast Express</h4> <br> </li>";
				echo "</ul>";
				}
				
			else if($t=="Amritsar")
				{ 
				 echo "<ul>";
				 echo "<h4><li>14631 Dehradun - Amristar(Lahori) Express <h4><br></li>";
				}
			
			else 
				{
				echo "<h4>No Direct trains available for this root !<h4>";
				}
		break;
		
		case "Delhi":
			if($t== "Dehradun")
			{
			echo "<ul>";
			echo "<h4><li><a href='Dehradun Shatabdi/'DdnStb.php'>12017 Dehradun Satabdi Express</a> <br> </li></h4>";
			echo "<h4><li><a href='Delhi JSTB/'DliJstb.php'>12055 New Delhi - Dehradun Janshatabdi Express</a> <br> </li></h4>";
			echo "<h4><li><a href='Mussoorie xprs/'Mussoorie.php'>14041 Mussoorie Express </a> <br> </li></h4> ";
			echo "<h4><li><a href='Nanda Devi/'NandaDevi.php'>12401 Nanda Devi Express </a> <br> </li></h4> ";
			echo "<h4><li><a href='Ddn express/'Ddnxprs.php'>19019 Dehradun Express </a> <br> </li> </h4>";
			echo "</ul>";
			}
			
			else if($t=="Firozpur")
			{ 
			echo "<ul>";
			echo "<h4><li>19023 Mumbai - Firozpur Janta Express <br> </li></h4>";
			echo "<h4><li>14625 Firozpur Intercity Express <br> </li></h4>";
			echo "<h4><li>12137 Punjab Mail </li></h4>";
			echo "<h6><li>12047 New Delhi - Firozpur Shatabdi Express <br> </li></h6>";
			}
			
			else if($t== "Mumbai")
			{
			echo "<ul>";
			echo "<h2><li>12952 New Delhi - Mumbai Central Rajdhani Express</h2></li>";
			echo "<h2><li>12954 August Kranti Rajdhani Express</li></h2>";
			echo "<h2><li>22222 Nazrat Nizamuddin - Mumbai CSMT Rajdhani Express</h2></li>";
			echo "<h2><li>12432 Hazrat Nizamuddin - Thiruvananthapuran Central Rajdhani Express</li></h2>";
			echo "<h5><li>12215 Delhi Sarai Rohilla - Bandra Terminal Garib Rath Express</h5></li>";
			echo "<h5><li>12215 Hazrat Nizamuddin - Mumbai Bandra Terminal Garib Rath Express</li></h5>";
			echo "<h4><li>12128 Punjab Mail</h4></li>";
			echo "<h4><li>19024 Firozpur Mumbai Janta Express</h4></li>";
			echo "<h4><li>19020 Dehradun Express</li></h4>";
			echo "<h4><li>22210 New Delhi - Mumbai Central AC Duronto Express</h4></li>";
			echo "<h4><li>12248 Hazrat Nizamuddin - Bandra Terminus Yuva Express(PT)</li></h4>";
			echo "<h4><li>22110 Hazrat Nizamuddin - Mumbai LTT AC Superfast Express(PT)</h4></li>";
			echo "<h4><li>12908 Maharashtra Sampark Kranti Express</li></h4>";
			}
				
			else if($t=="Amritsar")
			{ 
			echo "<ul>";
			echo "<h6><li>12031 New Delhi - Amritsar Shatabdi Express  </li></h6>";
			echo "<h6><li>12029 New Delhi - Amritsar Swarna Jayanti Shatabdi Express </li></h6>";
			echo "<h6><li>12013 New Delhi - Amritsar Shatabdi Express </li></h6>";
			echo "<h5><li>12203 Saharsa - Amritsar Garib Rath Express<br> </li></h5>";
			echo "<h4><li>12715 Sachkhand Express <br> </li></h4>";
			echo "<h4><li>12497 Shan-e-Punjab Express <br> </li></h4>";
			echo "<h4><li>22429 Delhi-Pathankot Superfast Express <br> </li></h4>";
			echo "<h4><li>12925 Pashchim(Deluxe) Superfast Express<br> </li></h4>";
			echo "<h4><li>12421 Hazur Nanded - Amritsar Weekly Superfast Express <br> </li></h4>";
			echo "<h4><li>12459 New Delhi - Amritsar InterCity Express <br> </li></h4>";
			echo "<h4><li>22125 Nagpur - Amritsar AC Superfast Express<br> </li></h4>";
			echo "<h4><li>12903 Golden Temple Mail <br> </li></h4>";
			echo "<h4><li>18237 Chhattisgarh Express (PT) <br> </li></h4>";
			echo "<h4><li>18507 Hirakud(Hinkund) Express<br> </li></h4>";
			
			}
			
			
			else
			{
			echo"<h4>No trains available for this root !</h4>";
			}
			
		break;
	
        case "Mumbai":
			if($t=="Delhi")
			{
			echo "<ul>";
			echo "<h2><li>12951 Mumbai Central - New Delhi Rajdhani Express</h2></li>";
			echo "<h2><li>12953 August Kranti Rajdhani Express</li></h2>";
			echo "<h2><li>22221 Mumbai CSMT - Nazrat Nizamuddin  Rajdhani Express</h2></li>";
			echo "<h2><li>12431 Thiruvananthapuran Central - Hazrat Nizamuddin Rajdhani Express</li></h2>";
			echo "<h5><li>12215 Bandra Terminal - Delhi Sarai Rohilla Garib Rath Express</h5></li>";
			echo "<h5><li>12215 Hazrat Nizamuddin - Mumbai Bandra Terminal Garib Rath Express</li></h5>";
			echo "<h4><li>12137 Punjab Mail</h4></li>";
			echo "<h4><li>19023 Mumbai Firozpur Janta Express</h4></li>";
			echo "<h4><li>19019 Dehradun Express</li></h4>";
			echo "<h4><li>22209 Mumbai Central - New Delhi AC Duronto Express</h4></li>";
			echo "<h4><li>12247 Bandra Terminus - Hazrat Nizamuddin Yuva Express(PT)</li></h4>";
			echo "<h4><li>22109 Mumbai LTT Hazrat Nizamuddin AC Superfast Express(PT)</h4></li>";
			echo "<h4><li>12907 Maharashtra Sampark Kranti Express</li></h4>";
			}
			
			else if($t=="Amritsar")
			{ 	
			echo "<ul>";
			echo "<h4><li>12903 Golden Temple Mail <br> </li></h4>";
			echo "<h4><li>11057 Mumbai - Amritsar CSMT(Dadar/Pathankot) Express <br> </li></h4>";
			echo "<h4><li>12925 Pashchim(Deluxe) Superfast Express<br> </li></h4>";
			echo "<h4><li>12483 Kochuvali - Amritsar Weekly Superfast Express<br> </li></h4>";
			}
			
			else if($t=="Dehradun")
			{
			echo "<ul>";
			echo "<h4><li>19019 Mumbai - Dehradun Bandra Terminus Express</a></h4> </li>";
			echo "<h4><li>22659 Kochuvali - Dehradun Superfast Express</a></h4> <br> </li>";
			echo "</ul>";
			}	
			
			else if($t=="Firozpur")
			{ 
			echo "<ul>";
			echo "<h4><li>19023 Mumbai - Firozpur Janta Express <br> </li></h4>";
			echo "<h4><li>12137 Punjab Mail <br> </li></h4>";
			}
		
			else
			{ echo "<h4>No trains available for this root !</h4>";
			}
		
		
		break;
		
		
		case "Firozpur":
		    if($t=="Delhi")
			{ 
			echo "<ul>";
			echo "<h4><li>19024 Mumbai Firozpur Janta Express <br> </li></h4>";
			echo "<h4><li>14626 Firozpur Intercity Express <br> </li></h4>";
			echo "<h4><li>12138 Punjab Mail </li></h4>";
			echo "<h6><li>12048 Firozpur Shatabdi Express <br> </li></h6>";
			}
			
			else if($t=="Amritsar")
			{ 
			echo "<ul>"; 
			echo "<h4><li>19611 Ajmer - Amritsar Express <br> </li></h4>";
			echo "<h4><li>19415 Ahmedabad - Shri Mata Veshno Devi Katra Express (PT)<br> </li></h4>";
			echo "<h4><li>19225 Bathinda - Jammu Tawi Express<br> </li></h4>";		
			}
			
			else if($t=="Mumbai")
			{ 
			echo "<ul>";
			echo "<h4><li>19024 Firozpur Mumbai Janta Express <br> </li></h4>";
			echo "<h4><li>12138 Punjab Mail <br> </li></h4>"; 
			}
			
			else
			{ echo "<h4>No trains available for this root !</h4>";
			}
		
		
		break;
		
		
		
		case "Amritsar":
			if($t=="Delhi")
			{ 
			echo "<ul>";
			echo "<h6><li>12031 New Delhi - Amritsar Shatabdi Express <br> </li></h6>";
			echo "<h6><li>12030 New Delhi - Amritsar Swarna Jayanti Shatabdi Express <br> </li></h6>";
			echo "<h6><li>12014 New Delhi - Amritsar Shatabdi Express<br> </li></h6>";
			echo "<h5><li>12204 Saharsa - Amritsar Garib Rath Express<br> </li></h5>";
			echo "<h4><li>12716 Sachkhand Express <br> </li></h4>";
			echo "<h4><li>12498 Shan-e-Punjab Express <br> </li></h4>";
			echo "<h4><li>22430 Delhi-Pathankot Superfast Express <br> </li></h4>";
			echo "<h4><li>12926 Pashchim(Deluxe) Superfast Express<br> </li></h4>";
			echo "<h4><li>12422 Hazur Nanded - Amritsar Weekly Superfast Express <br> </li></h4>";
			echo "<h4><li>12460 New Delhi - Amritsar InterCity Express <br> </li></h4>";
			echo "<h4><li>22126 Nagpur - Amritsar AC Superfast Express<br> </li></h4>";
			echo "<h4><li>12904 Golden Temple Mail <br> </li></h4>";
			echo "<h4><li>18238 Chhattisgarh Express (PT) <br> </li></h4>";
			echo "<h4><li>18508 Hirakud(Hinkund) Express<br> </li></h4>";
			
			}
		
			else if($t=="Mumbai")
			{ 
			echo "<ul>";
			echo "<h4><li>12904 Golden Temple Mail <br> </li></h4>";
			echo "<h4><li>11058 Amritsar - Mumbai CSMT(Dadar/Pathankot) Express <br> </li></h4>";
			echo "<h4><li>12926 Pashchim(Deluxe) Superfast Express<br> </li></h4>";
			echo "<h4><li>12484 Amritsar - Kochuvali Weekly Superfast Express<br> </li></h4>";
			}
			
			else if($t=="Firozpur")
			{
			echo "<ul>";
			echo "<h4><li>19612 Amritsar - Ajmer  Express <br> </li></h4>";
			echo "<h4><li>19416 Shri Mata Veshno Devi Katra - Ahmedabad Express (PT)<br> </li></h4>";
			echo "<h4><li>19226 Jammu Tawi - Bathinda Express<br> </li></h4>";		
			}
			
			else if($t=="Dehradun")
			{ 	 
			echo "<ul>";
			echo "<li><h4>14631 Amristar - Dehradun(Lahori) Express <br></h4></li>";
			}
			
			
			
		break;





	
	default:
		echo "no trains";
}
}
}
?>




<body>
<html>
