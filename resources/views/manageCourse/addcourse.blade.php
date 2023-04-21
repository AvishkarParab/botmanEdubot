<style>
body {
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);
}
</style>

<div class="addCourse container border rounded border-1 my-3" style="padding: 1%;height:50%;overflow:hidden;overflow:hidden;background-color: #ff8220;
    box-shadow: 1px 1px 4px #b55000;border: none;margin:2em auto;">
    <div class="alert alert-warning" role="alert" style="width:50%;margin:auto;text-align:center;display:none;">
        Please enter the appropriate Course name
    </div>
    <div class="alert alert-warning" id="alertCourse" role="alert"
        style="width:50%;margin:auto;text-align:center;display:none;">
        Please select the grade before proceeding
    </div>
    <h4 class="text-center" style="color:black;">Add Course</h4><br><br>
    <form action="/addc" method="post">
        @csrf
        <div class="gradeSelectionContainer" style="margin: auto;width: fit-content">
            <select name="grade" id="grade"
                style="border:none;border-radius: 4px;padding: 10px;background-color:mintcream;outline:none;cursor:pointer;">
                <option value="" disabled selected>Please select the grade first</option>
                <option value=6>VI</option>
                <option value=7>VII</option>
                <option value=8>VIII</option>
                {{-- <option value="img">Image</option>
                <option value="vid">Video</option> --}}
            </select>
            <button type="button" class="btn btn-danger gradeSelectBtn"
                style="margin-left:1em;background-color: #ffd455;color: black;outline:none;border:0;">Select</button>
        </div>
        <div class="mainContainer" style="display:flex;flex-direction:column;display:none;align-items:center;">
            <h4 style="margin-right:auto;margin-left:1em;color: white;font-size: 1.3em;">Grade Selected: <span
                    class="gradeSpan"><span></h4>
            <input class="rounded" type="text" id="courseName" name="courseName" placeholder="Enter a course name"
                style="width:40em;margin-bottom:1.5em;text-align:center;height:2.3em;border: 1px solid orange;outline: none;">
            <button type="submit" class="btn btn-warning submit" style="width:15%;font-weight:bold;">Add course</button>
        </div>
        <br><br>
    </form>
</div>

@include('manageCourse.cou')
@include('components.footer')