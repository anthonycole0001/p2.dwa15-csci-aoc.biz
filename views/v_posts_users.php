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

            <section>
                <article>
                    <?php foreach($users as $user): ?>

                    <!-- Print this user's name -->
                    <strong><?=$user['first_name']?></strong> <strong><?=$user['last_name']?></strong><br>

                    <!-- If there exists a connection with this user, show a unfollow link -->
                    <?php if(isset($connections[$user['user_id']])): ?>
                        <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

                    <!-- Otherwise, show the follow link -->
                    <?php else: ?>
                        <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
                    <?php endif; ?>

                    <br><br>

                    <?php endforeach; ?>
                </article>
            </section>


        </div>
    </div>
    <br />
    <br />
    <hr>
    <br />
    
</html>