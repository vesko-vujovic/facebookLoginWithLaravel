
{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
{{ HTML::style('css/bootstrap.min.css') }}
<title> Facebook Login</title>



    <div class="container">
       <h2>Facebook Login</h2>

       {{ link_to('home/login', 'Facebook Login', ['class' => 'btn btn-primary']) }}

    </div>



