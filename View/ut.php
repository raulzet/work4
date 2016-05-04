
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

<div class="container">
        <?php foreach ($tests as $key => $quiz): ?>
            <div>
                <h4><?= $quiz->getTitle(); ?></h4>
                <p> <?= $quiz->getDescription(); ?></p>



            </div>
        <?php endforeach; ?>  
</div>

    </body>
</html>