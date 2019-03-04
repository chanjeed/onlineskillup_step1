<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        print("あなたの名前は「 ${name} 」です。<br>");
        $mail = htmlspecialchars($_POST["mail"]);
        print("あなたのメールは「 ${mail} 」です。<br>");
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「 ${comment} 」です。<br>");
      } else {
    ?>

        <form method="POST" action="index.php">
          <p>Name</p>
          <input name="name" /><br><br>
          <p>E-mail</p>
          <input name="mail" /><br><br>
          <p>Comment</p>
          <input name="comment" /><br><br>
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>
