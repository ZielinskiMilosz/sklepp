<html>
    <head>
        <style>
        .essa
        {
            background: gray;
            height: 500px;
			outline: 5px black solid;
            font-size: 20px;
            text-align: center;
            width: 500px;
            border: 65%;

        }
        input
        {
            background: white;
        }
        button
        {
            background: red;
        }
        </style>
    </head>
    <body>
    <?php
        $con = new mysqli("127.0.0.1","root","","skelpp");
        echo '<form method="POST">';
        $res = $con->query("SELECT * FROM users");
        $cos = $res->fetch_all();

        echo '<center><div class="essa"><h1>Logowanie:</h1><br> User name: <input name="login"><br> Haslo: <input name="password" type="password"><br><input type="submit">';
        if($_POST!=NULL)
        {
            for($i=0;$i<count($cos);$i++)
            {
                if($_POST['login']==$cos[$i][1] && $_POST['password']==$cos[$i][2])
                {
                    echo 'zarejestrowałeś się';
                    header('location: strona.php');
                    break;
                }
                else
                {
                }
            }
        }
        echo '</form>';

        echo '<form action="rejestracja.php"><button>Rejestracja</button></form></center></div>';
    ?>

    </body>
</html>