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
	<h3>Reveal the imposters</i></b></h2>

	




	<div class="bord">
		<div class="scroll">
        <center>
            <form action="index.php">
                <button style="margin-top: 20px;" type="submit">play again</button>
            </form>

            <form action="reveal.php">
                <button style="margin-top: 20px;" type="submit">refresh page</button>
            </form>
    <?php

    $nbPlayers = shell_exec('wc -l < players.txt');
        echo '<br><form class="first_form" name="form" action="reveal.php" method="post">
        <input style = "margin-op: 20px" class="ff" type="text" name="mdp" id="mdp" placeholder="enter admin password">
        <button>submit</button>
    </form>';

    $isGameDone = shell_exec("head isGameDone.txt");
    $mdp = $_POST["mdp"];
    if ($mdp == "hehe"){
        shell_exec("./gameDone");
    }

    if ($isGameDone){


        $playersArray = explode("\n", file_get_contents('players.txt'));
        $votesArray = explode("\n", file_get_contents('votes.txt'));
        shell_exec('head imposters.txt > tmp.txt');
        $imposterIndex1 = shell_exec('tail -1 tmp.txt');
        $imposterIndex2 = shell_exec('head -1 tmp.txt');

        for ($i = 0; $i < count($playersArray) - 1; $i++){
            if ($i == $imposterIndex1 || $i == $imposterIndex2){
                echo '<p><b style = "color: crimson">' . $playersArray[$i] . '</b>, was an imposter, he received '. $votesArray[$i].' votes</p>';
           }
           else {
               echo '<p><b style = "color: green">' . $playersArray[$i] . '</b>, was a crewmate, he received '. $votesArray[$i].' votes</p>';
           }
        }
    }
    else {
        echo "<p>game hasn't ended yet. please refresh when game ends</p>";
    }
        


    ?>

        </center>

        </div>
    </div>


</body>
</html>