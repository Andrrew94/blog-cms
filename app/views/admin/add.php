<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2 class="add-page-title">Add a page</h2>

<form action="<?= BASE_URL; ?>/admin/add.php" method="post" class="add-form">
  <p>
    <label>Title</label></br>
    <input type="text" name="title">
  </p>
  <p>
  <p>
    <label>Label</label> </br>
    <input type="text" name="label">
  </p>
    <label>Slug</label></br>
    <input type="text" name="slug">
  </p>
  <p>
    <label>Body</label></br>
    <textarea name="body" rows="10" cols="30"></textarea>
  </p>

  <button type="submit" name="addPage" class="submit-btn">Submit</button>
</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
