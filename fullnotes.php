<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Главная страница</title>
    <?php include_once "templates/connect_styles.php" ?>
    <?php include_once "db/config.php";
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    if (!$connect) {
        exit('Ошибка подключения к БД!');
    }
    /* изменение набора символов на utf8 */
    mysqli_set_charset($connect, "utf8")
    ?>
</head>

<body>
<?php include "templates/header.php" ?>
<main class="content">

    <?php
    $I = $_SESSION['I'];
    var_dump($I);
    $request = "";
    $Query = mysqli_query($connect, $request);
    while ($row = mysqli_fetch_assoc($Query)) { ?>
        <!-- Test section start -->

        <div class="section";">
            <h1><span><?php echo $row["title"]; ?></span></h1>
            <br>
            <p>
                <?php echo $row["content"]; ?>
            </p>
            <p class="quote"><?php echo $row["publicationDate"]; ?></p>
        </div>
        <!-- Test section end -->
    <?php } ?>
</main>

<?php include "templates/contacts.php" ?>
<?php include "templates/copyright.php" ?>

</body>
</html>