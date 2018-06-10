<?php $this->load->view('includes/v_header'); ?>
<?php $this->load->view('includes/v_nav_admin'); ?>

<div class="container">
<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

     
            <?php echo lang('edit_user_fname_label', 'first_name');?>
            <?php echo form_input($first_name,'',array ('class'=>'form-control form-control-sm'));?>
     

      
            <?php echo lang('edit_user_lname_label', 'last_name');?>
            <?php echo form_input($last_name,'',array ('class'=>'form-control form-control-sm'));?>
     

      
            <?php echo lang('edit_user_company_label', 'company');?>
            <?php echo form_input($company,'',array ('class'=>'form-control form-control-sm'));?>
      

      
            <?php echo lang('edit_user_phone_label', 'phone');?>
            <?php echo form_input($phone,'',array ('class'=>'form-control form-control-sm'));?>
      

      
            <?php echo lang('edit_user_password_label', 'password');?>
            <?php echo form_input($password,'',array ('class'=>'form-control form-control-sm'));?>
    

    
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
            <?php echo form_input($password_confirm,'',array ('class'=>'form-control form-control-sm'));?>
      

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="form-check-label">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
    </br>
      <?php echo form_submit('submit', lang('edit_user_submit_btn'),array ('class'=>'btn btn-primary btn-sm mt-3'));?>
      <a href=<?php echo base_url('auth');?> class="btn btn-danger  btn-sm mt-3" role="button" aria-pressed="true">Cancelar</a>

<?php echo form_close();?>
</div>
<?php $this->load->view('includes/v_footer'); ?>
