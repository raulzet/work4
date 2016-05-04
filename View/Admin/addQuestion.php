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



        <form class ="container" method ="post" action ="http://localhost/Work4/index.php/?handler=qu&action=upload">
            <br/>

            <label> Id Question: </label>
            <input type ="text" name ="id" />

            <br/>
            <br/>
            <label>Question: </label>
            <input type ="text" name ="question" />

            <br/>
            <br/>
            <label> Answers: </label>
            <input type ="text" name ="answer" />

            <br/>
            <br/>
            <label> Correct Answer </label>
            <input type ="text" name ="correctAnswer" />

            <br/>
            <br/>
            <input type="submit" value="Upload"/>

        </form>


    </body>
</html>


