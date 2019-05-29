<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>public/bootstrap-4.3.1/favicon.ico">
    <title>Relevamiento - UNCAus</title>
    <link href="<?php echo base_url();?>public/bootstrap-4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/bootstrap-4.3.1/site/docs/4.3/assets/css/docs.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/bootstrap-4.3.1/site/docs/4.3/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/bootstrap-4.3.1/site/docs/4.3/examples/grid/grid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <?php $this->load->view('includes/navbar'); ?>
    </header>
    <main role="main" class="container">
        <?php $this->load->view($content); ?>
    </main>
    <?php $this->load->view('includes/footer');?>
  </body>
</html>
