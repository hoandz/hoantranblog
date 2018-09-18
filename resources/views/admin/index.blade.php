@extends('admin.master')
@section('main')
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
@stop

@section('script')
<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@stop