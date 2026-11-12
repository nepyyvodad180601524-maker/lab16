<?php include __DIR__ . '/layout/header.php'; ?>

<?php foreach ($posts as $post): ?>
    <article class="mb-3">
        <h2><?= htmlspecialchars($post->title) ?></h2>
        <p><?= htmlspecialchars($post->content) ?></p>
    </article>
<?php endforeach; ?>

<?php include __DIR__ . '/layout/footer.php'; ?>