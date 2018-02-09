<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZOOTOPIA</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body class="border">
    <header class="border">
        <h1><a href="index.php">Zootopia</a></h1>
        <input type="button" value="night" onclick="change(this)">
    </header>
    <main>
        <nav class="border">
            <ul>
            <?php
                $list=scandir('list');
                $i=0;
                while ($i < count($list)) {
                    if ($list[$i]!='.' && $list[$i]!='..') {
                        $listn = file_get_contents('list/'.$list[$i]);
                        echo '<li><a href="index.php?id='.$i.'">'.$listn.'</a></li>';
                    }
                    $i+=1;
                }
            ?>
            </ul>
        </nav>
        <article class="border">
        <form action="create_process.php" method="post">
            <input type="hidden" name="id" valul='<?=$_GET['id']?>'>
            <p><input type="text" name="list" placeholder="title"></p>
            <p><textarea name="contents" placeholder="description" cols="60" rows="9"></textarea></p>
            <p><input type="submit" value="Submit"></p>
        </form>
        <a href="index.php" style="color: coral">return</a>
        </article>
    </main>
    <footer class="border">
        Copyleft <div id="copy">&copy;</div> 2018 Zootopia Inc.
    </footer>
</body>
</html>