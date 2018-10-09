<?php $this->load->view('template/adminLTE/_header_layout'); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>VAP</b>-Admin Login</a>
  </div>
  <!-- /.login-logo -->
    <div class="login-box-body">
        <?php $this->load->view($subview); ?>
    </div>
</div>

<?php $this->load->view('template/adminLTE/_footer_layout'); ?>