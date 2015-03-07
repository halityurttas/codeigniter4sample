<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Title</title>
  
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
  
  <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
</head>
 
<body class="container">
    <p class="bg-success"><?php echo $isim; ?></p>
    <?php echo form_open('bizimki', array('class' => 'form-horizontal')); ?>
        <div class="form-group">
            <label class="control-label col-sm-3">Adınız:</label>
            <div class="col-sm-9">
                <?php echo form_input(array('name' => 'isim', 'class' => 'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo form_submit(array('name' => 'submit', 'value' => 'Gonder', 'class' => 'btn btn-primary')); ?>
            </div>
        </div>
    <?php echo form_close(); ?>
</body>
</html>