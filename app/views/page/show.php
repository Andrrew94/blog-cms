<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if(!$page): ?>
  <p>No page found!</p>
<?php else: ?>
  <h2 class="page-title"><?= e($page['title']); ?></h2>
  <div class="page-body"><?= e($page['body']); ?></div>
  <p class="page-create-date">
    Created on
    <?= $page['created']->format('jS M Y'); ?>
    <?php if ($page['updated']): ?>
      Last updated on <?= $page['updated']->format('jS M Y h:i a'); ?>
    <?php endif; ?>
  </p>
<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
