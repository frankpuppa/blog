<!DOCTYPE html>
<html>
<title>Laravel Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php use Symfony\Component\DomCrawler\Form;

echo asset('css/w3.css')?>" type="text/css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">
    <div class="w3-container w3-center w3-padding-32">
        <h1><b>BLOG Using LAVAREL</b></h1>
        <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
    </div>

    @foreach ($users as $user)
        <h2>{{$user->name}}</h2>
        <p>{{$user->id}} - {{$user->email }}</p>
    @endforeach
</div>
{{--/ {{ Form::label('test') }}--}}
 {{--{{ \Form::text('email', 'example@gmail.com'); }}--}}

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    </footer>

</body>
</html>