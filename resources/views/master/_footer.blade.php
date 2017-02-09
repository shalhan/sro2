  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
   <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset("/js/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
<!-- DataTables -->
<script src="{{ asset("/js/jquery.dataTables.js")}}"></script>
<script src="{{ asset("/js/dataTables.bootstrap.js")}}"></script>
<!-- SlimScroll -->
<script src="{{ asset("/js/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{ asset("/js/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/js/app.min.js") }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>