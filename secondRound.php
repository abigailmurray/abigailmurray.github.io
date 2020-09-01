<!DOCTYPE HTML>
<html>
<head>
<title> Quiz </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Quiz Page 2">
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
  color: white;

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
a {
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
    padding-left: 30px;
    margin-bottom: 0px;
    padding-top: 3px;
    cursor: pointer;
    font-size: 16px;
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
    border-radius: 0px;
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
    background: #0e6647d;
}
.control input:disabled ~ .control_indicator {
    background: #a9a9a9;
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
.control-checkbox .control_indicator:after {
    left: 8px;
    top: 4px;
    width: 3px;
    height: 8px;
    border: solid #ffffff;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
.control-checkbox input:disabled ~ .control_indicator:after {
    border-color: #7b7b7b;
}
.control-checkbox .control_indicator::before {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 4.5rem;
    height: 4.5rem;
    margin-left: -1.3rem;
    margin-top: -1.3rem;
    background: #2aa1c0;
    border-radius: 3rem;
    opacity: 0.6;
    z-index: 99999;
    transform: scale(0);
}
@keyframes s-ripple {
    0% {
        transform: scale(0);
    }
    20% {
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1);
    }
}
@keyframes s-ripple-dup {
   0% {
       transform: scale(0);
    }
   30% {
        transform: scale(1);
    }
    60% {
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(1);
    }
}
.control-checkbox input + .control_indicator::before {
    animation: s-ripple 250ms ease-out;
}
.control-checkbox input:checked + .control_indicator::before {
    animation-name: s-ripple-dup;
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
<body>

<?php
// define variables and set to empty values
$totalCount = 0;
$cyber = 0;
$database = 0;
$business = 0;
$engineering = 0;
$networks = 0;


//not sure if below is working...
  if (empty($_POST["q1[]"||"q2[]"||"q3[]"||"q4[]"])){
    $choiceErr = "Answer is required";
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Second Round - IT</h2>

<div class="control-group">

<form action="#" method="post">
<h3>If you had to resolve some sort of conflict (data breach, outside threats attacking company, etc), what would you do to ensure the safety of the company's information?</h3>
      <label class="control control-checkbox"><input type="checkbox" name="q1[]" value="cyber" unchecked><label>Protect the company from outside threats (such as viruses or DDOS (distributed denial of service) attacks) or from internal threats (such as employees leaking information)</label><div class="control_indicator"></div>
      </label><br/>
      <label class="control control-checkbox"><input type="checkbox" name="q1[]" value="database" unchecked><label>Make sure that the data is properly backed up and develop processes to implement data recovery protocols quickly if needed</label><div class="control_indicator"></div>
      </label><br/>
      <label class="control control-checkbox"><input type="checkbox" name="q1[]" value="networks" unchecked><label>Work with troubleshooting performance related issues such as malfunctions of network hardware and software</label><div class="control_indicator"></div>
      </label><br/>
      <label class="control control-checkbox"><input type="checkbox" name="q1[]" value="business" unchecked><label>Work with clients on the implementation of new or improved computer systems</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q1[]" value="engineering" unchecked><label>Ensure that the computer hardware works properly with the latest software technology</label><div class="control_indicator"></div>
      </label></br>

<h3>You are someone who (choose two most applicable):</h3>
      <label class="control control-checkbox"><input type="checkbox" name="q2[]" value="networks" unchecked><label>Is humble and can see the big picture, able to recognize that your role in IT is important yet serves the greater purpose of maintaining a business</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q2[]" value="cyber" unchecked><label>Wants to help protect others, but is modest and does not like to be in the spotlight</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q2[]" value="engineering" unchecked><label>Is realistic, likes solving hands-on problems and also enjoys searching for facts and working with data</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q2[]" value="database" unchecked><label>Is positive in the face of a crisis, is proactive, and is skeptical</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q2[]" value="business" unchecked><label>Can manage conflict with other people relatively well, is engaging, and has had experience working in multiple disciplines</label><div class="control_indicator"></div>
      </label></br>

<h3>What would you rather do on a daily basis?</h3>
      <label class="control control-checkbox"><input type="checkbox" name="q3[]" value="database" unchecked><label>Audit/identify which users are accessing, inserting, updating, or deleting data, and when, maintaining documentation, or installing/configuring new hardware</label><div class="control_indicator"></div>
      </label></br>

      <label class="control control-checkbox"><input type="checkbox" name="q3[]" value="cyber" unchecked><label>Stay informed of the latest international security news via every medium, not following a traditional 9 to 5, pattern of daily events constantly differs, working through the night</label><div class="control_indicator"></div>
      </label></br>

      <label class="control control-checkbox"><input type="checkbox" name="q3[]" value="engineering" unchecked><label>Work in a lab studying existing hardware in order to detect flaws and inconsistencies and pinpoint areas of improvement</label><div class="control_indicator"></div>
      </label></br>

      <label class="control control-checkbox"><input type="checkbox" name="q3[]" value="business" unchecked><label>Troubleshooting performance issues and maintaining the infrastructure of a network</label><div class="control_indicator"></div>
      </label></br>

      <label class="control control-checkbox"><input type="checkbox" name="q3[]" value="networks" unchecked><label>Can manage conflict with other people relatively well, is engaging, and has had experience working in multiple disciplines</label><div class="control_indicator"></div>
      </label></br>

<h3>When it comes to working with other people, you...</h3>
      <label class="control control-checkbox"><input type="checkbox" name="q4[]" value="networks" unchecked><label>Are personable and able to collaborate with staff at each level of the organization</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q4[]" value="cyber" unchecked><label>Are very sensitive to the needs of others and want to help/protect other people (may not necessarily be "individual users" than the company as a whole)</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q4[]" value="business" unchecked><label>Can critically analyze arguments from several different angles and negotiate between groups of people with different views</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q4[]" value="database" unchecked><label>Like to help people, but focused on making sure users are able to easily find information and identify user needs</label><div class="control_indicator"></div>
      </label></br>
      <label class="control control-checkbox"><input type="checkbox" name="q4[]" value="engineering" unchecked><label>Would like to mostly collaborate with those in similar jobs (such as programmers or software engineers)</label><div class="control_indicator"></div>
      </label></br>

<?php echo "</br></br>";?>
<input type="submit" class="myButton" name="submit" value="Submit">
<?php echo "</br></br>";?>
</form>
</div>

<?php
if(isset($_POST["submit"])){
  if (!empty($_POST["q1"])) {
      foreach($_POST["q1"] as $q1){
              if($q1=='cyber'){
                $cyber++;
              }if($q1=='database'){
                $database++;
              }if($q1=='business'){
                $business++;
              }if($q1=='engineering'){
                $engineering++;
              }if($q1=='networks'){
                $networks++;
              }
          //echo '<p>'.$q1.'</p>';
      }
  }
  else{
      echo 'Please select an answer for question 1.';
        echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["q2"])) {
      foreach($_POST["q2"] as $q2){
              if($q2=='cyber'){
                $cyber++;
              }if($q2=='database'){
                $database++;
              }if($q2=='business'){
                $business++;
              }if($q2=='engineering'){
                $engineering++;
              }if($q2=='networks'){
                $networks++;
              }
          //echo '<p>'.$q2.'</p>';
      }
  }
  else{
      echo 'Please select an answer for question 2.';
        echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["q3"])) {
      foreach($_POST["q3"] as $q3){
          //echo '<p>'.$q3.'</p>';
              if($q3=='cyber'){
                $cyber++;
              }if($q3=='database'){
                $database++;
              }if($q3=='business'){
                $business++;
              }if($q3=='engineering'){
                $engineering++;
              }if($q3=='networks'){
                $networks++;
              }
      }
  }
  else{
      echo 'Please select an answer for question 3.';
        echo "</br>";
  }
}

if(isset($_POST["submit"])){
  if (!empty($_POST["q4"])) {
      foreach($_POST["q4"] as $q4){
          //echo '<p>'.$q4.'</p>';
              if($q4=='cyber'){
                $cyber++;
              }if($q4=='database'){
                $database++;
              }if($q4=='business'){
                $business++;
              }if($q4=='engineering'){
                $engineering++;
              }if($q4=='networks'){
                $networks++;
              }
      }
  }
  else{
      echo 'Please select at least an answer for question 4.';
        echo "</br>";
  }
}
if(isset($_POST["submit"])){
  echo "Totals: "; echo "</br>";
  echo "Business and Computer Science: "; echo $business; echo "</br>";
  echo "Computer Engineering: "; echo $engineering; echo "</br>";
  echo "Cyber Security: "; echo $cyber; echo "</br>";
  echo "Database Administration: "; echo $database; echo "</br>";
  echo "Computer Networks: "; echo $networks;

  echo "</br></br>";
  echo "Max Count: ";
  $max = max($business,$engineering,$cyber,$database,$networks);

  if($max==$business){
    echo "Business and Computer Science  ";
    // echo '<a href="https://cislinux.hfcc.edu/~amurray12/busComp.php">Click here</a>';
    echo "</br>";
  }if($max==$engineering){
    echo "Computer Engineering  ";
    // echo '<a href="https://cislinux.hfcc.edu/~amurray12/compEngineering.php">Click here</a>';
    echo "</br>";
  }if($max==$cyber){
    echo "Cyber Security  ";
    //echo at top

    echo '<a href="https://cislinux.hfcc.edu/~amurray12/penetrationTester.php">Click here to learn more about Penetration Tester career</a>';
    echo "</br>";
  }if($max==$database){
    echo "Database Administration  ";
    // echo '<a href="https://cislinux.hfcc.edu/~amurray12/dataOutput.php">Click here</a>';
    echo "</br>";
  }if($max==$networks){
    echo "Computer Networks  ";
    // echo '<a href="https://cislinux.hfcc.edu/~amurray12/networksOutput.php">Click here</a>';
    echo "</br>";
}
}
?>
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
<?php include 'footer.php';?>
</body>
</html>
