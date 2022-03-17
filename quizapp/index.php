<!DOCTYPE html>
<html lang="en">
<head>
<title>Quiz App Portal</title>
<link rel="stylesheet" href="style.css">
</head>
<body >
<form action="index.php" method="post">

<header id="main-header" class="container" >
<p> &nbsp;&nbsp;&nbsp; <b>Quiz App</b> </p>
</header>
<nav id="navbar">
<div class="container">
 <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
 </ul>
 </div>
 </nav>
<div id="showcase">
<div id="container">
<h1>Web Technologies [E] <br> ID : 18-*****-2</h1>
</section>
</div>
</div>

<div class="container">
<section id="main">
<!-- <aside id="showcase"> -->
    
<p > 1. Who is the President of USA?
<br>  <input type="radio" name="Q1" value="jb">  Joe Biden 
<br>  <input type="radio" name="Q1" value="gb">   George Bush
</p>

<p >2. Summation of 10 and 9 is?
<br>  <input type="radio" name="Q2" value="18">   18
<br>  <input type="radio"  name="Q2" value="19">   19
</p>

<p >3.  What is our national fruit ?
<br>  <input type="radio"  name="Q3" value="jf">   Jackfruit
<br>  <input type="radio"  name="Q3" value="wm">   Water Melon
</p>

<p >4. Where is Captain America from?
<br>  <input type="radio" name="Q4" value="brkln">  Brooklyn
<br>  <input type="radio"  name="Q4" value="dhk"> Dhaka  
</p>

<p >5.  What type of doctor is Doctor Strange?
<br>  <input type="radio"  name="Q5" value="neuro">  A neurosurgeon. 
<br>  <input type="radio" name="Q5" value=" wiz">  Wizard
</p>

<p >6.  Who was able to pick up Thor hammer in Endgame?
<br>  <input type="radio"  name="Q6" value="zemo">   Zemo
<br>  <input type="radio"  name="Q6" value="rambeau">   Rambeau
</p>

<p >7. Which club has recorded the most defeats in Premier League history?
<br>  <input type="radio"  name="Q7" value="ever">   Everton
<br>  <input type="radio"  name="Q7" value="aston">  Aston Villa
</p>

<p >8. Internet Explorer is a?
<br>  <input type="radio"  name="Q8" value="wb">  Web Browser
<br>  <input type="radio"  name="Q8" value="ws">   Web Site
</p>

<p >9.  Which one is the first fully supported 64-bit OS?
<br>  <input type="radio"  name="Q9" value="win">   Windows
<br>  <input type="radio"  name="Q9" value="lin">  Linux
</p>

<p >10.   Trojan refer to?
<br>  <input type="radio"  name="Q10" value="virus">   Virus
<br>  <input type="radio"  name="Q10" value="malware"> Malware
</p>

<br> <br>



<input type="submit" name="submit">

</aside>



<?php
$total = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST ["submit"])
   {  

       if(isset($_POST["Q1"]))
       {
        if($_POST["Q1"]=="jb")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }
     
       if(isset($_POST["Q2"]))
       {
        if($_POST["Q2"]=="19")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q3"]))
       {
        if($_POST["Q3"]=="jf")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q4"]))
       {
        if($_POST["Q4"]=="brkln")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }
       
       if(isset($_POST["Q5"]))
       {
        if($_POST["Q5"]=="neuro")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q6"]))
       {
        if($_POST["Q6"]=="zemo")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q7"]))
       {
        if($_POST["Q7"]=="ever")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q8"]))
       {
        if($_POST["Q8"]=="wb")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q9"]))
       {
        if($_POST["Q9"]=="lin")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }

       if(isset($_POST["Q10"]))
       {
        if($_POST["Q10"]=="malware")
        {
         $GLOBALS['total'] =  $GLOBALS['total'] +1;
        }
       }
   }
 
   
echo 
"<aside id='sidebar'>
<h1 >  You Got:  " .$GLOBALS['total']  ." Marks Out of 10</h1>
</aside>";   
}
?>

</form>

</div>
<br><br><br>
<footer id= "main-footer">
<p>Copyright &copy 2022 Quiz App
</p>
</footer>
</body>
</html>
