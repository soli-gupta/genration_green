<?php 
    $page_array=array(
                    'name' => 'Page not found',
                    'id' => 'page_not_found',
                    'sub_text' => '',
                    'title' => 'Page not found',
                    'heading_color' => '',
                    'meta_keywords' => 'Page not found',
                    'meta_description' => 'Page not found',
                    'slug' => 'Homepage',
                    'content_heading' => 'Page not found',                   
                    'body_class' => 'page_not_found inr-page-bg',
                  
                    );
?>
@extends('layouts.template_page')
@section('content')
	<section class="text-center thankYou ">
		<div class="wrapper"> <img src="img/error_icon.svg" alt="">
			<h2>404 Page not found!</h2>
			<p data-aos="fade-up">The page you’re looking for might have been removed
				<br> had it’s name changed or is temporarily unavailable. </p>
		</div>
	</section>

@endsection
 