

<?php foreach ($tests as $key=>$quiz): ?>
<div>
    <h4><?=$key ?> <?= $quiz->getTitle(); ?></h4>
  <a href="http://localhost/Work4/index.php/?handler=test&action=delete&id=<?=$key ?>">Delete</a>

   
</div>
<?php endforeach; ?>  

