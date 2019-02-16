<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if(empty($pages)): ?>
  <p>No pages at the moment!</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>Label</th>
        <th>title</th>
        <th>Slug</th>
        <th>Created on</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($pages as $page): ?>
        <tr>
          <td><?= e($page['label']); ?></td>
          <td><?= e($page['title']); ?></td>
          <td>
            <a href="<?php echo BASE_URL; ?>/page.php?page=<?= e($page['slug']); ?>">
              <?= e($page['label']);?>
            </a>
          </td>
          <td><?= e($page['created']); ?></td>
          <td><a href="<?= BASE_URL;?>/admin/edit.php?id=<?= e($page['id']); ?>">Edit page</a></td>
          <td>
            <a href="<?= BASE_URL;?>/admin/delete.php?id=<?= e($page['id']); ?>">
              Delete page
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>
<a href="<?= BASE_URL;?>/admin/add.php" class="submit-btn">Add new page</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
