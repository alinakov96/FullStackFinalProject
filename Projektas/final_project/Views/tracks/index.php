<section class="music-list">
    <?php
        $tracks = array();
        foreach ($tracks as $track) {
    ?>
        <article class="card small">
            <header>
                <img src="<?= imagesUrl(($track['image'] ?? '')); ?>">
                <h2><?= $track['name']; ?></h2>
            </header>
            <div class="card-details">
                <table>
                    <tbody>
                        <tr>
                            <th>Artist</th>
                            <td><?= $track['artist']; ?></td>
                        </tr>
                        <tr>
                            <th>Album</th>
                            <td><?= $track['album']; ?></td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td><?= $track['genre']; ?></td>
                        </tr>
                        <tr>                              
                            <td>
                                <audio controls autoplay muted>
                                    <source src="<?= trackUrl(($track['track'] ?? '')); ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <a class="button" href="show.php?id=<?= $track['id']; ?>">Show</a>
                <a class="button" href="edit.php?id=<?= $track['id']; ?>">Edit</a>
                <a class="button" href="delete.php?id=<?= $track['id']; ?>">Delete</a>
            </div>
        </article>
    <?php } ?>
</section>