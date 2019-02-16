<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="edit-page-title">Edit page</h2>

<form action="<?= BASE_URL; ?>/admin/edit.php" method="post" class="edit-form">
  <p>
    <label>Title</label></br>
    <input type="text" name="title" value="<?= e($page['title']); ?>">
  </p>
  <p>
  <p>
    <label>Label</label> </br>
    <input type="text" name="label" value="<?= e($page['label']); ?>">
  </p>
    <label>Slug</label></br>
    <input type="text" name="slug" value="<?= e($page['slug']); ?>">
  </p>
  <p>
    <label>Body</label></br>
    <textarea name="body" rows="10" cols="30"><?= e($page['body']); ?></textarea>
  </p>

  <input type="hidden" name="id" value="<?= e($page['id']); ?>">
  <button type="submit" name="editPage" class="submit-btn">Submit</button>
</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
