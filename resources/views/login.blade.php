<div class="container d-grid">
    
<h1 class="mt-5 mx-5">LOGIN PAGE</h1>
{{-- @if ($errors->any())
    <div class="mx-5">
        <br>
        @foreach ($errors->all() as $err)
            <li class="text-danger">{{$err}}</li>
        @endforeach
        <br>
    </div>
@endif --}}



<br>
<form class="mx-5" action="login" method="post">
@csrf

    <input type="text" name="name" placeholder="Enter your Name">
    <br>
    <span class="text-danger">@error('name'){{$message}}@enderror</span>
    <br>
    <input type="number" name="age" placeholder="Enter your Age">
    <br>
    <span class="text-danger">@error('age'){{$message}}@enderror</span>
    <br>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>

@include('components.footer');
</div>