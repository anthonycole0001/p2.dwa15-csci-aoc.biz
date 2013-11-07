<!DOCTYPE html>

<?php if($user): ?>
        <h1>Hello <?=$user->first_name;?></h1>
            <?php else: ?>
        <h1>Please sign up or login</h1>
<?php endif; ?>


  <!-- Primary Page Layout
  ================================================== -->


    <div class="container">
        <div class="jumbotron">
            <article>
            <?php foreach ($posts as $post): ?>

            <strong><?=$post['first_name']?> <?=$post['last_name']?> posted:</strong><br>
            <?=$post['content']?><br>

            <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
            <?=Time::display($post['created'])?><br><br><br>
            </time>


            <?php endforeach; ?>
            </article>

        
        </div>
    </div>
    <br />
    <br />
    <hr>
    <br />
    
</html>