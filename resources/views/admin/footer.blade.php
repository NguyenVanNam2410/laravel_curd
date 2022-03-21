    <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Thực tập sinh Nguyễn Văn Khang WEB_CURD</strong>
  </footer>
</div>
<script src="{{asset('LTE/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('LTE/dist/js/adminlte.min.js')}}"></script>
  <script type="text/javascript">
    $("#product_list").on('click','.active',function(e){
      e.preventDefault();
      const url = $(this).attr('data-active');
      const text = $(this).html();
      if(text == 'còn hàng')
      {
        $(this).html('hết hàng')
        $(this).removeClass('btn-primary').addClass('btn-danger')
      }else{
        $(this).removeClass('btn-danger').addClass('btn-primary')
        $(this).html('còn hàng')
      }
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'GET',
        url: url,
        success: function(res)
        {

        }
      });
    })
  </script>
</body>
</html>