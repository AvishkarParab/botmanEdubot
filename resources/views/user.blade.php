<style>
.iframebox{
    border: 1px solid red;
    display: flex;
    justify-content: center;

}
.chat{
    height: 400px;
}

</style>

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

<div class="iframebox">
    <h6>This is Api call div</h6>
    
</div>

{{-- <div 
class="iframebox">
    <iframe 
        class="chat"
        style="min-width: 400px;"
        src="{{url('/')}}" frameborder="0">
    </iframe>
</div> --}}
