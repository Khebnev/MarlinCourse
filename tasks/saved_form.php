
      <?php
                       $pdo = new PDO("mysql:host=MarlinCourse; dbname=MarlinCourse", "mysql", "mysql");
$text = $_POST['text'];
                    $sql = "insert into tasknine (text) values (:text)";
   $statement = $pdo->prepare($sql);
   $statement->execute(['text'=> $text]);


header("Location: /task_9.php");


