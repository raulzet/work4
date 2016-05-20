

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
            .button{
                text-align: center;
            
            }
        </style>
    </head>
    <body>

        <form class= "container" action ="http://localhost/Work4/index.php/?handler=auth&action=login" method="post">
            <label>Username: </label>
            <input type ="text" name ="username" placeholder="Username"/>
            <br><br>
            <label>Password: </label>
            <input type ="password" name ="password" placeholder="Password" />
            <br><br>
            <input type ="submit" value="Log In"/>
            
            
            

        </form>
        <div class="button">      
<form method="post" action="http://localhost/Work4/index.php/?handler=auth&action=showRegister">
            <br/>
            <input type="submit" value="Sing Up"/>

             </form>
    </div>

    </body>
</html>


