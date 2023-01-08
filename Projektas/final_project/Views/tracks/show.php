<section class="music-list">
    <article class="card">
        <header>
        <img src="<?= imageUrl(($track['image'] ?? '')); ?>">
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
    </article>
</section>