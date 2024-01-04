<?php include('header.php'); ?>

<section>
    <h2>Quote of the Day</h2>

    <?php
    // Fetch a random quote from an external API
    $quoteApiUrl = 'https://api.quotable.io/random';
    $quoteJson = file_get_contents($quoteApiUrl);
    $quoteData = json_decode($quoteJson, true);

    if ($quoteData && isset($quoteData['content'], $quoteData['author'])) {
        $quoteContent = $quoteData['content'];
        $quoteAuthor = $quoteData['author'];
        echo "<blockquote>
                <p>{$quoteContent}</p>
                <footer>- {$quoteAuthor}</footer>
              </blockquote>";
    } else {
        echo "<p>Unable to fetch the quote at the moment. Please try again later.</p>";
    }
    ?>

</section>

<?php include('footer.php'); ?>
