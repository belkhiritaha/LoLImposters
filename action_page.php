<!DOCTYPE html>
<html>
<head>
	<title>Taha Belkhiri</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>

</head>
<body>

	<h2>League Of Legends Imposters</h1>
	<h3>let's eject the imposters</i></b></h2>

	




	<div class="bord">
		<div class="scroll">
        <center>
            <?php

        $votes_array = array($_GET["player0"], $_GET["player1"], $_GET["player2"], $_GET["player3"], $_GET["player4"]);
        
        $playersArray = explode("\n", file_get_contents('players.txt'));
        $nbvoted =0;
        for ($i = 0; $i<count($votes_array); $i++){
            if ($votes_array[$i] && $nbvoted < 2){
                $command = "./addVote ";
                $command .= $votes_array[$i];
                shell_exec($command);
                $nbvoted++;
                echo '<p>Your vote for '. $votes_array[$i] .' has been casted</p><br>';
            }
        }


    ?>
        <form action="reveal.php">
                <button style="margin-top: 20px;" type="submit">reveal roles</button>
            </form>
        </center>

        </div>
    </div>


</body>
</html>