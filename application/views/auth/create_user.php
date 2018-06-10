<?php $this->load->view('includes/v_header'); ?>
<?php $this->load->view('includes/v_nav_admin'); ?>

<div class="container">

<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

            <?php echo lang('create_user_fname_label', 'first_name');?>
            <?php echo form_input($first_name,'',array ('class'=>'form-control form-control-sm')) ;?>
      

     
            <?php echo lang('create_user_lname_label', 'last_name');?>
            <?php echo form_input($last_name,'',array ('class'=>'form-control form-control-sm'));?>
      
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity,'',array ('class'=>'form-control form-control-sm'));
          echo '</p>';
      }
      ?>

     
            <?php echo lang('create_user_company_label', 'company');?> 
            <?php echo form_input($company,'',array ('class'=>'form-control form-control-sm'));?>
     

      
            <?php echo lang('create_user_email_label', 'email');?> 
            <?php echo form_input($email,'',array ('class'=>'form-control form-control-sm'));?>
      

      
            <?php echo lang('create_user_phone_label', 'phone');?>
            <?php echo form_input($phone,'',array ('class'=>'form-control form-control-sm'));?>
     

      
            <?php echo lang('create_user_password_label', 'password');?> 
            <?php echo form_input($password,'',array ('class'=>'form-control form-control-sm'));?>
      

      
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> 
            <?php echo form_input($password_confirm,'',array ('class'=>'form-control form-control-sm mb-4'));?>
      

            <?php echo form_submit('submit', lang('create_user_submit_btn'),array ('class'=>'btn btn-primary btn-sm'));?>
            <a href=<?php echo base_url('auth');?> class="btn btn-danger  btn-sm" role="button" aria-pressed="true">Cancelar</a>
           
<?php echo form_close();?>
</div>
