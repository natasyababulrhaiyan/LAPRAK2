<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<H3> Cara 1 </h3>";
    $i = 1;
    while ($i <= 10)
    {
        print $i++;
    }
    echo "<BR>";

    echo "<H3> Cara 2 </h3>";
    $i = 1;
    while ($i <= 10):
        print $i;
        $i++;
    endwhile;
    ?>
</body>
</html>