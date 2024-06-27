 <?php
  $current_url = Request::url();
  ?>

 <title>{{$title}}</title>
 <meta name="description" content="{{$meta_description}}" />
 <meta name="keywords" content="{{$meta_keywords}}" />
 <meta name="twitter:title" content="{{$title}}" />
 <meta name="twitter:description" content="{{$meta_description}}" />
 <meta name="twitter:url" content="<?php echo $current_url; ?>" />
 <meta name="twitter:site" content="Generation Green" />
 <meta name="Geography" CONTENT="India" />
 <meta name="Language" CONTENT="English" />
 <meta name="Copyright" CONTENT="Generation Green" />
 <meta name="distribution" CONTENT="Global" />
 <meta name="Robots" CONTENT="INDEX,FOLLOW" />
 <meta name="country" CONTENT="India" />

 <link rel="canonical" href="<?php echo $current_url; ?>" />

 <meta property="og:title" content="{{$title}}" />
 <meta property="og:type" content="Article" />
 <meta property="og:url" content="<?php echo $current_url; ?>" />
 <meta property="og:image" content="./assets/images/logo-t-w.svg" />
 <meta property="og:description" content="{{$meta_description}}" />
 <meta name="csrf-token" content="{{ csrf_token() }}" />