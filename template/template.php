<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок - 8</title>
</head>
<body>
<?php if (isset($_GET['id'])) :?>
    <article>
    <h1><?php echo $this->data['news'][0]['Header']; ?></h1>
    <p><?php echo $this->data['news'][0]['Text']; ?></p>
    <p><i><?php echo $this->data['news'][0]['Author']; ?></i></p>
    </article>
<?php else : ?>
    <ul>
        <?php foreach ($this->data['news'] as $arrs) : ?>
        <li>
            <h2><a href="/obychenie/yrok-8/article.php?id=<?php echo $arrs['id']; ?>"><?php echo $arrs['Header']; ?></a></h2>
            <?php echo $arrs['Text']; ?>
            <p><i><?php echo $arrs['Author']; ?></i></p>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>