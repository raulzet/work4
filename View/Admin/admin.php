

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style> 
            .container{
                text-align: center;
                margin-top: 18%;
            }
            
        </style>
    </head>
    <body>

        <div class="container">


            <form  method="post" action="http://localhost/Work4/index.php/?handler=qu&action=addQuestion" >


                <input type="submit"  value="Create Questions"/>

            </form>


            <form  method="post" action="http://localhost/Work4/index.php/?handler=test&action=addTest" >


                <input type="submit"  value="Create Quiz"/>

            </form>

            <form  method="post" action="http://localhost/Work4/index.php/?handler=auth&action=logOut" >


                <input type="submit" name="logOut" value="Log Out"/>

            </form>

        </div>


    </body>
</html>

