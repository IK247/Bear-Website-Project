<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <title>Document</title>
</head>
<ul class="paragraph" id="Top">
  <li><a href="index.html"> Home Page</a> </li>
     
  <br>

  <li><a href="polar_bear.html">Polar Bear</a>   </li>
  <br>

  <li><a href="ask_any_question.php">Ask any Question</a>   </li>
  <br>
</ul>
 
<body>
    <h2 class="title">
      
      Questions?

    </h2>
    <form action="contact.php" method="post">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="question">Question:</label><br>
      <textarea type="text" id="question" name="question" rows="12" cols="35">Email you question to me, and I'll answer...probably</textarea>
      <input type="submit" value="Submit">
    </form> 
</body>
</html>