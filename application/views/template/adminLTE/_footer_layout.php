
<script src="<?=base_url("VAP/public/adminLTE")?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url("VAP/public/adminLTE")?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url("VAP/public/adminLTE")?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url("VAP/public/adminLTE")?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url("VAP/public/adminLTE")?>dist/js/adminlte.min.js"></script>
<script src="<?=base_url('VAP/public/adminLTE')?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();

     $(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
        });
    });
  })
</script>
</body>
</html>