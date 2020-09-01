<!DOCTYPE HTML>
<html>
<head>
<title> Quiz </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Quiz Page 1">
<style>
.header {
  background: #555;
  color: #1a3ca2;
  width:100%;
}
body{
    background-color: #0C0032;
    text-align: left;
    font-family: 'Nunito', sans-serif;
      font-weight: normal;
      width: calc(90% - 10px);
      margin: 25px;
      margin-left:auto;
      margin-right:auto;
      float: none;
      color: #DBDBDB;
}
table.d {
    background-color: white;
    color: black;
    font-family: 'Nunito', sans-serif;
  border-collapse: collapse;
  table-layout: fixed;
  margin-left:auto;
  margin-right:auto;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  width: 20%;
}

tr:nth-child(even) {
  background-color: #b9f4f2;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
}
tr:hover {
  background-color: #4DADD9;
}
tr:first-child:hover {
    background-color: #4DADD9;
}
h2{
  background-color: #4DADD9;
  font-family: 'Noto Serif', serif;
  color: white;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  font-weight: normal;
}
h3{
  background-color:  #0C0032;
  font-family: 'Nunito', sans-serif;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  font-weight: normal;
      color: #DBDBDB;
}
h4{
  background-color:  #0C0032;
  font-family: 'Nunito', sans-serif;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  font-weight: normal;
}

.navigation{
    background-color: #0C0032;
  padding: 15px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
}
a{
  color: #16DBD6;
}
a:visited {
  color: #636;
}
a:hover, a:active, a:focus {
  color:#c33;
}
.control {
    font-family: arial;
    display: block;
    position: relative;
    padding-left: 29px;
    margin-bottom: 5px;
    padding-top: 3px;
    cursor: pointer;
    font-size: 16px;
      color: #DBDBDB;
}
    .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }
.control_indicator {
    position: absolute;
    top: 2px;
    left: 0;
    height: 20px;
    width: 20px;
    background: #a9a9a9;
    border: 0px solid #000000;
    border-radius: undefinedpx;
}
.control:hover input ~ .control_indicator,
.control input:focus ~ .control_indicator {
    background: #cccccc;
}

.control input:checked ~ .control_indicator {
    background: #2aa1c0;
}
.control:hover input:not([disabled]):checked ~ .control_indicator,
.control input:checked:focus ~ .control_indicator {
    background: ;
}
.control input:disabled ~ .control_indicator {
    background: #e6e6e6;
    opacity: 0.6;
    pointer-events: none;
}
.control_indicator:after {
    box-sizing: unset;
    content: '';
    position: absolute;
    display: none;
}
.control input:checked ~ .control_indicator:after {
    display: block;
}
.control-radio .control_indicator {
    border-radius: 50%;
}

.control-radio .control_indicator:after {
    left: 7px;
    top: 7px;
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background: #ffffff;
    transition: background 250ms;
}
.control-radio input:disabled ~ .control_indicator:after {
    background: #7b7b7b;
}
.myButton {
	box-shadow: 0px 1px 0px 0px #f0f7fa;
	background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
	background-color:#33bdef;
	border-radius:6px;
	border:1px solid #057fd0;
	display:inline-block;
	cursor:pointer;
	color:white;
	font-family:Trebuchet MS;
	font-size:17px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #5b6178;
}
.myButton:hover {
	background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
	background-color:#019ad2;
}
.myButton:active {
	position:relative;
	top:1px;
}
.sticky {
   position: fixed;
   width:100%;
    top: 0;
    left:0;
    padding:0;
    right:0;
      color: #1a3ca2;
      z-index: 1;

      /* width: calc(90% - 10px);
      margin-left:auto;
      margin-right:auto; */ */ */
}

.sticky + .content {
  /* padding-top: 100px; */
  z-index: 1;
}

</style>
</head>

<body>

<?php include "header.php"?>
<div class="header" id="myHeader">
<div class="navigation">

<section>

<a href="index.php" target="_blank"><img src="home1.png" hspace="10"></a>
<a href="realFirstRound.php" target="_blank"><img src="quiz1.png" hspace="10"></a>
<a href="JobsPage.php" target="_blank"><img src="jobs1.png" hspace="10"></a>
<a href="industriesPage.php" target="_blank"><img src="industries1.png" hspace="10"></a>
<a href="skillsPage.php" target="_blank"><img src="skills1.png" hspace="10"></a>

</section>
</div>
</div>

<table class="d">
<?php
// define variables and set to empty values
$choiceErr = "";
$choiceErr2 = "";
$choiceErr3 = "";
$choiceErr4 = "";
$choiceErr5 = "";
$choiceErr6 = "";
$choiceErr7 = "";
$choice = "";
$choice2 = "";
$choice3 = "";
$choice4 = "";
$choice5 = "";
$choice6 = "";
$choice7 = "";
$cs=0;
$it=0;
?>

<h2>First Round - Computer Science vs IT</h2>
<div class="control-group">
<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <h3>1. How visually creative are you? Would you like to design software, websites or mobile apps?</h3>

      <label class="control control-radio"><input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="Yes, I am quite creative") echo "checked";?> value="cs">Yes, I am quite creative<div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="No, I am not as creative") echo "checked";?> value="it">No, I am not as creative<div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr;?></span>

  <h3>2. Would you rather design or develop software programs?</h3>

      <label class="control control-radio"><input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Design programs") echo "checked";?> value="it">Design programs
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Develop programs") echo "checked";?> value="cs">Develop programs
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr2;?></span>

  <h3>3. Do you prefer to work independently on a project or with others often outside your department to help them solve technological problems?</h3>

      <label class="control control-radio"><input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="Yes, I prefer to work independently") echo "checked";?> value="cs">Yes, I prefer to work independently
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="No, I like to work with others, including those outside my department") echo "checked";?> value="it">No, I like to work with others, including those outside my department
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr3;?></span>

  <h3>4. Do you enjoy hands-on work more than desk work?</h3>

      <label class="control control-radio"><input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="Yes, I like hands-on work better") echo "checked";?> value="it">Yes, I like hands-on work better
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="No, I like desk work better") echo "checked";?> value="cs">No, I like desk work better
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr4;?></span>

  <h3>5. Are you interested in both working on hardware and software (or just primarily software)?</h3>
      <label class="control control-radio"><input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="Yes, both hardware and software") echo "checked";?> value="it">Yes, both hardware and software
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="No, primarily software") echo "checked";?> value="cs">No, primarily software
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr5;?></span>

  <h3>6. Do you enjoy directly assisting users? If you have had previous customer service experience, did you find you had the skills necessary to adequately interact with a customer?</h3>

      <label class="control control-radio"><input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="Yes, I enjoy/excel at assisting users") echo "checked";?> value="it">Yes, I enjoy/excel at assisting users
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="No, I prefer not to interact with users") echo "checked";?> value="cs">No, I prefer not to interact with users
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr6;?></span>

  <h3>7. Are you interested in/willing to learn about complex algorithms? </h3>

      <label class="control control-radio"><input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="Yes") echo "checked";?> value="cs">Yes
      <div class="control_indicator"></div>
      </label>

      <label class="control control-radio"><input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="No") echo "checked";?> value="it">No
      <div class="control_indicator"></div>
      </label>

      <span class="error"><?php echo $choiceErr7;?></span>
      <br><br>
</div>
  <!-- //<button type="submit"><img src="submit.png" border="0"/></button> -->
  <input type="submit" class="myButton" name="submit" value="Submit">
  <br></br>

</form>
<?php
if(isset($_POST["submit"])){
  if (!empty($_POST["choice"])) {
    $choice = $_POST["choice"];
              if($choice=='cs'){
                $cs++;
              }if($choice=='it'){
                $it++;
              }
  }
  else{
      echo 'Please select an answer for question 1.';
          echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["choice2"])) {
    $choice2 = $_POST["choice2"];
              if($choice2=='cs'){
                $cs++;
              }if($choice2=='it'){
                $it++;
              }

  }
  else{
      echo 'Please select an answer for question 2.';
          echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["choice3"])) {
    $choice3 = $_POST["choice3"];
              if($choice3=='cs'){
                $cs++;
              }if($choice3=='it'){
                $it++;
              }

  }
  else{
      echo 'Please select an answer for question 3.';
          echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["choice4"])) {
    $choice4 = $_POST["choice4"];
              if($choice4=='cs'){
                $cs++;
              }if($choice4=='it'){
                $it++;
              }
  }
  else{
      echo 'Please select an answer for question 4.';
          echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["choice5"])) {
    $choice5 = $_POST["choice5"];
              if($choice5=='cs'){
                $cs++;
              }if($choice5=='it'){
                $it++;
              }
      }
      else{
      echo 'Please select an answer for question 5.';
          echo "</br>";
    }
  }


?>
<?php
if(isset($_POST["submit"])){
  echo "Totals: "; echo "</br>";
  echo "Computer Science: "; echo $cs; echo "</br>";
  echo "Information Technology: "; echo $it; echo "</br>";

  echo "</br></br>";
  echo "Max Count: ";
  $max = max($cs,$it);

  if($max==$cs){
    echo "Computer Science ";
    // echo '<a href="https://cislinux.hfcc.edu/~amurray12/computerScience.php">Click here to learn more about computer science</a>';
    echo "</br>";
  }if($max==$it){
    echo "Information Technology ";
    echo '<a href="https://cislinux.hfcc.edu/~amurray12/secondRound.php">Click here for next round.</a>';
    //echo '<a href="https://cislinux.hfcc.edu/~amurray12/informationTechnology.php">Click here to learn more about IT</a>';
    echo "</br>";
  }
}
?>


</table>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>

</html>
