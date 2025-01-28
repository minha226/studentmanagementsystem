<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Student Management System </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
   <nav>
    <lable class ="logo" >W-school</lable>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
             
    </nav>
    <div class="section1">
        <lable class="img_text"> We Teach Student With Care</lable>
        <img class="main_img" src= "school.jpg">
        </div>

    <div class="container">
            <div class="row">
                
                <div class ="col-md-4">
                <img class="welcome_img" src="studyarea.jpg">
                </div>

            <div class="col-md-8">
                <h1> Welcome to W-school</h1>
                <p>Schooling is our first contact with the world, a period of joy, healthy competition, fearing, adjustment, sharing and love. It is not the wide open spaces, classrooms, the library, laboratories or the large fields that make the school. It is in the heart of the students and staff that the true institution exists.

Learning is nor a process limited to schools and colleges only, nor does it end with the conclusion of one’s school career. It is indeed a lifelong process. This school is oriented to the total formation of a child to adaptations of various methods suiting the dynamics of changing world in order to achieve common goals and objectives. It is further characterized by shared vision – responsibility and above all, love and faith in God in order to achieve these goals.

Dear students, it is my message to you all that the people of fine character live by their values.
 They are honest and are committed to truthfulness in thought, word and deed. True character thus encompasses
  the capacity for self discipline.</p>
                </div>

    </div>
    </div>
</div>

<center>
    <h1> Our Teachers </h1>

</center>

<div class ="container">
    <div class ="row">
        <div  class ="col-md-4">
            <img class ="teacher"src="teacher1.jpg">
            <p>in a vibrant, acadamically challenging,and encouraging environment
                 where manifold viewpoints are 
                prized and celebrated.</p>

        </div>
        <div class="col-md-4">
        <img class ="teacher" src="teacher2.jpg">
        <p>in a vibrant, acadamically challenging,and encouraging environment
                 where manifold viewpoints are 
                prized and celebrated.</p>
        
        </div>
        
    </div>

</div>



<center>
    <h1> Our Courses </h1>

</center>

<div class ="container">
    <div class ="row">
        <div  class ="col-md-4">
            <img class ="teacher"src="web.png">
            <h3>Web Developer</h3>

        </div>
        <div class="col-md-4">
        <img class ="teacher" src="graphicdesign.png">
        <h3>Graphic Design</h3>
        
        </div>
        
    </div>

</div>


<center>
    <h1 class="adm"> Admisstion Form</h1>
</center>

<div align="center" class="admission_form">
    <form action="data_check.php" method="POST">
        <div class="adm_int">
            <label class ="lable_text"> Name</label>
            <input class="input_deg" type="text" name="name">

        </div>
        <div class="adm_int">
            <label class ="lable_text"> Email</label>
            <input class="input_deg" type="text" name="email">

        </div>
        <div class="adm_int">
            <label class ="lable_text"> Phone</label>
            <input class="input_deg" type="text" name="phone">

        </div>
        <div class="adm_int">
            <label class ="lable_text"> Message</label>
            <textarea class="input_txt" name="message"></textarea>

        </div>
        <div class="adm_int">
            
            <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">

        </div>



    </form>

</div>


<footer>

    <h3 class="footer_text"> All @copyright reserved by web tech knowledge (23Da2-0646)</h3>

</footer>







</body>
</html>