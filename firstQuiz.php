<!DOCTYPE html>
<html>
<head>
<title> Quiz Page </title>
<meta name="description" content="Quiz Page">
<link rel="icon"; href="faviconBlue.ico"; type="image/png">
<style>
body{
    background-color: #0C0032;
    text-align: left;
    font-family: 'Noto Serif', serif;
}
table.d {
font-family: 'Nunito', sans-serif;
  border-collapse: collapse;
  table-layout: fixed;
  width: calc(90% - 10px);
  margin: 25px;
  margin-left:auto;
  margin-right:auto;
  float: none;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
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
  background-color: #3500D3;
font-family: 'Noto Serif', serif;
  color: white;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  font-weight: normal;
  width: calc(90% - 10px);
  margin: 25px;
  margin-left:auto;
  margin-right:auto;
  float: none;
}
h3{
  background-color:  #0C0032;
font-family: 'Noto Serif', serif;  color: white;
  padding-top: 20px;
  padding-bottom: 10px;
  text-align: left;
  font-weight: normal;
  width: calc(90% - 10px);
  margin: 25px;
  margin-left:auto;
  margin-right:auto;
  float: none;
}
.navigation{
  background-color: #4DADD9;
  padding: 15px;
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: center;
  font-weight:bold;
  width:50%;
  margin-left:auto;
  margin-right:auto;
}
</style>
</head>

<?php include "header.php"?>

<div class="navigation">
<section>

<a href="index.php" target="_blank"><img src="home1.png" hspace="10"></a>
<a href="firstQuiz.php" target="_blank"><img src="quiz1.png" hspace="10"></a>
<a href="JobsPage.php" target="_blank"><img src="jobs1.png" hspace="10"></a>
<a href="industriesPage.php" target="_blank"><img src="industries1.png" hspace="10"></a>
<a href="skillsPage.php" target="_blank"><img src="skills1.png" hspace="10"></a>

</section>
</div>

</head>

<?php include 'firstRoundCSIT.php';?>

<?php include 'footer.php';?>

</body>
</html>
