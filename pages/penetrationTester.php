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
background-color: #dffaff;
font-family: 'Noto Serif', serif;
  padding-top: 8px;
  padding-bottom: 4px;
  text-align: left;
  font-weight: bold;
  color: #0C0032;

}
h4{
background-color: #dffaff;
    font-family: 'Nunito', sans-serif;
  padding-top: 8px;
  padding-bottom: 4px;
  text-align: left;
  font-weight: bold;

}

.navigation{
    background-color: #0C0032;
  padding: 15px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
}
.white{
background-color: #dffaff;
color: black;
padding: 10px;
padding-left: 20px;
padding-right: 20px;
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

hr{
  height:2px;
  background-color: #0C0032;
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

<h2 id="opening">Penetration Tester</h2>

<table class="d">

<div class="white">
<h3>Job Duties/Description</h3><hr>
<p>A penetration tester is a "type of network security consultant" that attempts to break into different types of computer systems or software. <sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup> Thus, typical job responsibilities would include "conducting formal tests on web-based applications, networks, and other types of computer systems on a regular basis." Likewise, the penetration tester would also need to routinely physically check and assess servers, computer systems, and networks. <sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup> In addition, penetration testers will often question employees of the company to attempt to extract information, also known as social engineering. <sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup></p>

<p>There are usually five phases of penetration testing, including the following:</p>
<li>Reconnaissance, which includes gathering information on the target</li>
<li>Scanning, or "identifying open ports and fingerprinting services running"</li>
<li>Gaining Access, or the actual actions taken to extract data from the target</li>
<li>Maintaining Access, or "using stealth to pivot onto other systems without detection"</li>
<li>Covering Tracks, or "making sure there is no residual data or logs left on the target"</li><sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup>

<p>These steps help ensure that an organization will be able to resist cyber attacks "by confirming identified vulnerabilities". <sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup></p>

<h3>Hard Skills</h3><hr>
<p>Penetration testers need to "learn as much as [they] can about operating systems, software, communications and network protocols"<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>. Employers tend to favor if an employee has the following skills.</p>
<li>Windows, UNIX and Linux operating systems</li>
<li>Network servers and networking tools (e.g. Nessus, nmap, Burp, etc.)</li>
<li>Computer hardware and software systems</li>
<li>Web-based applications</li>
<li>Security frameworks (e.g. ISO 27001/27002, NIST, HIPPA, SOX, etc.)</li>
<li>Security tools and products (Fortify, AppScan, etc.)</li>
<li>Vulnerability analysis and reverse engineering</li>
<li>Metasploit framework</li>
<li>Forensics tools</li>
<li>Cryptography principles</li>

<h3>Soft Skills</h3><hr>
<p>Penetration testers will regularly interact with others, especially because of social engineering. Thus, excellent public speaking skills are vital. Social engineering is "the art of manipulating people so they give up confidential information".<sup><a href="worksCited.php" style="text-decoration:none">5&nbsp;</a></sup> Often humans who "accept a person or scenario at face value" are perceived as "the weakest link in a security chain". Of course, penetration testers are using social engineering to identify weakenesses in an organization to help make it stronger, while criminals use social engineering to gain access to bank accounts, cause you to download a virus, or steal other personal information.</p>
<p>Penetration testers also need to be good writers, as they will spend much time writing reports and assessments. It is important that penetration testers are able to "communicate complex ideas in ways even non-technical people can understand" <sup><a href="worksCited.php" style="text-decoration:none">5&nbsp;</a></sup> These non-technical people will then use a penetration tester's report to make a decision whether the results justify "implementing migitating controls" or whether it is worth taking a risk and not implementing further controls to save money. <sup>1</sup></p>

<h3>Languages Needed</h3><hr>
<p>Those who would like to become penetration testers should learn the following languages to make themselves more marketable <sup><a href="worksCited.php" style="text-decoration:none">2,&nbsp;</a></sup><sup><a href="worksCited.php" style="text-decoration:none">4&nbsp;</a></sup>: Bash, C, C++, C#, Java, ASM, PHP, PERL, Python, and PowerShell.

<h3>Personality Type</h3><hr>
<p>Those who are often the best penetration testers are adaptable, meaning they think like a hacker and are able to change tactics, veering from their usual methods often in order to successfully hack into the system. They are often very detail-oriented, but are able to additionally think outside of the box to get the job done. <sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup></p>

<!-- <h3>Common Industries</h3><hr> -->
</div>
<br></br>
<a href="#opening">Back to top.</a>

<?php include 'footer.php';?>



</body>
</html>
