<html>
    <head>
        <style>
        .okno
        {
            background: orange;
            border: 50%;
            font-size: 20px;
            text-align: center;
        }
        input
        {
            background: lightgrey;
        }
        button
        {
            background: lightgrey;
        }
        </style>
    </head>
    <body>
    <?php
        $con = new mysqli("127.0.0.1","root","","sklepp");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM users");
        $cos = $res->fetch_all();

        echo '<center><div class="okno">Register<br> username <input name="login"><br> password <input name="password" type="password"><br><input type="submit">';
        if($_POST!=NULL)
        {
            if($_POST['login']!="" && $_POST['password']!="")
            {
                $sqlquery = "INSERT INTO `users` VALUES ('".count($cos)."', '".$_POST['login']."', '".$_POST['password']."', '0', '');";
                $con->query($sqlquery);
                header('location: index.php');
            }
        }
        echo '</form>';
        echo '<form action="index.php"><button>Logowanie</button></form></center></div>';
		
    ?>

    </body>
</html>
