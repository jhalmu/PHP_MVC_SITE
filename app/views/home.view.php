<!DOCTYPE html>
<html lang="fi">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP MVC Practise</title>
<head>
    <meta charset="utf-8" />

    <link href="<?= CSS_URL ?>/styles.css" rel="stylesheet"/>
    <script defer type="text/javascript" src="<?= JS_URL ?>/main.js"></script>
</head>
<body>
<h1>Home page view</h1>
<img src="<?= IMG_URL ?>/testimage.jpg" alt="testimage" />
<?php
if ($data)
echo "Hi, " . $data['username'];
?>

<div class="test">Tämä on testi</div>
</body>
</html>