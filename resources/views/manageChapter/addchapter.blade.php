<style>
body {
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);
}
</style>
<a href="/addcourse" style="text-decoration:none;"><button type="button" class="btn btn-danger"
        style="display:block;margin:1em 3em;">Back</button></a>
<nav aria-label="breadcrumb" style="margin-left:8em;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/addcourse">Courses</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chapter</li>
    </ol>
</nav>
<div class="addquest container border rounded border-1 my-3" style="padding: 1%;
    height: 50%;
    overflow: hidden;
    overflow: hidden;
    background-color: #ff8220;
    box-shadow: 1px 1px 4px #b55000;
    border: none;
    margin: 2em auto;">
    <div class="alert alert-warning" role="alert" style="width:50%;margin:auto;text-align:center;display:none;">
        Please enter the appropriate chapter name
    </div>
    <h4 class="text-center">Add Chapter Form</h4><br><br>
    <form action="/addchap" method="post">
        @csrf
        <input type="text" id="chapterName" name="chapterName" placeholder="Enter the chapter name" style="width: 30em;
    margin-bottom: 1.5em;
    text-align: center;
    height: 2.3em;
    border: 1px solid orange;
    outline: none;">
        <button type="button" class="btn btn-outline-success" id="subtopicEnter"
            style="margin-left: 1em;background-color: #ffd455;color: black;outline: none;border: 0;width:8em;">Enter</button>
        <br><br>
        <div class="selectChapterObj" style="display:none;">
            <div class="selectChapterContainer" style="display:flex;flex-direction:column;">
                <div class="subContainer" style="display:flex;">
                    <select name="courseId" id="courseId" style="min-width: 15em;text-align: center;">
                        @include('manageChapter.chapterConfig');
                    </select>
                </div>
                <!-- <h3 class="selectChapterObj" style="widht:fit-content;margin-left:2em;">OR</h3> -->
            </div>
            <div class="courseNotPresent">Course Not Present? <a href="/addcourse">Add Course</a></div>
            <!-- <input type="text" id="chapterNameInput" name="chapterName" placeholder="Enter the Chapter name"
                style="width:500px;display:flex;">
            <h3 class="chapterNameInputOR" style="widht:fit-content;margin:0.4em 2em;display:none;">OR</h3>
            <button type="button" id="addChapterbtn" value="addc" class="btn btn-outline-success"
                style="width:20%;margin: 0.5em 0;">Add
                Course</button> -->
        </div>
        <button type="submit" class="btn btn-warning" style="width:20%;margin:2em auto;display:block;">Add
            Chapter </button>
    </form>

</div>


@include('manageChapter.chapt')
@include('components.footer')