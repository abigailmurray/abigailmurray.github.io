<!DOCTYPE HTML>
<html>
<head>

<style>
.error {color: #FF0000;}
</style>
</head>
<body>
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

<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h3>How visually creative are you? Would you like to design software, websites or mobile apps?</h3>
  <input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="Yes, I am quite creative") echo "checked";?> value="cs">Yes, I am quite creative
  <input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="No, I am not as creative") echo "checked";?> value="it">No, I am not as creative
  <span class="error"><?php echo $choiceErr;?></span>
  <br><br>

  <h3>Would you rather design or develop software programs?</h3>
  <input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Design programs") echo "checked";?> value="it">Design programs
  <input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Develop programs") echo "checked";?> value="cs">Develop programs
  <span class="error"><?php echo $choiceErr2;?></span>
  <br><br>

  <h3>Do you prefer to work independently on a project or with others often outside your department to help them solve technological problems?</h3>
  <input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="Yes, I prefer to work independently") echo "checked";?> value="cs">Yes, I prefer to work independently
  <input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="No, I like to work with others, including those outside my department") echo "checked";?> value="it">No, I like to work with others, including those outside my department
  <span class="error"><?php echo $choiceErr3;?></span>
  <br><br>

  <h3>Do you enjoy hands-on work more than desk work?</h3>
  <input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="Yes, I like hands-on work better") echo "checked";?> value="it">Yes, I like hands-on work better
  <input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="No, I like desk work better") echo "checked";?> value="cs">No, I like desk work better
  <span class="error"><?php echo $choiceErr4;?></span>
  <br><br>

  <h3>Are you interested in both working on hardware and software (or just primarily software)?</h3>
  <input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="Yes, both hardware and software") echo "checked";?> value="it">Yes, both hardware and software
  <input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="No, primarily software") echo "checked";?> value="cs">No, primarily software
  <span class="error"><?php echo $choiceErr5;?></span>
  <br><br>

  <h3>Do you enjoy directly assisting users?\nIf you have had previous customer service experience, did you find you had the skills necessary to adequately interact with a customer?</h3>
  <input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="Yes, I enjoy/excel at assisting users") echo "checked";?> value="it">Yes, I enjoy/excel at assisting users
  <input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="No, I prefer not to interact with users") echo "checked";?> value="cs">No, I prefer not to interact with users
  <span class="error"><?php echo $choiceErr6;?></span>
  <br><br>

  <h3>Are you interested in/willing to learn about complex algorithms? </h3>
  <input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="Yes") echo "checked";?> value="cs">Yes
  <input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="No") echo "checked";?> value="it">No
  <span class="error"><?php echo $choiceErr7;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">

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
      echo 'Please select an answer for question 4.';
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
    echo '<a href="https://cislinux.hfcc.edu/~amurray12/computerScience.php">Click here to learn more about computer science</a>';
    echo "</br>";
  }if($max==$it){
    echo "Information Technology ";
    echo '<a href="https://cislinux.hfcc.edu/~amurray12/informationTechnology.php">Click here to learn more about IT</a>';
    echo "</br>";
  }
}
?>

</body>
</html>
