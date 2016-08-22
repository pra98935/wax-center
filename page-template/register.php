<?php
/**
 * Template Name: Register Page
 */

get_header();

if (is_user_logged_in()) {
    
    echo '<div style="background-color:white;color:#ff6322;padding:10px;">You Are Already Logeed In</div>';

    get_footer();
    
    return;
}

?>
    <div class="container">
        <div id="content" class="site-content row">

            <div role="main" class="content-area col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">

                <form id="register_form" class="edd_form" action="" method="post">
    
                    <fieldset>
                        <legend><span>Register New Account</span></legend>
                        <p>
                            <label for="edd-user-login">Username</label>
                            <input class="required edd-input" type="text" name="user_name" title="Username" Required>
                        </p>

                        <p>
                            <label for="edd-user-email">Email</label>
                            <input class="required edd-input" type="email" name="user_email" title="Email Address" Required>
                        </p>

                        <p>
                            <label for="edd-user-pass">Password</label>
                            <input id="user_pass" class="password required edd-input" type="password" name="user_pass" Required>
                        </p>

                        <p>
                            <label for="edd-user-pass2">Confirm Password</label>
                            <input id="user_pass2" class="password required edd-input" type="password" name="user_pass2" onkeyup="checkPass(); return false;">
                             <span id="confirmMessage" class="confirmMessage"></span>
                        </p>
                        
                        <p>
                            <input class="button" name="role_register_submit" type="submit" value="Register">
                        </p>

                        <p style="color:green"><?php echo $sucees; ?></p>
                        <p style="color:red"><?php echo $insert_failed; ?></p>

                    </fieldset>
                </form>

            </div><!-- #primary -->

            <?php //get_sidebar(); ?>
        </div>
    </div>

<script type="text/javascript">
    
    function checkPass(){
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('user_pass');
        var pass2 = document.getElementById('user_pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        if(pass1.value == pass2.value){
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
} 
</script>

<?php get_footer(); ?>