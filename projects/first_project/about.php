<?php include('header.php'); ?>

<section>
    <h2>About Us</h2>
    <p>Welcome to our About Us page!</p>

    <?php
    // Example of using PHP variables for dynamic content
    $teamMembers = array(
        'John Doe' => 'Founder',
        'Jane Smith' => 'Developer',
        'Bob Johnson' => 'Designer'
    );
    ?>

    <h3>Our Team</h3>
    <ul>
        <?php
        // Loop through the team members and display their roles
        foreach ($teamMembers as $name => $role) {
            echo "<li>$name - $role</li>";
        }
        ?>
    </ul>
</section>

<?php include('footer.php'); ?>
