

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
            .test{
                text-align: center;
            }
            .out{
                text-align: center;
            }
        </style>
    </head>
    <body>

        <form class ="container" method ="post" action="http://localhost/Work4/index.php/?handler=test&action=showTest">
            <input type="submit"  value="Test"/>
        </form> 


        <form class ="test" method ="post" action="http://localhost/Work4/index.php/?handler=test&action=showQuiz">
            <input type="submit"  value="Show Quiz"/>

        </form> 


        <form class ="out" method="post" action="http://localhost/Work4/index.php/?handler=auth&action=logOut" >
            <br/>
            <input type="submit" value="Log out"/>
        </form>


    </body>
</html>
