<?php 
$this->load->view('includes/v_header');

if (!$this->ion_auth->is_admin())
{
      $this->load->view('includes/v_nav_user');
}else{
      $this->load->view('includes/v_nav_admin');
}

?>

<div class="container">

<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

    
            <?php echo lang('change_password_old_password_label', 'old_password');?>
            <?php echo form_input($old_password,'',array ('class'=>'form-control form-control-sm')    );?>
     

     
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> 
            <?php echo form_input($new_password,'',array ('class'=>'form-control form-control-sm')    );?>
      

    
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> 
            <?php echo form_input($new_password_confirm,'',array ('class'=>'form-control form-control-sm mb-3')  );?>
     

      <?php echo form_input($user_id);?>
      <?php echo form_submit('submit', lang('change_password_submit_btn'),array ('class'=>'btn btn-primary btn-sm'));?>
      <a href=<?php echo base_url('auth');?> class="btn btn-danger  btn-sm" role="button" aria-pressed="true">Cancelar</a>

<?php echo form_close();?>
</div>
<?php $this->load->view('includes/v_footer'); ?>
