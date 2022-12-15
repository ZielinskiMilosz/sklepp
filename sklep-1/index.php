<html>
    <head>
        <style>
        .essa
        {
            background: darkgray;
            height: 100%;
            font-size: 32px;
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
        $con = new mysqli("127.0.0.1","root","sklepp");
        echo '<form method="POST">';
      $sql="SELECT * FROM users WHERE login='".$_POST['login']."'"
		  $res = $con->query($sql);
			kos = $res->fetch_array(MYSQLI_ASSOC);
		if(count($cos)>0){
			
		}
        echo '<center><div class="essa"><h1>Logowanie:</h1><br> User name: <input name="login"><br> Haslo: <input name="password" type="password"><br><input type="submit">';
       
        echo '</form>';

        echo '<form action="rejestracja.php"><button>Rejestracja</button></form></center></div>';
    ?>

    </body>
</html>