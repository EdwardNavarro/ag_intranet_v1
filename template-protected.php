<?php 
/*
Template name: Protected Page
*/
get_header('protected');
?>

<?php if (!(current_user_can('level_0'))){ ?>
<h2>Login</h2>
<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
<input type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />
<input type="password" name="pwd" id="pwd" size="20" />
<input type="submit" name="submit" value="Send" class="button" />
    <p>
       <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</label>
       <input type="hidden" name="redirect_to" value="<?php echo get_option('home'); ?>" />
    </p>
</form>
<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Recover password</a>
<?php } else { ?>
<h2>Logout</h2>
<a href="<?php echo wp_logout_url( home_url() ); ?>">logout</a><br />
<a href="<?php echo get_option('home'); ?>/wp-admin/">admin</a>
<?php }?>

<?php get_footer('protected'); ?>