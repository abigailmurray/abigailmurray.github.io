<!DOCTYPE html>
<html>
<head>
<title> Home Page </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Home Page">
<style>
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
  font-family: 'Noto Serif', serif;
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


</style>
</head>
<body>


<?php include "header.php"?>

<div class="navigation">
<section>

<a href="index.php" target="_blank"><img src="home1.png" hspace="10"></a>
<a href="realFirstRound.php" target="_blank"><img src="quiz1.png" hspace="10"></a>
<a href="JobsPage.php" target="_blank"><img src="jobs1.png" hspace="10"></a>
<a href="industriesPage.php" target="_blank"><img src="industries1.png" hspace="10"></a>
<a href="skillsPage.php" target="_blank"><img src="skills1.png" hspace="10"></a>

</section>
</div>

<h2 id="opening">Home Page</h2>

<table class="d">

<h3>Purpose of Project</h3>
<p>This website exists to help prospective students better understand the main branches of computer science (CS) and information techology (IT), as well as provide them with some of the main careers in computer science. The website covers many different areas of careers in computer science, such as cyber security, data science, networks, and software, and in addition includes connected careers to other industries such as business, with careers such as business analyst or business continuity analyst.</p>

<br></br>
<br></br>

<?php include 'footer.php';?>



</body>
</html>
