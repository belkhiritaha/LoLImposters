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
	<h3>who's going to ruin the game ?</i></b></h2>

	




	<div class="bord">
		<div class="scroll">

    <?php
        $nbPlayers = shell_exec('wc -l < players.txt');

        $newPlayer = $_GET['player'];
        $playersArray = explode("\n", file_get_contents('players.txt'));
        $wasRoleDisplayed = 0;
        if (in_array($newPlayer, $playersArray)){
            $wasRoleDisplayed = 1;
        }

        if ($nbPlayers < 5){

            $addCommand = "./addPlayer ";
            $addCommand .= $newPlayer;
            shell_exec($addCommand);
        }

        $PlayerIndex = -1;



        $nbPlayers = shell_exec('wc -l < players.txt');
        echo '<p> '. $nbPlayers . 'players have joined the game</p>';

        $playersArray = explode("\n", file_get_contents('players.txt'));
        shell_exec('head imposters.txt > tmp.txt');
        $imposterIndex1 = shell_exec('tail -1 tmp.txt');
        $imposterIndex2 = shell_exec('head -1 tmp.txt');
        $switchIndex = shell_exec('head switch.txt');


        
        for ($i = 0; $i<count($playersArray); $i++){
            if ($playersArray[$i] == $newPlayer){
                $PlayerIndex = $i;
            }
        }

        if (!$newPlayer){
            echo '        <center>
            <form class="first_form" name="form" action="" method="get">
                <input class="ff" type="text" name="player" id="player" placeholder="enter your username">
                <button>join the game</button>
            </form>
            <button style = "margin-top: 20px;" onClick="window.location.reload();">refresh page</button>
            <br>
        </center>';
        }

        if ($wasRoleDisplayed == 0){
            if ($newPlayer && $PlayerIndex != -1){
                if ($PlayerIndex == $imposterIndex1 || $PlayerIndex == $imposterIndex2){
                     echo '<p><b style = "color: crimson">' . $playersArray[$PlayerIndex] . "</b>, you are the imposter, go ruin (discretement) la game :D</p>";
                }
                else {
                    echo '<p><b style = "color: green">' . $playersArray[$PlayerIndex] . "</b>, you're a crewmate, go tryhard !</p>";
                }
                if ($PlayerIndex == $switchIndex){
                    echo "<p>You're the <b>switch</b>!</p>";
                }

                echo '<center><form method="get" action="vote.php">
                <input class="ff" type="button" value="'.$newPlayer.'" name="player" id="player" placeholder="enter your username">
                <button style="margin-top: 20px;" type="submit" value="'.$newPlayer.'">go to vote</button>
                </form></center>';

            }
            else {
                echo "<p>you haven't joined the game yet</p>";
            }
        }
        else {
            if ($newPlayer && $PlayerIndex != -1){
                echo '<p><b>' . $playersArray[$PlayerIndex] . "</b>'s role has already been displayed.</p>";
                echo '<center><form method="get" action="vote.php">
                <input style="width: 0px; height: 0px; visibilty:hidden;" type="text" value="'.$newPlayer.'" name="player" id="player" placeholder="enter your username">
                <button style="margin-top: 20px;" type="submit" value="'.$newPlayer.'">go to vote</button>
                </form></center>';
            }
            else {
                echo "<p>you haven't joined the game yet</p>";
            }
        }




    ?>
        </div>
    </div>


</body>
</html>