<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text"name="first_name"placeholder="First_Name">
        <input type="text"name="second_name"placeholder="Second_Name">
        <button type="submit"name="submit">send</button>
        <h2><?php
                if(isset($_POST['submit']))
                {
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                    echo "Hello $first_name $second_name! Greetings from BindAPI";
                }
            ?>
        </h2>
    </form>
</body>
</html>
