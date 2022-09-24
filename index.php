<?php
    $server = 'localhost';
    $user = 'root';
    $dbname = 'dev_8';
    $pass = '';

    echo "succesefully";

    class create
    {
        public $conn;
        public function __construct($server,$user,$dbname,$pass)
        {
            $this->conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
        }
        public function adddata($first_name,$last_name,$mobile)
        {
            $sql = "INSERT INTO create_form(first_name,last_name,mobile) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$first_name,$last_name,$mobile]);
        }
    }
    $inter = new create($server,$user,$dbname,$pass);
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $mobile = $_POST['mobile'];

        $inter->adddata($first_name,$last_name,$mobile);
    }
    
   
?>
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
        <br><input type="text"name="first_name"placeholder="First_Name"></br>
        <br><input type="text"name="last_name"placeholder="last_name"></br>
        <br><input type="text"name="mobile"placeholder="mobile"></br>
        <br><button type="submit"name="submit">send</button></br>
        <h2>
            <?php
                if(isset($_POST['submit']))
                {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    echo "Hello $first_name $last_name ! Greetings from BindAPI";
                }
            ?>
        </h2>
    </form>
</body>
</html>
