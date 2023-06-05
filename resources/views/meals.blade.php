<h1>{{$heading}}</h1>
@foreach($meals as $meal)
    <h2> {{$meal['title']}}</h2>
    <p>{{$meal['description']}}</p>
@endforeach