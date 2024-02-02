<?php foreach ($movies as $movie): ?>
    <div class="movie-container">
        <div class="movie-details">
            <h2><?php echo $movie->getTitle(); ?></h2>
            <p><strong>Director:</strong> <?php echo $movie->director; ?></p>
            <p><strong>Language:</strong> <?php echo $movie->language; ?></p>
            <p><strong>Genres:</strong> <?php echo implode(', ', $movie->getGenres()); ?></p>
        </div>
    </div>
<?php endforeach; ?>
