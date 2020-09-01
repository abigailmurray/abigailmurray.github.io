<!DOCTYPE html>
<html>
<head>
<title> Job Descriptions </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Jobs Page">
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
    margin:0px;
    margin-left:auto;
    margin-right:auto;
    float: none;
    color: black;
}
table.d {
  font-family: 'Nunito', sans-serif;
  border-collapse: collapse;
  table-layout: fixed;
  margin-left:auto;
  margin-right:auto;
}

.twenty {
  width: 30%;
}

.seventy {
  width: 70%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  width: 20%;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:nth-child(odd) {
  /* background-color: #beeaf1; */
    background-color: #dcdcdc;
}
tr:hover {
    background-color: #b3e6ff;
}
tr:first-child:hover {
    background-color: #b3e6ff;
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
    padding: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: center;
}
a {
  color: #000000;
}
a:visited {
  color: #000000;
}
a:hover, a:active, a:focus {
  color:#0000ff;
}



.sticky {
    position: fixed;
    width:100%;
    top: 0;
    left:0;
    padding:0;
    right:0;
    color: #1a3ca2;
    /* width: calc(90% - 10px);
    margin-left:auto;
    margin-right:auto; */ */ */
}

.sticky + .content {
    /* padding-top: 100px; */
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
<h2 id="opening">Jobs Page</h2>

<table class="d">

<h3>Information Technology</h3>

<colgroup>
    <col class="thirty" />
    <col class="seventy" />
</colgroup>

<tr>
    <td><a href="penetrationTester.php" style="text-decoration:none"><b>Penetration Tester</b>&nbsp;</a></td>
    <td>A penetration tester, often known as an ethical hacker, attempts to break into a company's computer systems or software to find possible exploits and warn the company about them to help protect the company.<sup><a href="worksCited.php" style="text-decoration:none">14&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Systems Security Analyst</th>
    <td>Systems security analysts oversee the computer network systems and protect them from future breaches, often through educating users how to use new software and making sure software and security is up to date.<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Computer Network Architect</th>
    <td>Computer network architects design and build data communication networks. They can build local networks (LANs), which provide connections between or within buildings, wide area networks (WANs), or intranets.<sup><a href="worksCited.php" style="text-decoration:none">4&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Network and Computer Systems Administrator</th>
    <td>Network and computer systems administrators are responsible for the day-to day upkeep of networks and systems, inlcuding updating, organizing, and installing systems.<sup><a href="worksCited.php" style="text-decoration:none">13&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Database Administrator</th>
    <td>Database administrators provide access to databases to companies and the government. They also orgainize sensitive information while maintaining information security and privacy settings.<sup><a href="worksCited.php" style="text-decoration:none">7&nbsp;</a></sup></td>
    <!-- <td>SQL</td>
    <td>industries</td> -->
</tr>


<tr>
    <th>Computer Hardware Engineer</th>
    <td>Computer hardware engineers create the physical parts that allow computers to be built and run. They may have to create or update hardware that works with new software and manage how computers are manufactured. <sup><a href="worksCited.php" style="text-decoration:none">17&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>
</table>
<table class="d">

    <h3>Business and Computer Science</h3>

<colgroup>
    <col class="thirty" />
    <col class="seventy" />
</colgroup>

<tr>
    <th>Business Continuity Analyst</th>
    <td>Business Continuity Analysts prepare companies for emergencies or disasters which could disrupt the business's operations by developing plans. They often make sure data is backed up and need information security knowledge.<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>  </td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Business Analyst</th>
    <td>Business analysts are able to understand business but also resolve conflicts of interest. They are able to translate the wishes of a client or business to the technical team and programmers.<sup><a href="worksCited.php" style="text-decoration:none">12&nbsp;</a></sup></td>
    <!-- <td>C</td>
    <td>industries</td> -->
</tr>


<tr>
    <th>IT Auditor</th>
    <td>IT auditors examine data from databases, software programs and report problems and develop ways to improve internal processes.<sup><a href="worksCited.php" style="text-decoration:none">19&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Computer Systems Analyst</th>
    <td>Computer systems analysts study a company's current computer systems to assess how the company can operate more efficiently.<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>
</table>
<table class="d">

    <h3>Theoretical Computer Science</h3>

    <colgroup>
        <col class="thirty" />
        <col class="seventy" />
    </colgroup>

<tr>
    <th>Computer and Information Research Scientists</th>
    <td>Computer and information research scientists create new ways to utilize technology and find new uses for technology that already exists.<sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>
</table>
<table class="d">

    <h3>Data Science</h3>

<colgroup>
    <col class="thirty" />
    <col class="seventy" />
</colgroup>

<tr>
    <th>Data Scientist</th>
    <td>Data scientists have a strong foundation in computer science, statistical modelling, and machine learning and often communicate to both IT leaders and business stakeholders the findings of the data.<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Data Analyst</th>
    <td>Data analysts often solve the problems of a business and apply statistical analysis to do so.<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Data Engineer</th>
    <td>Data engineers integrate data from various sources and write complex queries to optimize the performance of the company's big data system. They prepare the infrastructure that houses the big data to be analyzed by data scientists.<sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup></td>
    <!-- <td>Ruby, Swift</td>
    <td>industries</td> -->
</tr>
</table>
<table class="d">

    <h3>Software-Related</h3>
<colgroup>
    <col class="thirty" />
    <col class="seventy" />
</colgroup>
<tr>
    <th>Computer Programmer</th>
    <td>Computer programmers create the code for software applications. Programmers write code that converts a software engineer's design into instructions for a computer to follow.<sup><a href="worksCited.php" style="text-decoration:none">5&nbsp;</a></sup></td>
    <!-- <td>Python, Swift</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Software Engineer</th>
    <td>Software engineers apply engineering principles to develop programs and use mathematical models to connect the needs of a client with applicable technology solutions.<sup><a href="worksCited.php" style="text-decoration:none">16&nbsp;</a></sup></td>
    <!-- <td>Python, Java, Ruby, HTML, JavaScript, C, C++, C#, PHP, Objective-C</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Software Developer</th>
    <td>Software developers design programs and collaborate with a client to understand what the client would like to have, then work with programmers to code the application.<sup><a href="worksCited.php" style="text-decoration:none">10&nbsp;</a></sup> </td>
    <!-- <td>Java, Ruby, C, C++, C#, PHP, SQL, Swift, Objective-C  </td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Back-End Developer</th>
    <td>Back-end developers are "server-side" and work "behind the scenes" to build an infrastructure that allows the website or application to manage data and content.<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup> </td>
    <!-- <td>Python</td>
    <td>industries</td> -->
</tr>


<tr>
    <th>Front-End Developer</th>
    <td>Front end developers are "client-side" and use their artistic skills to design the part of the application that the user actually sees (typography, colors, layouts).<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup> </td>
    <!-- <td>HTML, JavaScript, </td>
    <td>industries</td> -->
</tr>


<tr>
    <th>Full Stack Developer</th>
    <td>A full-stack developer has both the skills of front-end and back-end developers and are able to help by working on any part of a website if needed. <sup><a href="worksCited.php" style="text-decoration:none">15</sup</td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>UI/UX Designer</th>
    <td>A UI designer, or user interface designer, focuses on the graphical interface and are concerned with aesthetics and making sure the interface is visually attractive. A UX, or user interaction designer, works with how easy or hard it is for users to interact with elements created by the UI designers.<sup><a href="worksCited.php" style="text-decoration:none">20&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>

<tr>
    <th>Mobile App Developer</th>
    <td>An app developer is a software engineer whose primary goal is to produce and test apps for computers, phones, or other devices.<sup><a href="worksCited.php" style="text-decoration:none">18&nbsp;</a></sup></td>
    <!-- <td>skills</td>
    <td>industries</td> -->
</tr>
</table>
<br></br>

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

<a href="#opening">Back to top.</a>

<?php include 'footer.php';?>

<br></br>


</body>
</html>
