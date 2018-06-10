<?php $this->load->view('includes/v_header'); ?>

<div class="container">

<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

     
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
      	<?php echo form_input($identity,'',array ('class'=>'form-control form-control-sm mb-4'));?>
   

      <?php echo form_submit('submit', lang('forgot_password_submit_btn'),array ('class'=>'btn btn-primary btn-sm'));?>
      <a href=<?php echo base_url('auth');?> class="btn btn-danger  btn-sm" role="button" aria-pressed="true">Cancelar</a>

<?php echo form_close();?>
</div>