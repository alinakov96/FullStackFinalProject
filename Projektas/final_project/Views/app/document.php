<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="searchbar">
                    <input type="text" onkeyup="showResult(this.value)">
                    <div id="livesearch"></div>   
                </li>
                <li>                      
                    <a href="index.php">Home</a>                                                      
                </li>
                <?php if ($_SESSION['is_authenticated'] ?? '') { ?>
                    <li>
                        <a href="create.php">Upload Track</a>
                    </li>
                      
                    <li class='dropdown'>
                        Vardas Pavarde
                        <ul class='dropdown-list'>
                            <li>
                                <a href="login.php?logout=1">Logout</a>
                            </li>
                        </ul>
                    </li>                     
                <?php } ?>
            </ul>
        </nav>
        <form>
        </form>
    </header>
    <main>
        <?php
        if (($_SESSION['is_authenticated'] ?? '')) {
            echo "<a href='create.php'>NEW TRACK</a>";
        }
        ?>
        <?php echo $content ?? ''; ?>
    </main>
    <script src='js/main.js'></script>
    <script src="js/search.js"></script>
</body>

</html>