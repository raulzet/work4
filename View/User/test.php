<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>

    </head>
    <body>
<?php
$file = json_decode(file_get_contents(QUESTION_PATH),true);
foreach ($file as $data)
{
    
?>
        <form>
            <label> <?php echo $data['question'];?></label>
            <?php $answers = explode(',',$data['answer']);
                foreach ($answers as $ans)
                {
            ?>
            
                <input type="radio" name="ans" value="<?=$ans?>"><label><?=$ans?></label><br>
                <?php }?>
                
        </form>

<?php
}?>
    </body>
</html>