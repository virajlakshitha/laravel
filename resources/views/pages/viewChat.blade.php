<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Chat</title>
</head>
<body>
    <div><?php
        foreach($all as $aa){
            echo $aa->name."<br>";
            echo $aa->town;
        }
        ?>
    </div>
</body>
</html>