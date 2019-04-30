<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Server</title>
</head>
<body>
    <div style="margin: 25px 0 0 20px">
        <form method="POST" action="/chat">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Message
            <br><br><input type="text" name="message">
            <br><br><input type="submit" name="submit">
        </form>
    </div>
    <div style="margin-top: 100px">
        <?php
            foreach ($all as $key) {
                echo $key->name."     ";
                echo $key->town."<br>";
            }
        ?>
    </div>
</body>
</html>