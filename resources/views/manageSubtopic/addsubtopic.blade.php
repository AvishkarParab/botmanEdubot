<style>
body {
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);
}
</style>
<a href="/addchapter" style="text-decoration:none;"><button type="button" class="btn btn-danger"
        style="display:block;margin:1em 3em;">Back</button></a>
<nav aria-label="breadcrumb" style="margin-left:8em;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/addcourse">Courses</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/addchapter">Chapter</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subtopic</li>
    </ol>
</nav>
<div class="addquest container border rounded border-1 my-3" style="padding: 1%;
    height: 70%;
    overflow: hidden;
    overflow: hidden;
    background-color: #ff8220;
    box-shadow: 1px 1px 4px #b55000;
    border: none;
    margin: 2em auto;">
    <div class="alert alert-warning" role="alert" style="width:50%;margin:auto;text-align:center;display:none;">
        Please enter the appropriate Subtopic name
    </div>
    <h4 class="text-center">Add Subtopic Form</h4><br><br>
    <form action="/addsubt" method="post">
        @csrf
        <input type="text" id="subtopicName" name="subtopicName" placeholder="Enter the subtopic name"
            style="width:500px;outline:none;border:none;height:2em;">
        <button type="button" class="btn btn-outline-success" id="subtopicEnter" style="margin-left: 1em;
    background-color: #ffd455;
    color: black;
    outline: none;
    border: 0;
    width: 8em;">Enter</button>
        <br><br>
        <div class="selectChapterObj" style="display:none;">
            <div class="selectChapterContainer" style="display:flex;flex-direction:column;">
                <div class="subContainer">
                    <select name="chapterId" id="chapterId">
                        <option value="" disabled selected>Please select the Chapter</option>
                        @include('manageSubtopic.subtopicConfig');
                        {{-- <option value="img">Image</option>
                <option value="vid">Video</option> --}}
                    </select>
                    <button type="button" class="btn btn-danger qtypebtn">Select</button>
                </div>
                <h3 class="selectChapterObj" style="widht:fit-content;margin-left:2em;">OR</h3>
            </div>
            <input type="text" id="chapterNameInput" name="chapterName" placeholder="Enter the Chapter name"
                style="width:500px;display:flex;">
            <h3 class="chapterNameInputOR" style="widht:fit-content;margin:0.4em 2em;display:none;">OR</h3>
            <button type="button" id="addChapterbtn" value="addc" class="btn btn-outline-success"
                style="width:20%;margin: 0.5em 0;">Add
                Chapter</button>
        </div>
        <button type="submit" class="btn btn-warning" style="width:30%;margin:8em auto 0 auto;display:block;">Add
            Subtopic </button>
    </form>

</div>


@include('manageSubtopic.subt')
@include('components.footer')