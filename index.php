<?php
    if(isset($_POST['submit']))
    {
        $first = $_POST['first_name'];
        $last =  $_POST['last_name'];
        $mobile = $_POST['mobile'];

        echo "<h2>Success</h2>"; 
    }
?>

<?php
    $servername = "localhost";
    $dbname = "dev_8";
    $username = "root";
    $password = "";
?>

<?php
  $form = new create($servername, $dbname, $username, $password);
  if(isset($_POST['submit']))
  {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $mobile = $_POST['mobile'];

      $form->adddata($first_name, $last_name, $mobile);

  }
?>

<?php
    class create
    {
        public $conxn;
        
        public function __construct($servername, $dbname, $username, $password)
        {
            $this->conxn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        }

        public function adddata($first_name, $last_name, $mobile)
        {
            $query = "INSERT INTO `create_form` VALUES (NULL, ?, ?, ?)";
            $statment = $this->conxn->prepare($query);
            $statment->execute([$first_name, $last_name, $mobile]);
        
        
        }
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
