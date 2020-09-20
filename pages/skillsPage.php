<!DOCTYPE html>
<html>
<head>
<title> Skills Page </title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<meta name="description" content="Skills Page">
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
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  font-weight: normal;
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

<h2>Skills Page</h2>

<h3>Languages to Learn</h3><hr>
<p>A study analyzed over 3 million job postings for any candidates with computer science degrees.<sup><a href="worksCited.php" style="text-decoration:none">5&nbsp;</a></sup> They found employers most wanted them to have skill in these languages:
  <li>Java</li>
  <li>SQL</li>
  <li>JavaScript</li>
  <li>Python</li>

<h3>Java</h3><hr>
<p>Java is an object-oriented programming language and is widely used. Java has its own runtime environment (JRE) and API, so it is called a platform. It is designed to allow application developers "write once, run anywhere"<sup><a href="worksCited.php" style="text-decoration:none">7&nbsp;</a></sup> which means that "code that runs on one platform does not need to be recompiled to run on another". Java is used in building server-side "desktop applications, web applications, mobile applications, robotics, and games"<sup><a href="worksCited.php" style="text-decoration:none">7&nbsp;</a></sup>. It is easy to learn for programmers familiar with C or C++, and is more efficient - "a program written in Java can be four times smaller than the same program written in C++"<sup><a href="worksCited.php" style="text-decoration:none">7&nbsp;</a></sup>. It is easy to find help online while learning Java; as one of the most popular languages, there are many Java courses and guides to help you.</p>

<h3>SQL</h3><hr>
<p>SQL is a programming language used to "manage relational databases and perform various operations on the data in them"<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup>. SQL is used to retrieve information from data and modify database structures for "transaction processing and analytics operations"<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup>. SQL statements are often statements such as "select, add, insert, update, delete, create" and so forth. SQL queries use these words in code to "induce the computer to execute a certain operation that will deliver the desired output"<sup><a href="worksCited.php" style="text-decoration:none">9&nbsp;</a></sup>. In 2017 and 2018, SQL was ranked more popular amoung data scientists and data engineers than Python or R. <sup><a href="worksCited.php" style="text-decoration:none">12&nbsp;</a></sup> SQL is an "intuitive and easy-to-learn language" but its simplicity does not distract from its ability to be powerful while "computing very complex tasks"<sup><a href="worksCited.php" style="text-decoration:none">12&nbsp;</a></sup>.</p>
<p>NOSQL is "an upcoming category of Database Management Systems<sup><a href="worksCited.php" style="text-decoration:none">11&nbsp;</a></sup>" and grew with the rise of internet giants such as Google, Facebook, and Amazon who use massive amounts of data. In order to maintain quick response times when using databases to attain data, non-relational databases were created, which included NOSQL. NOSQL is used by "those who handle huge volumes of data" and are "designed with web applications in mind"<sup><a href="worksCited.php" style="text-decoration:none">11&nbsp;</a></sup>.</p>

<h3>JavaScript</h3><hr>
<p>JavaScript is a language used to "create and control dynamic website content<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup>". This definition contains anything that changes on a screen without an user manually reloading the webpage, and usually consists of "animated graphics, interactive forms, and photo slideshows<sup><a href="worksCited.php" style="text-decoration:none">8&nbsp;</a></sup>".JavaScript is a "scripting language", which means that it is used to automate processes rather than have the user manually reload the page or execute the code step-by-step. Google autocomplete, which uses JavaScript, is one example of how JavaScript's purpose can be understood. HTML, CSS, and JavaScript are considered the languages that are "the backbone of web development". JavaScript is mostly used for front-end development, developing mobile apps, creating online games, or adding "interactivity to websites", but occasionally it is used on back-end infrastructure as well.</p>
<p>Before learning JavaScript, one should learn HTML and CSS. HTML is fairly easy to learn, and is a markup language, which means that each piece of content in HTML is encased by HTML tags identifying what it is (such as a title, heading, or body)<sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup>. However, JavaScript is a programming language and not a markup language, which makes it harder to learn as it defines a "series of actions to be performed". However, to learn a markup language like HTML, one must learn nearly the entirety of the language to create a website (for example), however, using a programming language, one can make smaller programs knowing only a part of the language. For new coders, it can be hard as a first language as it is "hard to debug and it's difficult to learn some concepts such as asynchronism, prototype, objects and more"<sup><a href="worksCited.php" style="text-decoration:none">3&nbsp;</a></sup>.</p>

<h3>Python</h3><hr>
<p>According to Hired.com, Python is the most loved programming language with 51% of the questioned developers listing it as their most loved language<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>. In addtion, Stack Overflow found that Python ranked second for most loved language. The rise of Python can be connected to the rise of interest in data science, states Stack Overflow, which makes it "well positioned for the new tech wave of artificial intelligence"<sup><a href="worksCited.php" style="text-decoration:none">10&nbsp;</a></sup>. Python is commonly used for data science and machine learning, and is more versatile than existing languages R and SQL, due to the numerous libraries that can be imported to "make Python more useful for specific purposes". Business majors can also learn Python - many people today looking to gain programming experience are not considering becoming full-time developers, rather they are utilizing Python for data analysis, which is becoming an "increasingly important skill in the business world". However, Python cannot be used for front-end development.</p>

<h3>Which Languages to Start With?</h3><hr>
<p>The most important part of learning your first language is to understand the concepts of programming - input/output, for loops, while loops, functions, arrays, and conditionals (for example). These are "transferrable learnings from language to languages and are essential to any programming language"<sup><a href="worksCited.php" style="text-decoration:none">2&nbsp;</a></sup>. </p>
<p>For new coders, Python is an amazing language to start with. It is "simple, straightforward, and there's a wealth of established free and affordable resources that make it easy to get started"<sup><a href="worksCited.php" style="text-decoration:none">10&nbsp;</a></sup>. Those who worry about following complicated syntax rules will find Python easy; "its somewhat rigid syntax rules make for consistency" so two people completing the same task will likely have very similar code. Additionally, Python is easy to read even by those without any programming experience. Colleges and universities also recognize how imperative it is that their students learn Python, as "in 2014, Python replaced Java as the most popular introductory programming language taught in U.S. universities"<sup><a href="worksCited.php" style="text-decoration:none">1&nbsp;</a></sup>.</p>

<h3>Which Languages are Most In-Demand?</h3><hr>
<p>Go, Ruby, and Scala earned people the most interviews on Hired across the globe. Go, created by Google, is only used by 7% of developers, but "candidates with experience in Go were most likely to earn an interview request"<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>.</p>

<h3>Additional Skills</h3><hr>
<p>The study additionally shows employers looking to hire people with these skills:<sup><a href="worksCited.php" style="text-decoration:none">5&nbsp;</a></sup></p>
  <li>Software development and software engineering</li>
  <li>Project management</li>
  <li>Linux operating systems</li>
  <li>Business process analysis</li>
  <li>Information systms design</li>

<p>Some of the less-common skills employers like to see include the following:</p>
  <p><b>Code navigation</b> - or the ability to find your way around a project. Being able to "analyze and pick up what is going on with existing code is an important part of programming". This is especially essential as most likely, you will not be working on an app alone (if you are a developer or programmer), but rather with a team of developers, and "employers would love to keep handoff-related downtime to a minimum"<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>.</p>
  <p><b>An online portfolio</b> - candidates who provide a portfolio containing websites, libraries, games or any projects they have created can sway employers in your favor when applying for a job. It is best if the projects are open-source so they can view and assess how you code<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>.</p>
  <p><b>Deployment strategy</b> - most applicants out of college "come with a great knowledge of algorithms, languages, and data structures, but most of them have never had to deploy a large-scale application in the real world". Projects outside of school and internships are valuable, especially when students have gained experience "deploying it and serving actual customers"<sup><a href="worksCited.php" style="text-decoration:none">6&nbsp;</a></sup>.</p>


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
