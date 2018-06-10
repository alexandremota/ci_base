<?php $this->load->view('includes/v_header'); ?>
<?php $this->load->view('includes/v_nav_admin'); ?>

<div class="container">

<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

     
            <?php echo lang('create_group_name_label', 'group_name');?> 
            <?php echo form_input($group_name,'',array ('class'=>'form-control form-control-sm'));?>
      

     
            <?php echo lang('create_group_desc_label', 'description');?> 
            <?php echo form_input($description,'',array ('class'=>'form-control form-control-sm mb-4'));?>
      

      	<?php echo form_submit('submit', lang('create_group_submit_btn'),array ('class'=>'btn btn-primary btn-sm'));?>
       <a href=<?php echo base_url('auth');?> class="btn btn-danger  btn-sm" role="button" aria-pressed="true">Cancelar</a>

<?php echo form_close();?>

</div>
<?php $this->load->view('includes/v_footer'); ?>