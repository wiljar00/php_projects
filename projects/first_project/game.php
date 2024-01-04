<?php include('header.php'); ?>

<section>
    <h2>Rock, Paper, Scissors Game</h2>

    <?php
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

        // Display the choices and result
        echo "<p>Your choice: {$userChoice}</p>";
        echo "<p>Computer's choice: {$computerChoice}</p>";
        echo "<p>{$result}</p>";
    }
    ?>

    <form method="post">
        <label for="userChoice">Choose: </label>
        <select name="userChoice" id="userChoice">
            <option value="rock">Rock</option>
            <option value="paper">Paper</option>
            <option value="scissors">Scissors</option>
        </select>
        <button type="submit">Play</button>
    </form>
</section>

<?php include('footer.php'); ?>
