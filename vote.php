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
            <form method="post" action="index.php">
                <button style="margin-top: 20px;" type="submit">home</button>
            </form>
            <form method="post" action="vote.php">
                <button style="margin-top: 20px;" type="submit">refresh page</button>
            </form>
            <?php
        $playerVoting = $_GET["player"];
        $nbPlayers = shell_exec('wc -l < players.txt');

        $playersArray = explode("\n", file_get_contents('players.txt'));

        $nbPlayers = shell_exec('wc -l < players.txt');
        if ($nbPlayers == 5){

            shell_exec('head imposters.txt > tmp.txt');
            $imposterIndex1 = shell_exec('tail -1 tmp.txt');
            $imposterIndex2 = shell_exec('head -1 tmp.txt');
            echo '<form method="get" action="action_page.php"><br>';

            for ($i = 0; $i<count($playersArray) - 1; $i++){
                echo '<input class="single-checkbox" type="checkbox" id="player'.$i.'" name="player'.$i.'" value="'.$playersArray[$i].'">
                    <label for="player'.$i.'"> '.$playersArray[$i].'</label><br>';
            }
            echo '  <button type="submit" value="Submit">submit vote</button>
            </form>';
            echo '<p>Note: if you select more than 2 players, only the first 2 players will recieve your vote</p>';
        }
        else{
            echo "<p>please wait until everyone joins before voting</p>";
        }


    ?>
        </center>

        </div>
    </div>


</body>
</html>