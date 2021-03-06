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
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Post a comment to your DataGram followers<em></em></h4>
                                <p>&nbsp;</p>
                                <form role="form" action="/posts/p_add" method="POST" id="postComments" autocomplete="off">
                                    <div class="form-group">
                                        <input type="textarea" required class="form-control" id="inputComment" placeholder="add your comments here" name="content" tabindex="1">
                                        <img class="error" src="/img/check_red.png" alt=""/>
                                        <img class="check" src="/img/check_green.png" alt="" />
                                    </div>
                                <!--<span class="error"></span>
                                <?php if(isset($submit)): ?>
                                    <div class='submit'>
                                        Your comment was posted. If you'd like to send another post, please do so now.
                                    </div>
                                    <br>
                                <?php endif; ?>-->
                                    <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="icon-lock"></i> Submit Comment</button>

                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <article>
                <?php foreach ($posts as $post): ?>

                <strong><?=$post['first_name']?> <?=$post['last_name']?> posted:</strong><br>
                <?=$post['content']?><br>

                <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
                <?=Time::display($post['created'])?><br><br><br>
                </time>


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