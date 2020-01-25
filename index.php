<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Ivan Glushkov</title>
    <?php include_once "templates/connect_styles.php" ?>
    <?php include_once "db/config.php";
    $connect = mysqli_connect(HOST, USER,PASS, DB);
    if (!$connect) exit('Ошибка подключения к БД!');
    /* изменение набора символов на utf8 */
    mysqli_set_charset($connect, "utf8")
    ?>
</head>

<body>
<?php include "templates/header.php" ?>
<?php


//пагинация расчёт!
mysqli_query($connect, "SET NAMES 'uft8'");

if (isset ($_GET['page']) ) {
    $page = $_GET['page'];
}  else {
    $page = 1;
}
$notesOnPage = 2;
$from = ($page - 1) * $notesOnPage;
$request = "select * from articles ORDER BY id DESC limit $from,$notesOnPage";
$Query = mysqli_query($connect, $request);

// for ($data = []; $row = mysqli_fetch_assoc($Query); $data[] = $row);
// var_dump($data);

//вывод новостей на странице

while ($row = mysqli_fetch_assoc($Query) ) {?>
    <!-- Test section start -->
    <div class="section">
        <h1><span><?php echo $row["title"]; ?></span></h1>
        <br>
        <p>
            <?php echo $row["content"]; ?>
        </p>
        <p class="quote"><?php echo $row["publicationDate"]; ?></p>
    </div>
    <!-- Test section end -->

<?php } ?>

<div class="pagination">
    <?php
    //вывод указателей для перехода по страницам

    $request = "select COUNT(*)as count from articles";
    $Query = mysqli_query($connect, $request);
    $count = mysqli_fetch_assoc($Query)['count'];
    $pagesCount = ceil($count / $notesOnPage);

    ?>

    <ul>
        <?php
        if ($page == 1) {
            echo "<li><a href=\"?page=1\"><<</a></li>";
        } else {
            $prev = $page-1;
            echo "<li><a href=\"?page=$prev\"><<</a></li>";
        }
        for ($i = 1; $i <= $pagesCount; $i++) {
            if ($page == $i) {
                $class=' class="active"';
            } else {
                $class = '';
            }
            echo "<li><a href=\"?page=$i\"$class>$i </a></li>";
        }
        if ($page == $pagesCount) {
            echo "<li><a href=\"?page=$pagesCount\">>></a></li>";
        } else {
            $next = $page + 1;
            echo "<li><a href=\"?page=$next\">>></a></li>";
        }


        ?>
    </ul>
</div>

<?php include "templates/contacts.php" ?>
<?php include "templates/copyright.php" ?>

</body>
</html>