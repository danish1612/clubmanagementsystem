<?php 
require("includes/config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}

require("database/edit_to_profile.php");
?>
<!DOCTYPE html>
<html>
<title>MEMBERS PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<?php require('includes/sidemenu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
<?php require('includes/header.php');?>
<div align="center">
<p><b>MEMBER INFORMATION</b></p>
</div>
<div align="center">
<table width="50%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

Name:<br />
<input type="text" name="name" value="<?php echo $name;?>"><br />
<span class="error"> <?php echo $nameErr;?></span>
<br />

Metric ID:<br />
<input type="text" name="metricid" value="<?php echo $metricid;?>"><br />
<span class="error"> <?php echo $metricidErr;?></span>
<br />
 
Phone Number:<br />
<input type="text" name="phoneno" value="<?php echo $phoneno;?>"><br />
<span class="error"> <?php echo $phonenoErr;?></span>
<br />

E-mail:<br />
<input type="text" name="email" value="<?php echo $email;?>"><br />
<span class="error"> <?php echo $emailErr;?></span>
<br /> 

Street Address:<br />
<input type="text" size="35" name="address" value="<?php echo $address;?>"><br />
<span class="error"> <?php echo $addressErr;?></span>
<br />

Postcode:<br />
<input type="text" name="postcode" value="<?php echo $postcode;?>"><br />
<span class="error"> <?php echo $postcodeErr;?></span>
<br />

City:<br />
<input type="text" name="city" value="<?php echo $city;?>"><br />
<span class="error"> <?php echo $cityErr;?></span>
<br />

State:<br />
<select name="state">
  <option value="<?php echo $state; ?>"><?php echo $state; ?></option>
  <option disabled>-Select-</option>
  <option value="Johor">Johor</option>
  <option value="Kedah">Kedah</option>
  <option value="Kelantan">Kelantan</option>
  <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
  <option value="Melaka">Melaka</option>
  <option value="Negeri Sembilan">Negeri Sembilan</option>
  <option value="Pahang">Pahang</option>
  <option value="Perak">Perak</option>
  <option value="Perlis">Perlis</option>
  <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
  <option value="Pulau Pinang">Pulau Pinang</option>
  <option value="Sabah">Sabah</option>
  <option value="Sarawak">Sarawak</option>
  <option value="Selangor">Selangor</option>
  <option value="Terengganu">Terengganu</option>
  <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
</select>
<br />
<br />

Residing Location Address:<br />
<input type="text" name="residing" value="<?php echo $residing;?>"><br />
<span class="error"> <?php echo $residingErr;?></span><br />
<br />

<div align="center">
<button class="w3-button w3-white" name="submit" value="Save">Save</button>
</div>
</form>
</td>
</tr>
</table>
</div>

 

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<?php require('includes/footer.php');?>