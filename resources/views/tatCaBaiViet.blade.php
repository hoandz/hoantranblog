<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('local/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div class="nav_menu">
			<ul class="menu">
				<a href="{{url('/admin')}}"><li><i class="fa fa-edit"></i>Bài Viết Mới</li></a>
				<a href="{{url('/tatcabaiviet')}}"><li><i class="fa fa-th"></i>Tất Cả Bài Viết</li></a>
			</ul>
	</div>
	<div class="bai_viet_moi">
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif

		<div class="container editer">	
            <div class="tatcabaiviet">
                <div class="id">
                    <p>Id</p>
                </div>
                <div class="title">
                    <p>Title</p>
                </div>
                <div class="content">
                    <p>Content</p>
                </div>
            </div>
            @foreach($article_composition as $a)
            <div class="tatcabaiviet2">
                <div class="id">
                    <p>{{$a->id}}</p>
                </div>
                <div class="title">
                    <p>{{$a->title}}</p>
                </div>
                <div class="content">
                    <p>{{$a->content}}</p>
                </div>
                <div class="xoa_sua">
                    <div class="xoa">
                        <a href="{{url('/delete')}}/{{ $a->id }}">Xóa</a>
                    </div>
                    <div class="sua">
                        <a href="{{url('/editdata')}}/{{ $a->id }}">Sửa</a>
                    </div>
                </div>
            </div>
            @endforeach
		</div>
	</div>
	
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <!-- <script src="{{asset('js/admin.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>