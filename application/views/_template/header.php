<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        // var_dump($Gcss);
        if(isset($Gcss)) {
            foreach ($Gcss as $style) {
    ?>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/'.$style);?>">
    <?php
// echo base_url('assets/css/'.$style).'<br/>';
            }
        }

        if (isset($Gjs)) {
            foreach ($Gjs as $JS) {
                
    ?>
            <script src="<?php echo base_url('assets/js/'.$JS);?>"></script>
    <?php
            }
        }

        if(isset($css)) {
            foreach ($css as $style) {
    ?>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/'.$style);?>">
    <?php
            }
        }

        if(isset($js)) {
                foreach ($js as $JS) {
    ?>
                    <script src="<?php echo base_url('assets/js/'.$JS);?>"></script>
    <?php
                }
        }
    ?>

    <title>ISPM Subscribe</title>   
    
</head>
<body>
        <?php $this->load->view('_template/menu');?>