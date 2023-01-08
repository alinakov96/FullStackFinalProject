<section>
  <form method="POST" action="update.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= ($track['id'] ?? ''); ?>">

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= ($track['name'] ?? ''); ?>">

    <label for="artist">Artist:</label>
    <input type="text" name="artist" value="<?= ($track['artist'] ?? ''); ?>">

    <label for="album">Album:</label>
    <input type="text" name="album" value="<?= ($track['album'] ?? ''); ?>">

    <label for="image">Image:</label>
    <input type="text" name="image" value="<?= ($track['image'] ?? ''); ?>">

    <label for="genre">Genre:</label>
    <input type="text" name="genre" value="<?= ($track['genre'] ?? ''); ?>">

    <label for="track">Track:</label>
    <input type="text" name="track" value="<?= ($track['track'] ?? ''); ?>">

    <input type="submit" value="Submit">
  </form>
</section>