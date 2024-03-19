<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet type="css/text" href="styleadmincp.css?v=<?php echo time();?>">
    <title  >Admincp</title>
</head>
<body>
    <h1 class="title_admin" style="font-size: 80px; ">{F-GRAB APP}</h1>
    <h2 style="text-align:center;">*SIGN UP TO BE A VOLUNTEE DRIVER*</h2>
    <div class="wrapper">
    <?php
        include("config/config.php");
        include("module/header.php" );
        include("module/menu.php");
        include("module/main.php");
        include("module/footer.php");
    ?>
    </div>

    <!--STYLE FILE-->
    <style type="text/css">

        body{
            background-color: #000000;
            color: white;
            font-family: "Courier New", Courier, monospace;
        }
            ul.admincp_list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

            ul.admincp_list li {
            margin: 10px;
            float: left;
        }

            .clear{
            clear: both ;        
        }
            .title_admin{
            text-align: center;
            font-size: 40px ;
            margin-bottom: 10px ;

        }

            .wrapper{
            border: 1px solid #000;
            height: auto;
            width: 90%;
            margin: 0 auto;
        }
    </style>
    <!--END STYLE FILE-->




</body>
</html>