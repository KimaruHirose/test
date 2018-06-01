<!DOCTYPE html>
<html lang="ja">

 <head>
    <meta charaset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>

<body>
        
      <?php mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    
    <img src="4eachblog_logo.jpg"class="logo">
    
    <header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
    </header>
    
<div class="left">
<h1>プログラムに役立つ掲示板</h1>
    
<form method="POST" action="insert.php">
    
    <h3>入力フォーム</h3>
    <label>ハンドルネーム</label><br>
    <input type="text" size="30" name="handlename"><br>
    <label>タイトル</label><br>
    <input type="text" size="30" name="title"><br>
    <label>コメント</label><br>
    <textarea cols="50" rows="7" name="comments"></textarea><br>
    <input type="submit"value="投稿する">
    
    </form>
    

    
    
    <?php        
    while($row = $stmt->fetch()){
    echo"<div class='A'>";
    echo"<h3>".$row['title']."</h3>";
    echo"<p>";
    echo $row['comments'];
    echo"<div class='text'>posted by".$row['handlename']."</div>";
    echo "</div>";
    }
    ?>
    
    
    
    </div>
    
    <div class="right">
     <h2>人気の記事</h2>
      <p>PHP オススメ本</p>
      <p>PHP MyAdminの使い方</p>
      <p>今人気のエディタ Top5</p>
      <p>HTMLの基礎</p>
    　
     <h2>オススメリンク</h2>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Bracketsのダウンロード</p>
     <h2>カテゴリ</h2>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>
    </div>
<footer>copyright (c) internous | 4each blog is the one which provides A to Z about programming.</footer>
    
    
  
    
    </body>
</html>
