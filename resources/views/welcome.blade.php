<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
{{ Form::open(array('action' => 'TestForm@index')) }}
{{ Form::label('label', 'E-Mail Address')}}
{{ Form::text('email','')}}
{{ Form::submit('Submit')}}
{{ Form::close() }}

<?php if($email!=""){ ?>
<h1><?php echo $email ?></h1>
<?php }else{ ?>
<h1>Value undefined</h1>
<?php }?>
<br><br>


@if ( $email != "" )
    {{$email}}
@else
    Value not provided