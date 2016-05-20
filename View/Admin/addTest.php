

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


        <form class ="container" method ="post" action ="http://localhost/Work4/index.php/?handler=test&action=upload">
            <br/>

            <label>Id Quiz: </label>
            <input type ="text" name ="id" placeholder="Quiz Id" />

            <br/>
            <br/>
            <label>Title : </label>
            <input type ="text" name ="title" placeholder="Quiz Title"/>

            <br/>
            <br/>
            <label> Description: </label>
            <input type ="text" name ="description" placeholder="Description" />

            <br/>
            <br/>
            <label> Question Id </label>
            <input type ="text" name ="questionId" placeholder="Question Ids"/>

            <br/>
            <br/>
            <input type="submit"  value="Upload"/>

        </form>






    </body>
</html>


