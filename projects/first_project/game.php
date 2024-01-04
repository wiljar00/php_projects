<?php include('header.php'); ?>

<section>
    <h2>Rock, Paper, Scissors Game</h2>

    <?php
        echo "<p>Choose Rock Paper or Scissors: </p>";
        // Check if the user has submitted a choice
        if (isset($_POST['userChoice'])) {
            // Array of possible choices
            $choices = ['rock', 'paper', 'scissors'];




            // Get user's choice and computer's random choice
            $userChoice = strtolower($_POST['userChoice']);
            $computerChoice = $choices[array_rand($choices)];

            // Determine the winner
            if ($userChoice == $computerChoice) {
                $result = 'It\'s a tie!';
            } elseif (
                ($userChoice == 'rock' && $computerChoice == 'scissors') ||
                ($userChoice == 'paper' && $computerChoice == 'rock') ||
                ($userChoice == 'scissors' && $computerChoice == 'paper')
            ) {
                $result = 'You win!';
            } else {
                $result = 'Computer wins!';
            }

            // Set the variable to true since the game has been played
            $gamePlayed = true;

            // Display the choices and result with FontAwesome icons
            echo "<div class=\"choice-container user-choice\">
                    <i class=\"fas fa-hand-{$userChoice} fa-5x\"></i>
                </div>";
            echo "<div class=\"choice-container computer-choice\">
                    <i class=\"fas fa-hand-{$computerChoice} fa-5x\"></i>
                </div>";
            echo "<p>{$result}</p>";
        }
    ?>

    <div class="choice-container">
        <i class="fas fa-hand-rock fa-5x" onclick="selectChoice('rock')"></i>
    </div>
    <div class="choice-container">
        <i class="fas fa-hand-paper fa-5x" onclick="selectChoice('paper')"></i>
    </div>
    <div class="choice-container">
        <i class="fas fa-hand-scissors fa-5x" onclick="selectChoice('scissors')"></i>
    </div>

    <form id="gameForm" method="post" style="display: none;">
        <input type="hidden" name="userChoice" id="userChoiceInput">
    </form>

    <br>

    <!-- Show the button only if the game has been played -->
    <?php if ($gamePlayed): ?>
        <button onclick="resetGame()">Play Again</button>
    <?php endif; ?>

    <form id="gameForm" method="post" style="display: none;">
        <input type="hidden" name="userChoice" id="userChoiceInput">
    </form>

    <script>
        function selectChoice(choice) {
            // Set the user's choice and submit the form
            document.getElementById('userChoiceInput').value = choice;
            document.getElementById('gameForm').submit();
        }

        function resetGame() {
            // Reload the page to reset the game
            location.reload();
        }
    </script>
</section>

<?php include('footer.php'); ?>
