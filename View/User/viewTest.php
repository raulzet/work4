
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
            <a href="http://localhost/Work4/View/User/profil.php">Back</a>
        </div>


        <div class="container">
            <?php foreach ($tests as $key => $quiz): ?>
                <div>
                    <a href="#"><?= $quiz->getTitle(); ?></a>
                    <p> <?= $quiz->getDescription(); ?></p>



                </div>
            <?php endforeach; ?>  
        </div>

    </body>
</html>