@extends('app')

@section('content')
<!--
<div align="center">
	<img  class ="sp-image" align="center" width="400px" src="{{ asset('/images/logo2.png') }}"/>
</div>
-->
<div class="container">
	
<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading header-style">Home</div>

				<div class="panel-body header-style">
					@if (Auth::user()->is_recruiter)
						This is the home page and you are logged in as RECRUITER :)
					<!--
						<?php
						/*
							// ID статьи
							$post_id = 111;
 
							// Подключение к БД (далее в примерах его не будет).
							$dbh = new PDO('mysql:dbname=3035553501;host=localhost', 'root', '');
							 
							$sth = $dbh->prepare("SELECT * FROM `visits` WHERE `page_id` = ? AND `date` = CURDATE()");
							$sth->execute(array($post_id));
							$res = $sth->fetch(PDO::FETCH_ASSOC);
							if (empty($res)) {
								$sth = $dbh->prepare("INSERT INTO `visits` SET `page_id` = ?, `counter` = 1, `date` = CURDATE()");
								$sth->execute(array($post_id));
							} else {
								$sth = $dbh->prepare("UPDATE `visits` SET `counter` = `counter` + 1 WHERE `id` = ?");
								$sth->execute(array($res['id']));
							}
						?>
					@elseif (Auth::user()->is_jobseeker)
						This is the home page and you are logged in as JOB-SEEKER :)
						<?php
							// ID jobseeker'a
							$post_id = 123;
 
							// Подключение к БД
							$dbh = new PDO('mysql:dbname=3035553501;host=localhost', 'root', '');
							 
							 // Добавить lock table, пока кто-то логинится
							
							$sth = $dbh->prepare("SELECT * FROM `visits` WHERE `page_id` = ? AND `date` = CURDATE()");
							//$res = DB::select('select * from visits where page_id = ? and date = CURDATE()', [$post_id]);
							//lock
							$sth->execute(array($post_id));
							$res = $sth->fetch(PDO::FETCH_ASSOC);
							//while (lock)
							//	if (!lock)
							//		break;
							//array_values($array)[0];
							//echo $res;
							//echo json_encode(array_values($res)[1]);
							if (empty($res)) {
								DB::insert('insert into visits (page_id, counter, date) values (?, ?, CURDATE())', [$post_id, 1]);
								//$sth = $dbh->prepare("INSERT INTO `visits` SET `page_id` = ?, `counter` = 1, `date` = CURDATE()");
								//$sth->execute(array($post_id));
							} else {
								DB::update('update visits set counter = counter + 1 where id = ?', [$res['id']]);
								//$sth = $dbh->prepare("UPDATE `visits` SET `counter` = `counter` + 1 WHERE `id` = ?");
								//$sth->execute(array($res['id']));
							}*/
						?>
					-->
					@elseif (Auth::user()->is_jobseeker)
						This is the home page and you are logged in as JOB-SEEKER :)
					@endif

				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">

	<div> <!-- Slideshow -->
		<div class="slider-pro" id="my-slider">
			<div class="sp-slides">
				<!-- Slide 1 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/image.png') }}"/>
					<p class="sp-caption">Help building a strong community!</p>
				</div>
		
				<!-- Slide 2 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/image1.png') }}"/>
					<p class="sp-caption">Become a Recruiter! Post your Vacancy today!</p>
				</div>
		
				<!-- Slide 3 -->
				<div class="sp-slide">
					<img class="sp-image" src="{{ asset('/images/image2.png') }}"/>
					<p class="sp-caption">Follow your true passion.. find a job today!</p>
				</div>
			</div>
		</div>
	</div>
</div>	

<div> <!-- My interests -->
	<div class="row">
		<div align = "center">
			<div>
				<h2>About Work Hunter</h2>
			</div>
			<div align="center">
				<img  class ="sp-image" align="center" width="400px" src="{{ asset('/images/logo2.png') }}"/>
			</div>
			<div>
				<p> Hi! This is Work Hunter - a recruitment system designed to connect jobseekers and recruiters!</p>
					<p>Work Hunter enables recruiters to post vacancies, and recruit employees. It is also a platform for job seekers to look for a dream job!
			  	</p>
			</div>
		</div>
	</div>
</div>


@endsection

@section('js')

<script src="{{ asset('/slider-pro/dist/js/jquery.sliderPro.min.js') }}"></script>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#my-slider' ).sliderPro(
			{
				width: '70%',
				arrows: true,
				aspectRatio: 1.5,
				visibleSize: '100%',
				forceSize: 'fullWidth'
			}
			);
	});
</script>

@endsection
