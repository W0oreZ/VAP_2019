
<script src="<?=base_url("/public/")?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url("/public/")?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url("/public/")?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url("/public/")?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url("/public/")?>dist/js/adminlte.min.js"></script>
<script src="<?=base_url('/public/')?>plugins/iCheck/icheck.min.js"></script>
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