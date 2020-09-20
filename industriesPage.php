<!DOCTYPE html>
<html>
<head>
<title> Industries Page </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Industries Page">
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
font-family: 'Noto Serif', serif;
  padding-top: 8px;
  padding-bottom: 4px;
  text-align: left;
  font-weight: normal;
  color: white;
    color: #16DBD6;

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
  color: white;
}
a:visited {
  color: white;
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
hr{
  height:1px;
  background-color: #16DBD6;
  padding:0;
  border-color: #16DBD6;
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

<h2 id="opening">Industries Page</h2>

<h4>Because computer science is a highly technical field, employers who do not understand computer science may not exactly grasp how their employees are supposed to achieve goals or may come up with ideas for a project that are not feasible to code. Due to this, it may be difficult to navigate the job field.

<h3>Common Industries for Computer Science-related Jobs</h3><hr>
<p>Some of the most common employers are IT consultancies and service providers, but practically every industry uses computer science.<sup><a href="worksCited.php" style="text-decoration:none">7&nbsp;</a></sup></p>
<p>List of Common Industries:</p>
  <li>Aerospace and Defense</li>
  <li>Agricultural</li>
  <li>Financial Services</li>
  <li>Healthcare</li>
  <li>Retail</li>
  <li>Telecommunications</li>

<h3>Aerospace and Defense</h3><hr>
      <p>NASA Jobs - NASA employs over 18,000 people across America in 10 NASA centers, and "almost all the jobs at NASA require a computer science background". NASA states that "60 percent of their jobs fall within the engineering and scientific fields, which includes biology and meterology, both fields that rely heavily on computer science".<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup></p>
      <p>Aerospace Operations Technicians - Aerospace Operations Technicians work on operating and repairing aircraft by performing "highly complex calibrations and tests". They utilize computer science as they "use advanced software programs to run computer simulations to test out new designs". Most who work in this job spend most of their time in private labs or manufacturing facilities.<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup></p>
      <p>Aerospace Engineers - The primary function of aerospace engineers is to "design, manufacture, and test aircraft and aerospace parts and products". They often create or work on satellites, missiles, or spacecraft and "oversee every stage of the production process", but usually specialize in a special area. They may "evaulate designs for engineering safety, redesign a part per the customer specifications, or even troubleshoot malfunctioning parts to identify quality improvement opportunities"<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup>. Many aerospace engineers work for private manufacturers or national defense companies, although of course some work for NASA.</p>
      <p>Less specifically, there are jobs in the military in the field of aerospace that use computer science concepts, such as "working with GPS, homing and missile guidance systems, or satellites broadcasting secret military information"<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup>.</p>
<h3>Agricultural</h3><hr>
      <p>Computer science can be useful in the agricultural industry, as "computer science can help cultivate the food, fuels and fibres of the future through smart agriculture"<sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup>. As the Earth's population continues to increase to the prospected population of 8.5 billion by 2030, there is an emerging need to provide food for humans around the world. Dr. David Lamb, a professor of physics and precision agriculture at the University of New England, runs a SMART Farm project. He states that as more people begin learning to code and as technology becomes easier to operate, there wil be "a revolution in agriculture"<sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup>. Others are also pairing computer science with agriculture, as a framer in Tasmania, James McShane, teamed up with a programmer to create "Farmware, a smartphone app that lets farmers record information such as livestock records, grazing and paddock usage, animal treatment records, crop performance and storage inventories<sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup>". There are also many opportunities to use computer science in an environmental science or research aspect. GIS, or Geographical Information System, is "a database tool to create, disseminate, store, update, analyze and predict space related information in a smart manner". GIS combines a "digital representation of landscapes captured by field research (GPS) with Remote Sensing, or orthophotograph and satellite images" alongside a "database environment capable of storing, checking, manipulating, enhancing, analyzing and displaying spatial data of the earth"<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>.
      </p>
<h3>Financial Services</h3><hr>
      <p>"Traditional financial institutions and fintech start-ups alike are looking for more candidates who specialize in artifical intelligence, machine learning and data science" according to CNBC. Well-known large companies are looking for workers with computer science expertise include JPMorgan Chase, Capital One, Morgan Stanley, and Goldman Sachs. In addition, "According to reporting by Bloomberg reporting and data from LinkedIn, job listings requiring these skills in the financial industry increased nearly 60% in the past year"<sup><a href="worksCited.php" style="text-decoration:none">4&nbsp;</a></sup>. Data engineers and machine learning engineers, along with software engineers, are some of the more common openings for financial institutions looking to fulfill AI/finance related roles. As machine learning is more widely used in the financial sector, there will be a need for "AI auditors" at banks, because "as machines make more decisions in banking, ethical and legal concerns will be raised that need to be addressed at the board level". Many may hear about the concern machine learning will render many financial jobs obsolete, however Bloomberg states that "machine learning may also provide an opportunity to reinvent a career" as some financial sector employees "who find themselved displaced by technology could be in a position to reskill"<sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup>.
      </p>
      <p>Students who already have had prior job experience in finance who are looking to major in computer science or learn about AI will have an advantage. CNBC states that "Their domain expertise in business and finance is a great way to differentiate themselves in a hot technical field"<sup><a href="worksCited.php" style="text-decoration:none">4&nbsp;</a></sup>.</p>
<h3>Healthcare</h3><hr>
      <p>Those who work in health informatics heavily utilize computer science to make information valuable to hospitals and for clinical studies. Those who work in the field gather information from patient data, healthcare databases, and genomics data to use through computer algorithms, modelling, and data mining.
      <p>There are several types of health informatics, including:</p>
      <li>Consumer health informatics: This field "examines patient information from points of view such as health literacy, consumer knowledge and education". It includes "any tool or system primarily responsible for interacting with health information users or consumers" or "any tool into which a patient inputs their health information and receives a body of health information"<sup><a href="worksCited.php" style="text-decoration:none">10&nbsp;</a></sup>. Comsumer health informatics relies on health IT applications which are built with patients in mind, allowing them to "share and sort information of a user". In addition, there are web-based applications and mobile platforms being built to make it convienient for users to access their data. Some of these systems help patients monitor conditions, such as blood pressure or blood glucose, while others use iT to store electronic personal health records.</li><br></br>
      <li>Public health informatics: Public health informatics is "the convergence of two separate disciplines - information and computer science technology and public health practice, research and learning"<sup><a href="worksCited.php" style="text-decoration:none">11&nbsp;</a></sup>. Public health informatics works on "information and technology issues from the perspective of groups of individuals". This means developing information systems wich are used for borad public health concerns, such as "outbreak management, bio-surveillance, disease prevention, and electronic labaratory reporting"<sup><a href="worksCited.php" style="text-decoration:none">11&nbsp;</a></sup>. This field is new and emerging, and in such a technologicall advanced world, public health informatics skills are "an absolute necessity". Public health informatics has led to the management of natural disasters, tropical diseases, Ebola, and mental health.</li><br></br>
      <li>Clinical informatics: Clinical informatics is "the study of information technology and how it can be applied to the healthcare field"<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup>, including "the study and practice of an information-based approach to healthcare delivery in which data must be structures in a certain way to be effectively retrieved and used for a report". All doctors, nurses, pharmacists, and dentists use and collect patient data to "implement a treatment plan for a patient"<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup>. This data is often used through state-of-the-art technological tools, which consists of apps, computers, tablets, and equipment, and must be stored and organized to provide treatment plans to patients.</li>
      <!--<li>Clinical research informatics: </li><br></br>
      <li>Translational bioinformatics: </li>-->
<h3>Retail</h3><hr>
      <p>Retail companies "are increasingly seeking to hire recent college graduates with computer science backgrounds"<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>. Although many graduates would prefer to find jobs in Silicon Valley, retailers are moving into "bold tech initiatives such as Target's Tech Incubator or Walmart Labs and their tech talent needs are beginning to rival those of Silicon Valley"<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>. The retail industry alone could hire almost fifteen percent of all computer science graduates in the next few years. A career in retail tech "could mean being at the forefront of advancements in everything from AI and voice recognition to visual search and autonomous vehicles", especially as "emerging technologies continue to transform the shopping experience<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>".</p>
<!--<h3>Telecommunications</h3>
  <p>
<p>Software engineers and computer programmers are especially in need in many of these industries.</p>
<p>Artifical intelligence: <p>-->
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



</body>
</html>
