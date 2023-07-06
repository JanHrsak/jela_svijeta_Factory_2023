<nav>
    @foreach (config('translatable.locales') as $locale)
        <a href="{{ request()->url() }}?lang={{ $locale }}"
           class="@if (app()->getLocale() == $locale) border-indigo-400 @endif inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            [{{ strtoupper($locale) }}]
        </a>
    @endforeach
</nav>
<h1>{{$heading}}</h1>



 <div style="border:1px solid black; width:49%; padding:5px;">
    <h3 style="color:cornflowerblue"> Meals </h3>
    @foreach($meals as $meal)
        <h2> {{$meal['title']}}</h2>
        <p>{{$meal['description']}}</p>
    @endforeach 
</div>
{{--
<div style=" border:1px solid black; width:49%; padding:5px;">
    <h3 style="color:cornflowerblue"> Categories </h3>
    @foreach($categories as $category)
        <h2> {{$category['title']}}</h2>
    @endforeach 
</div>
<div style=" border:1px solid black; width:49%; padding:5px;">
    <h3 style="color:cornflowerblue"> Ingredients </h3>
    @foreach($ingredients as $ingredient)
        <h2> {{$ingredient['title']}}</h2>
    @endforeach 
</div>
<div style=" border:1px solid black; width:49%; padding:5px;">
    <h3 style="color:cornflowerblue"> Tags </h3>
    @foreach($tags as $tag)
        <h2> {{$tag['title']}}</h2>
    @endforeach 
</div> --}}