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
<article>
    <?php foreach ($this->data['news'] as $article) : ?>
        <h1><?php echo $article['Header']; ?></h1>
        <p><?php echo $article['Text']; ?></p>
        <p><i><?php echo $article['Author']; ?></i></p>
    <?php endforeach; ?>
</article>
</body>
</html>