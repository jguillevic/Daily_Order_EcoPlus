<!doctype html>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Ordre du daily Eco+</title>
    <meta name="description" content="Ordre du daily Eco+">
    <meta name="author" content="JGuillevic">   
    <meta property="og:title" content="Ordre du daily Eco+">
    <meta property="og:type" content="website">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-3 pb-3">Ordre du daily Eco+</h1>
    <div class="d-flex justify-content-center">
<?php
    $members = [ 'Jérôme', 'Christopher', 'Pierre', 'Brayan', 'Olivier', 'Corentin', 'Nathalie' ];
    shuffle($members);
    $order = 1;
    foreach ($members as $member) {
        echo '<h2 class="text-center">' . $order . '. ' . $member . '</h2>';
        $order++;
    }
?>
    </div>
</body>
</html>


