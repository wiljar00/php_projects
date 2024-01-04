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

        // Fetch a random image from Unsplash
        $unsplashApiUrl = 'https://source.unsplash.com/featured/?' . urlencode($quoteAuthor);

        echo "<blockquote class=\"quote-block\">
                    <p>{$quoteContent}</p>
                    <footer>- {$quoteAuthor}</footer>
                </blockquote>";

        echo "<img src=\"{$unsplashApiUrl}\" alt=\"Related Image\" class=\"related-image\">";

    } else {
        echo "<p>Unable to fetch the quote and image at the moment. Please try again later.</p>";
    }
    ?>

</section>

<?php include('footer.php'); ?>