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
            <a href="http://localhost/Work4/View/Admin/admin.php">Back</a>
        </div>

        <form class ="container" method ="post" action ="http://localhost/Work4/index.php/?handler=qu&action=upload">
            <br/>

            <label> Id Question: </label>
            <input type ="text" name ="id" placeholder="Id"/>

            <br/>
            <br/>
            <label>Question: </label>
            <input type ="text" name ="question" placeholder="Question Text" />

            <br/>
            <br/>
            <label> Answers: </label>
            <input type ="text" name ="answer" placeholder="Answers"  />

            <br/>
            <br/>
            <label> Correct Answer </label>
            <input type ="text" name ="correctAnswer" placeholder="Correct Answers"  />

            <br/>
            <br/>
            <input type="submit" value="Upload"/>

        </form>




    </body>
</html>


