
<?php //var_dump($data) ?>

<?php foreach ($data as $key=>$question): ?>
<div>
    <h4><?=$key ?><?= $question->getQuestion(); ?></h4>
    <p> <?= $question->getAnswer(); ?></p>
    <a href="http://localhost/Work4/index.php/?handler=qu&action=delete&id=<?=$key ?>">Delete</a>
</div>
<?php endforeach; ?>  

