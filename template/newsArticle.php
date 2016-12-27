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
        <h1><?php var_dump($this->data); echo $this->data['news'][0]['Header']; ?></h1>
        <p><?php echo $this->data['news'][0]['Text']; ?></p>
        <p><i><?php echo $this->data['news'][0]['Author']; ?></i></p>
    </article>
</body>
</html>