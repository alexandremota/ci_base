<?php $this->load->view('includes/v_header'); ?>

<h2 class="text-center mb-5">Acesso ao Sistema</h2>
<div class="container col-md-4 bg-light">

<h3><?php echo lang('login_heading');?></h3>
<p><?php echo lang('login_subheading');?></p>



<div id="infoMessage"><?php //echo $message;?></div>  

<?php

    if (!is_null($message))
    {
        echo '<div class="alert alert-danger" role="alert">';
        echo $message;
        echo '</div>';
    }

?>    
        
    





<div class="login-panel panel panel-default">
<div class="panel-heading">

</div>
  <div class="panel-body">
    <form role="form" action="<?php echo base_url('auth/login'); ?>" method="post">
      <fieldset>
        <div class="form-group">
          <input class="form-control" placeholder="<?php echo lang('login_identity_label') ?>" type="text" autofocus="" name="identity" value="" id="identity" >
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="<?php echo lang('login_password_label')?>" type="password" autofocus="" name="password" value="" id="password" >
        </div>
        <div class="checkbox">
          <label>
            <input name="remember" type="checkbox" value="Remember Me"><?php echo lang('login_remember_label', 'remember');?>
          </label>
        </div>
        <!-- Change this to a button or input when using this as a form -->
        <button type="submit" class="btn btn-sm btn-success"><?php echo lang('login_submit_btn'); ?></button>

      </fieldset>
    </form>
    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  </div>
</div>
  <p class="m-0 text-right"><small>Copyright &copy; Todos direitos reservados</small></p>

</div>
<?php $this->load->view('includes/v_footer'); ?>
