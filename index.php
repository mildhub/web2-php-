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
            <a href="create.php" id="create">create<a>
            <?php if(isset($_GET['id'])){?>
                <a href="update.php?id=<?=$_GET['id']?>" id="update">update</a>
                <form action="delete_process.php" method="post">
                    <input type="hidden" name="filename" value="<?=$list[$_GET['id']]?>">
                    <input type="submit" value="delete">
                </form>
            <?php }?>    
        </nav>
        <article class="border">
        <?php
            if (isset($_GET['id'])) {
                $list = scandir('./list');
                $contents = scandir('contents');
                echo '<h2>'.file_get_contents('list/'.$list[$_GET['id']]).'</h2>';
                echo '<p>'.file_get_contents('contents/'.$contents[$_GET['id']]).'</p>';
                // echo '<a href="update.php">update</a>';
            }else {
                echo "Welcome to Zootopia!";
            }
        ?>
        </article>
    </main>
    <footer class="border">
        Copyleft <div id="copy">&copy;</div> 2018 Zootopia Inc.
    </footer>
</body>
</html>