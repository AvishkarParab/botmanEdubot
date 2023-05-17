<x-header componentName="User"/>
<h1>
    Hello Ramesh 
</h1>
<br>
<h4>Current URL : {{URL::current() }}</h4>

<div class="text-danger text-center">
    <a href="{{URL::to('/about')}}">About</a>
    <br>
    <a href="{{URL::to('/user')}}">Home</a>
</div>
<br><br>
