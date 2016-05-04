
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style> 
            .container{
                text-align: center;
                margin-top: 15%;
            }
        </style>
    </head>
    <body>

        <form class= "container" action ="http://localhost/Work4/index.php/?handler=auth&action=signUp" method="post">
            <label>Name: </label>
            <input type ="text" name ="name" />
            <br><br>
            <label>Username: </label>
            <input type ="text" name ="username" />
            <br><br>
            <label>Password: </label>
            <input type ="password" name ="password" />
            <br><br>
            <label>Email: </label>
            <input type ="text" name ="email" />
            <br><br>

            <input type ="submit" value="Register"/>
            <a href="http://localhost/Work4/View/User/auth.php">Back</a>
        </form>





    </body>
</html>