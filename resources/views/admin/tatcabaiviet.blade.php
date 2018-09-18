@extends('admin.master')
@section('main')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="alert alert-info" style="margin-top: 20px;" role="alert">
                        <p style="text-align: center; font-size: 25px; font-weight: bold;">Tất cả bài viết</p>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">introduce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <th>Xóa</th>
                                    <th>Sửa</th>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-secondary">Previous</button>
                            <button type="button" class="btn btn-secondary">1</button>
                            <button type="button" class="btn btn-secondary">2</button>
                            <button type="button" class="btn btn-secondary">3</button>
                            <button type="button" class="btn btn-secondary">4</button>
                            <button type="button" class="btn btn-secondary">Next</button>
                        </div>
                    </div>
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