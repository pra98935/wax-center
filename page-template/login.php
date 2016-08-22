<?php
/**
 * Template Name: Login Page
 */

get_header();
?>

    <div class="container">
        <div id="content" class="site-content row">

            <div role="main" class="content-area col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">

                <form class="edd_form" action="" method="post">
                    <fieldset>
                        <legend><span>Log into Your Account</span></legend>
                        <p>
                            <label for="edd_user_login">Username or Email</label>
                            <input name="login_user_login" class="required edd-input" type="text" title="Username or Email" Required>
                        </p>
                        <p>
                            <label for="edd_user_pass">Password</label>
                            <input name="login_user_pass" class="password required edd-input" type="password" Required>
                        </p>
                        <p>
                            <input type="submit" name="user_login_submit" class="edd_submit" value="Log In">
                        </p>
                        <p><?php echo $user_login_failed; ?></p>
                        
                    </fieldset>
                </form>

            </div><!-- #primary -->
        </div>
    </div>

<?php get_footer(); ?>