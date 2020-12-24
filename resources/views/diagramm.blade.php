@extends('app')
@section('content')
<head>
<!--
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
-->
<link rel="stylesheet" href="https://snipp.ru/cdn/morris.js/0.5.1/morris.css">

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/raphael/2.1.0/raphael-min.js"></script>
<script src="https://snipp.ru/cdn/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
 <!-- Use EJS to print out our data-->
<div id="visits" style="height: 250px; width: 50%;"></div>

 <script>

new Morris.Bar({
	element: 'visits',
	data: <?php echo json_encode($res); ?>,
	xkey: 'year',
	ykeys: ['value'],
	labels: ['Посещаемость']
});
</script>
</body>
@endsection