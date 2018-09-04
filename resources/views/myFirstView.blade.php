<h1>Hello Laravel</h1>
<h2>This is Myfirst</h2>
<!-- @if($so > 0)
	<p>So Duong</p>
@elseif($so < 0)
	<p>Khong Phai So Duong</p>
@else
	<p>la so khong</p>
@endif -->


<!-- @for($i = 1; $i <= 10; $i++)
	{{$i}}<br>
@endfor -->

<!-- @while($so <=10)
	{{$so}}
	<?php 
		$so++;
	 ?>
@endwhile -->

@foreach($postname as $value)
	{{$value}}<br>
@endforeach