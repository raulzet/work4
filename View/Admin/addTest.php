

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



       

        <form class ="container" method ="post" action ="http://localhost/Work4/index.php/?handler=test&action=upload">
            <br/>

            <label>Id Quiz: </label>
            <input type ="text" name ="id" />

            <br/>
            <br/>
            <label>Title : </label>
            <input type ="text" name ="title" />

            <br/>
            <br/>
            <label> Description: </label>
            <input type ="text" name ="description" />

            <br/>
            <br/>
            <label> Question Id </label>
            <input type ="text" name ="questionId" />

            <br/>
            <br/>
            <input type="submit"  value="Upload"/>

        </form>






    </body>
</html>


