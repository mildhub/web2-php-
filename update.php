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
                <a href="update.php" id="update">update</a>
            <?php }?>    
        </nav>
        <article class="border">
        <!-- <?php 
        $list = scandir('./list');
        echo '<h2>'.file_get_contents('list/'.$list[$_GET['id']]).'</h2>';
        ?>
        <form action="update_process.php" method="post">
            <input type="hidden" name="file" value="<?=$list[$_GET['id']]?>">
            <p><input type="text" name="nlist" placeholder="New title"></p>
            <p><textarea name="ncontents" placeholder="New description" cols="60" rows="9"></textarea></p>
            <p><input type="submit" value="Update"></p>
        </form> -->

        <?php 
        if (isset($_GET['id'])) {
            $list = scandir('./list');
            echo '<h2>'.file_get_contents('list/'.$list[$_GET['id']]).'</h2>';
        ?>
          <form action="update_process.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="hidden" name="file" value="<?=$list[$_GET['id']]?>">
            <p><input type="text" name="nlist" placeholder="New title"></p>
            <p><textarea name="ncontents" placeholder="New description" cols="60" rows="9"></textarea></p>
            <p><input type="submit" value="Update"></p>
        </form>  
        <?php }else {
            echo 'ID?';
        } ?>
        </article>
    </main>
    <footer class="border">
        Copyleft <div id="copy">&copy;</div> 2018 Zootopia Inc.
    </footer>
</body>
</html>