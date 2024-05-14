<!DOCTYPE html>
<html>
    <head>
        <title>Your Opinion</title>
        <style>
            h1{
                color: blue;
                text-align:center;
                margin-top: 50px;
                margin-bottom:50px;
            }
            input{
                display:block;
                margin-bottom:10px;
            padding:15px;
            width: 350px;
            margin:auto;
            }
            button{
                background-color: blue;
                padding:10px;
                width:100px;
                margin-left:40%;
            }

        </style>
    </head>
    <body>
        <h1>what are you think</h1>
        <form action="add_subject.php" method="post">
        <input type="text"placeholder="your name"name="title">
        <br>
        <input type="text"placeholder="your opinion"name="subject">
        <br>
        <input type="file" name="image">
        <button tybe="submit" name="save_subject">my opinion</button>
        </form>
    </body>
</html>