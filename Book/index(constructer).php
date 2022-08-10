<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book OOPP{ with Constructer</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price">

        <br>

        <label for="Author">Author:</label>
        <input type="text" name="author" id="author">
<br>
        <button type="submit" name="btn_submit">Submit</button>

    </form>
 
    <?php
    include "Book(constructer).php";

    if(isset($_POST['btn_submit'])){
        $book = new Book($_POST['title'], $_POST['price']);

        echo "Title: " . $book->getTitle() . "<br>";
        echo "Author: " . $book->getAuthor() . "<br>";
        echo "Price: " . $book->getPrice();
        
    }
    
    ?>
</body>
</html>