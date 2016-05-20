<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <style> 
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

        
        <?php
        $file = json_decode(file_get_contents(QUESTION_PATH), true);
        foreach ($file as $data) {
            ?>

            <form>
                <label> <?php echo $data['question']; ?></label>
    <?php
    $answers = explode(',', $data['answer']);
    foreach ($answers as $ans) {
        ?>

                    <input type="radio" name="ans" value="<?= $ans ?>"><label><?= $ans ?></label><br>
    <?php } ?>

            </form>

    <?php }
?>
    </body>
</html>