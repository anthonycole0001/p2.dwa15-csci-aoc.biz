<!DOCTYPE html>

<?php if(isset($user_name)): ?>
    <h2>This is the profile for <?=$user_name?></h2>
<?php else: ?>
    <h2>No user has been specified, please login</h2>
<?php endif; ?>


  <!-- Primary Page Layout
  ================================================== -->


    <!-- Start Page Content -->
        <div class="container">
            <div class="jumbotron">
                <div class="profile-card vcard">
                    <h2><?=$user->first_name?>'s profile </h2>
                    <div class="profile-picture">
                        <img width="100" height="100" alt="Anthony Cole" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/067/386/3b6f93a.jpg"></img>
                        <div class="edit-photo"><a href=" "></a>
                        </div>
                    </div>
    

                </div>

            </div>
        </div>
        
    <br />
    <br />
    <hr>
    <br />


</html>