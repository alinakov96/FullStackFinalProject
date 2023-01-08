<section>
  <form method="POST" action="store.php" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name">

    <label for="artist">Artist:</label>
    <input type="text" name="artist">

    <label for="album">Album:</label>
    <input type="text" name="album">

    <label for="image">Image:</label>
    <input type="file" name="image">

    <label for="genre">Genre:</label>
    <input type="text" name="genre">

    <label for="track">Track:</label>
    <input type="file" name="track">

    <input type="submit" value="Submit">
  </form>
</section>