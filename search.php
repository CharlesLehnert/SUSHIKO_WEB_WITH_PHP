<?php include 'includes/header.php'; ?>

<section class="search-bar-container">
    <div class="search-bar-logo-text">
        <img src="/assets/images/sushiko.png" alt="SUSHI KO Logo" class="search-logo"> <!-- Add your logo here -->
        <span class="search-text">SUSHI KO ROOCKFORD</span> <!-- Add your custom text here -->
    </div>
    <form action="/search.php" method="GET" class="search-form">
        <input type="text" name="query" placeholder="Search..." class="search-input">
        <button type="submit" class="search-button">Search</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
