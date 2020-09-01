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

  if (empty($_POST["choice"])) {
    $choiceErr = "Answer is required";
  } else {
    $choice = test_input($_POST["choice"]);
  }

  if (empty($_POST["choice2"])) {
    $choiceErr2 = "Answer is required";
  } else {
    $choice2 = test_input($_POST["choice2"]);
  }

  if (empty($_POST["choice3"])) {
    $choiceErr3 = "Answer is required";
  } else {
    $choice3 = test_input($_POST["choice3"]);
  }

  if (empty($_POST["choice4"])) {
    $choiceErr4 = "Answer is required";
  } else {
    $choice4 = test_input($_POST["choice4"]);
  }

  if (empty($_POST["choice5"])) {
    $choiceErr5 = "Answer is required";
  } else {
    $choice5 = test_input($_POST["choice5"]);
  }

  if (empty($_POST["choice6"])) {
    $choiceErr6 = "Answer is required";
  } else {
    $choice6 = test_input($_POST["choice6"]);
  }

  if (empty($_POST["choice7"])) {
    $choiceErr7 = "Answer is required";
  } else {
    $choice7 = test_input($_POST["choice7"]);

  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>First Round - Computer Science vs IT</h2>

<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h3>How visually creative are you? Would you like to design software, websites or mobile apps?</h3>
  <input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="Yes, I am quite creative") echo "checked";?> value="Yes, I am quite creative">Yes, I am quite creative
  <input type="radio" name="choice" unchecked<?php if (isset($choice) && $choice=="No, I am not as creative") echo "checked";?> value="No, I am not as creative">No, I am not as creative
  <span class="error"><?php echo $choiceErr;?></span>
  <br><br>

  <h3>Would you rather design or develop software programs?</h3>
  <input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Design programs") echo "checked";?> value="Design programs">Design programs
  <input type="radio" name="choice2" unchecked<?php if (isset($choice2) && $choice2=="Develop programs") echo "checked";?> value="Develop programs">Develop programs
  <span class="error"><?php echo $choiceErr2;?></span>
  <br><br>

  <h3>Do you prefer to work independently on a project or with others often outside your department to help them solve technological problems?</h3>
  <input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="Yes, I prefer to work independently") echo "checked";?> value="Yes, I prefer to work independently">Yes, I prefer to work independently
  <input type="radio" name="choice3" unchecked<?php if (isset($choice3) && $choice3=="No, I like to work with others, including those outside my department") echo "checked";?> value="No, I like to work with others, including those outside my department">No, I like to work with others, including those outside my department
  <span class="error"><?php echo $choiceErr3;?></span>
  <br><br>

  <h3>Do you enjoy hands-on work more than desk work?</h3>
  <input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="Yes, I like hands-on work better") echo "checked";?> value="Yes, I like hands-on work better">Yes, I like hands-on work better
  <input type="radio" name="choice4" unchecked<?php if (isset($choice4) && $choice4=="No, I like desk work better") echo "checked";?> value="No, I like desk work better">No, I like desk work better
  <span class="error"><?php echo $choiceErr4;?></span>
  <br><br>

  <h3>Are you interested in both working on hardware and software (or just primarily software)?</h3>
  <input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="Yes, both hardware and software") echo "checked";?> value="Yes, both hardware and software">Yes, both hardware and software
  <input type="radio" name="choice5" unchecked<?php if (isset($choice5) && $choice5=="No, primarily software") echo "checked";?> value="No, primarily software">No, primarily software
  <span class="error"><?php echo $choiceErr5;?></span>
  <br><br>

  <h3>Do you enjoy directly assisting users?\nIf you have had previous customer service experience, did you find you had the skills necessary to adequately interact with a customer?</h3>
  <input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="Yes, I enjoy/excel at assisting users") echo "checked";?> value="Yes, I enjoy/excel at assisting users">Yes, I enjoy/excel at assisting users
  <input type="radio" name="choice6" unchecked<?php if (isset($choice6) && $choice6=="No, I prefer not to interact with users") echo "checked";?> value="No, I prefer not to interact with users">No, I prefer not to interact with users
  <span class="error"><?php echo $choiceErr6;?></span>
  <br><br>

  <h3>Are you interested in/willing to learn about complex algorithms? </h3>
  <input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="Yes") echo "checked";?> value="Yes">Yes
  <input type="radio" name="choice7" unchecked<?php if (isset($choice7) && $choice7=="No") echo "checked";?> value="No">No
  <span class="error"><?php echo $choiceErr7;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">

</form>



<?php
echo "<h2>Your Input:</h2>";
echo $choice;
echo "<br/>";
echo $choice2;
echo "<br/>";
echo $choice3;
echo "<br/>";
echo $choice4;
echo "<br/>";
echo $choice5;
echo "<br/>";
echo $choice6;
echo "<br/>";
echo $choice7;
?>

</body>
</html>
