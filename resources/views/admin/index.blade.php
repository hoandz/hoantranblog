@extends('admin.master')
@section('main')


@if (isset($post))
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div>
          <h1>Tiêu đề</h1>
          <input id="post_id" value="{{ $post->id }}" style="display: none;"/>
          <input type="email" name="title" class="form-control page-header" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề" value="{{ $post->title }}"><br>
          <h1>Nội dung</h1>
          <textarea name="content" id="editor">
            {{ $post->content }}
          </textarea><br><br>
          <button class="btn btn-primary" style="float: right;" onclick="updatePost()">Update</button>
        </div>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@else
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div>
          <h1>Tiêu đề</h1>
          <input type="email" name="title" class="form-control page-header" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề"><br>
          <h1>Nội dung</h1>
          <textarea name="content" id="editor">
          </textarea><br><br>
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
@endif
@stop

@section('script')
<script>
  var globalEditor = null;

  function createPost() {
        console.log("Tao Post");

        // Lay title
        // Lay content
        var title = $('#exampleInputEmail1').val();
        var content = globalEditor.getData();
        console.log(title);
        console.log(content);
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
            // console.log(response);
            window.location.href = '/tatcabaiviet';
          }
        });
    }

    function updatePost() {
        console.log("Tao Post");
        // Get data
        var id = $('#post_id').val();
        var title = $('#exampleInputEmail1').val();
        var content = globalEditor.getData();

        // Create request data
        var submitData = {
            id: id,
            title: title,
            content: content
          };

        console.log(submitData);
        // Submit data
        $.ajax({
          type: "GET",
          url: "http://localhost:8080/update_post",
          data: submitData,
          success: function(response) {
            console.log(response);
            // Submit success
            console.log("Cap nhat thanh cong !");
            window.location.href = '/tatcabaiviet';
          }
        });
    }

    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        globalEditor = editor;
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@stop