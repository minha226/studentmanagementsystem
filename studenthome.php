<?php
session_start();

if(!isset($_SESSION['username']))
{

    header("location:login.php");

}
elseif($_SESSION['usertype']=='admin')
{


    header("location:login.php");
}



?>





<html>
    <head>
        <meta charset="utf-8">
        <title> Admin Dashboard</title>

        <link rel="stylesheet" type="text/css" href="admin.css">
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>








</head>
<body>

<header class="header">
    <a href="">Student Dashboard</a>
    <div class="logout">
    <a href="logout.php" class="btn btn-primary">Logout</a>
</div>

</header>
        <aside>
                <ul>
                    <li>
                        <a href="">My courses</a>

</li>
<li>
                        <a href="">My Result</a>

</li>




</ul>

</aside>





</body>
</html>