
{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
{{ HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
{{ HTML::style('css/bootstrap.min.css') }}
<title> Facebook Login</title>


    @if(empty($user))
    <div class="container">
       <h2>Facebook Login</h2>

       {{ link_to('home/login', 'Facebook Login', ['class' => 'btn btn-primary']) }}

    </div>
    @else
        <h1> Hello, {{$user->name}} </h1>
        <p>  Email: {{$user->email}} </p>
        <p>  Your Facebook Profile: {{ link_to($user->profile_link, $user->profile_link ) }} </p>
        {{ link_to('logout', 'Logout', ['class' => 'btn btn-danger']) }}
    @endif

    @if(Session::has('message'))
       <strong>{{ Session::get('message') }}</strong>

    @endif



