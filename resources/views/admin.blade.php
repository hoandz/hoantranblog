<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('local/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
	<div class="nav_menu">
			<ul class="menu">
				<a href="{{url('/admin')}}"><li><i class="fa fa-edit"></i>Bài Viết Mới</li></a>
                <a href="{{url('/tatcabaiviet')}}"><li><i class="fa fa-th"></i>Tất Cả Bài Viết</li></a>
			</ul>
	</div>
	<div class="bai_viet_moi">
		<div class="container editer">	
            <h2>Tiêu đề bài viết</h2>
            <form action="verify" method="post" >
                @csrf
                <input type="text" name="title" class="nhap_tieu_de" placeholder="Nhập tiêu đề tại đây">
                <input type="text" style="display:none;" name="content" class="nhap_tieu_de" placeholder="Nhập tiêu đề tại đây">
                <h2>Nhập nội dung bài viết</h2>
                <div id="editor">
                </div>
                <h2>Nhập trích dẫn tại đây</h2>
                <input type="text" name="quote_content" class="nhap_tieu_de" placeholder="Nhập trích dẫn tại đây">
                <h2>Nhập tóm tắt bài viết tại đây</h2>
                <input type="text" name="summary_content" class="nhap_tieu_de" placeholder="Nhập trích dẫn tại đây">
                <button type="submit" class="btn btn-primary">Đăng Bài</button>
            </form>        
		</div>
	</div>
	

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <!-- <script src="{{asset('js/admin.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
      var quill = new Quill('#editor', {
        theme: 'snow',
      });
      var form = document.querySelector('form');
      console.log(form);
        form.onsubmit = function() {
          var about = document.querySelector('input[name=content]');
          var content = document.querySelector('.ql-editor').innerHTML;
          about.value = content;
          return true;
        };

    </script>
</body>

</html>