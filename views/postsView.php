<?php include __DIR__ . '/layout/header.php'; ?>

<form method="get" action="index.php" class="mb-4">
    <div class="input-group">
        <input type="text" name="query" class="form-control" placeholder="Пошук постів за назвою..." value="<?= htmlspecialchars($query ?? '') ?>">
        <button class="btn btn-primary" type="submit">Пошук</button>
        <?php if (!empty($query)): ?>
            <a href="index.php" class="btn btn-outline-secondary">Скинути</a>
        <?php endif; ?>
    </div>
</form>

<?php if (empty($posts)): ?>
    <div class="alert alert-warning">За запитом «<?= htmlspecialchars($query) ?>» постів не знайдено.</div>
<?php else: ?>
    <?php foreach ($posts as $post): ?>
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="card-title h4 mb-0"><?= htmlspecialchars($post->title) ?></h2>
                    <span class="badge bg-secondary"><?= htmlspecialchars($post->date) ?></span>
                </div>
                <div class="card-text">
                    <?= $parsedown->text($post->content) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php include __DIR__ . '/layout/footer.php'; ?>