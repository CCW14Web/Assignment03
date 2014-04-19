<html>
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <!--
        File name : createsurvey.php
        Author's name : Zhixiang Hu
        Web site name : Project Survey
        This is create and save survey to database
    -->


    <title>Project Survey - Create Survey</title>
    <!--User javascript file-->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/createsurvey.css">

    <!--jQuery on CND-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!--User javascript file-->
    <script type="text/javascript" src="js/createsurvey.js"></script>
</head>    

<body>
    <div class="banner">Welcome to Project Survey</div>

    <!--navigation bar-->
    <div id='topnav'>
        <my_menu><a class="m_normal" href='login.php'>Login</a></my_menu>
        <my_menu><a class="m_active" href='createsurvey.php'>Create Survey</a></my_menu>
        <my_menu><a class="m_normal" href='takesurvey.php'>Take Survey</a></my_menu>
        <my_menu><a class="m_normal" href='registration.php'>Registration</a></my_menu>
        <my_menu><a class="m_normal" href='edituser.php'>Edit User</a></my_menu>
        <my_menu><a class="m_normal" href='surveyresponses.php'>Survery Responses</a></my_menu>
    </div>
    
    <?php
    session_start();
    $_SESSION["username"] = 'Johnny';
    $_SESSION["isloggedin"] = true;
    if(isset($_POST["username"]))
    {    
        
    }
    else{
        echo "Please Login";
    }
    ?>
    
    
</body>


</html>