@extends('admin.master')
@section('main')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Tiêu đề</h1>
                    <input type="email" name="title" class="form-control page-header" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề"><br>
                    <input type="text" style="display:none;" name="content" class="nhap_tieu_de" placeholder="Nhập tiêu đề tại đây">
                    <h1>Nội dung</h1>
                    <textarea name="content" id="editor"></textarea><br><br>
                    <button class="btn btn-primary" style="float: right;" onclick="createPost()">Public</button>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop

@section('script')
<script>
    function createPost() {
        console.log("Tao Post");

        // Lay title
        // Lay content
        var title = $('#exampleInputEmail1').val();
        var content = $('#editor').val();

        // Tao form ajax
        // Ban len server
        // lay ket qua tra ve
        $.ajax({
          type: "POST",
          beforeSend: function(request) {
            request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
          },
          url: "http://localhost:8080/create_post",
          data: {
            title: title,
            content: content
          },
          success: function(response) {
            console.log(response);
          }
        });
    }
</script>
@stop