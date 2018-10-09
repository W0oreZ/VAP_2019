<?php $this->load->view('admin/components/_layout_header') ?>
<style type="text/css">
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body style="background:#555;">

	<div class="modal-show" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php $this->load->view($subview);?>
      <div class="modal-footer">
        &copy;<?php echo $meta_title?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
