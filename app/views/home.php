<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <?php if(empty($pages)): ?>
    <p>Sorry, no pages at the moment</p>
  <?php else: ?>
    <ul class="page-list">
      <?php foreach($pages as $page): ?>
        <li class="page">
          <a href="<?= BASE_URL; ?>/page.php?page=<?= $page['slug']; ?>">
            <?php echo $page['label']?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
