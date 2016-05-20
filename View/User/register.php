
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style> 
            .container{
                text-align: center;
                margin-top: 13%;
            }
            .back{
                margin-left: 110px;
                margin-top: 3px;
                width: 84px;
                height: 45px;   
            }
        </style>
    </head>
    <body>
        <div class="back">
            <a href="http://localhost/Work4/View/User/auth.php">Back</a>
        </div>
        <div  class= "container">
            <form action ="http://localhost/Work4/index.php/?handler=auth&action=signUp" method="post">
                <label>Name: </label>
                <input type ="text" name ="name" placeholder="Name"/>
                <br><br>
                <label>Username: </label>
                <input type ="text" name ="username" placeholder="Username"/>
                <br><br>
                <label>Password: </label>
                <input type ="password" name ="password" placeholder="Password"/>
                <br><br>
                <label>Email: </label>
                <input type ="text" name ="email" placeholder="Email"/>
                <br><br>
                <input type ="submit" value="Register"/>
            </form>
        </div>



    </body>
</html>