<style>
body {
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);
}
</style>
<a href="/addsubtopic" style="text-decoration:none;"><button type="button" class="btn btn-warning"
        style="display:block;margin:1em 3em;">Back</button></a>
<nav aria-label="breadcrumb" style="margin-left:8em;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/addcourse">Courses</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/addchapter">Chapter</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="/addsubtopic">Subtopic</a></li>
        <li class="breadcrumb-item active" aria-current="page">Question</li>
    </ol>
</nav>
<div class="addquest container border rounded border-1 my-3" style="padding: 1%;    
    overflow: hidden;
    overflow: hidden;
    background-color: #ff8220;
    box-shadow: 1px 1px 4px #b55000;
    border: none;
    margin: 2em auto;">
    <h4 class="text-center" style="color:white;">Add Question Form</h4><br><br>
    <form action="/add" method="post">
        @csrf
        <select name="qtype" id="qtype">
            <option value="" disabled selected>Please select the question type first</option>
            <option value="shorttext">Short Text Question</option>
            <option value="longtext">Long Text Question</option>
            <option value="mcq2">2 option MCQ</option>
            <option value="mcq4">4 option MCQ</option>
            <option value="chk2">2 option Checkboxes Question</option>
            <option value="chk4">4 option Checkboxes Question</option>
            {{-- <option value="img">Image</option>
            <option value="vid">Video</option> --}}
        </select>
        <button type="button" class="btn btn-warning qtypebtn">Select</button>
        <br><br>
        <div class="questionbox">
            <select name="subtopic" id="subtopic" style="display:none">
                <option value="" disabled selected>Please select the subtopic first</option>
                @include('manageQuest.questConfig');
                {{-- <option value="img">Image</option>
            <option value="vid">Video</option> --}}
            </select>
            <br><br>
            <input type="text" id="quest" name="quest" placeholder="Enter your Question "
                style="width:500px;display:none">
            <br><br>
            {{-- Start block text question  --}}
            <div id="shorttextquest" class="qt" style="display: none">
            </div>
            {{-- End block text question  --}}

            {{-- Start block 2 option MCQ question  --}}
            <div id="mcqquest2" class="qt" style="display: none">
                {{-- <input type="text" id="quest" name="quest" placeholder="Enter your Question " style="width:500px"> --}}

                <div class="option2">
                    <input type="text" name="opt2_1" placeholder="Enter your Option 1 ">
                    <br><br>
                    <input type="text" name="opt2_2" placeholder="Enter your Option 2 ">
                </div>
                <br><br>
                <input type="number" name="correctOpt2" placeholder="Enter Correct Option No.">
                <br><br>
            </div>
            {{-- End block 2 option MCQ question  --}}

            {{-- Start block 4 option MCQ question  --}}
            <div id="mcqquest4" class="qt" style="display: none">
                {{-- <input type="text" id="quest" name="quest" placeholder="Enter your Question " style="width:500px"> --}}
                <div class="option4">
                    <input type="text" name="opt4_1" placeholder="Enter your Option 1 ">
                    <br><br>
                    <input type="text" name="opt4_2" placeholder="Enter your Option 2 ">
                    <br><br>
                    <input type="text" name="opt4_3" placeholder="Enter your Option 3 ">
                    <br><br>
                    <input type="text" name="opt4_4" placeholder="Enter your Option 4 ">
                </div>
                <br><br>
                <input type="number" name="correctOpt4" placeholder="Enter Correct Option No.">
                <br><br>
            </div>
            {{-- End block 4 option MCQ question  --}}

            {{-- Start block 2 option Checkboxes question  --}}
            <div id="chkquest2" class="qt" style="display: none">
                {{-- <input type="text" name="quest" placeholder="Enter your Chechbox Question " style="width:500px"> --}}
                <div class="chkoption">
                    <input type="text" name="chkopt2_1" placeholder="Enter your Option 1 ">
                    <br><br>
                    <input type="text" name="chkopt2_2" placeholder="Enter your Option 2 ">
                </div>
                <br><br>
                <label for="correctchkopt2" class="text-danger">NOTE:- To select multiple press and hold ctrl and click
                    the option</label>
                <br>
                <label for="">Please select the correct answer : </label>
                <br>
                <select name="correctchkopt2[]" class="form-select w-25" id="correctchkopt2" multiple>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <br><br>
            </div>
            {{-- End block 2 option Checkboxes question  --}}

            {{-- Start block 4 option Checkboxes question  --}}
            <div id="chkquest4" class="qt" style="display: none">
                {{-- <input type="text" name="quest" placeholder="Enter your Chechbox Question " style="width:500px"> --}}
                <div class="chkoption">
                    <input type="text" name="chkopt4_1" placeholder="Enter your Option 1 ">
                    <br><br>
                    <input type="text" name="chkopt4_2" placeholder="Enter your Option 2 ">
                    <br><br>
                    <input type="text" name="chkopt4_3" placeholder="Enter your Option 3 ">
                    <br><br>
                    <input type="text" name="chkopt4_4" placeholder="Enter your Option 4 ">

                </div>
                <br><br>
                <label for="correctchkopt4" class="text-danger">NOTE:- To select multiple press and hold ctrl and click
                    the option</label>
                <br>
                <label for="">Please select the correct answer : </label>
                <br>
                <select id="correctchkopt4" name="correctchkopt4[]" class="form-select w-25" multiple>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <br><br>
            </div>
            {{-- End block 4 option Checkboxes question  --}}
            <div class="end" style="display: none">
                <div class="linkinput">
                    <input type="text" placeholder="Enter the image link" name="imgLink" id="linkInput">
                    OR
                    <button type="button" value="videolink" class="btn btn-warning qtypebtn" id="swaplink">Video
                        Link</button>
                </div>
                <button type="submit" class="btn btn-outline-primary">Add Question</button>
            </div>
        </div>

    </form>
</div>


@include('manageQuest.quest')
@include('components.footer')