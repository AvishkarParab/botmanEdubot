<style>
body {
    background: linear-gradient(0deg, rgb(242 238 3) 0%, rgb(242 202 32) 100%);
}

.adminMainContainer {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 8em;
    color: white;
}

.adminCon {
    margin-bottom: 1em;
    padding: 0.5em;
    background-color: #ff8220;
    box-shadow: 1px 1px 4px #b55000;
}

.btnc {}
</style>

<body>

    <div class="text-center">
        <h2 class="text-white">ADMIN HOME PAGE</h2>
        <div class="text-end mx-3">
            <a href="/adminlogin"><button class="btn btn-warning">Logout</button></a>
        </div>

        {{-- @if ($admin) --}}
        <h5 class="text-white">Hello, vishwajeet{{session('adminName')}} </h5>

    </div>
    <div class="adminMainContainer">
        <div class="container mx-3 border rounded adminCon">
            <h5>Manage Course</h5>
            <br>
            <div class="d-flex justify-content-around align-content-center">
                <h6><a href="/addcourse"><button class="btn btn-warning text-white">Add Course</button></a>
                </h6>
                <h6><a href="/viewcourse"><button class="btn btn-warning text-white">View Courses</button></a></h6>
            </div>
        </div>
        <div class="container mx-3 border rounded adminCon">
            <h5>Manage Chapter</h5>
            <br>
            <div class="d-flex justify-content-around align-content-center">
                <h6><a href="/addchapter"><button class="btn btn-warning text-white">Add Chapter</button></a>
                </h6>
                <h6><a href="/viewchapter"><button class="btn btn-warning text-white">View Chapters</button></a></h6>
            </div>
        </div>
        <div class="container mx-3 border rounded adminCon">
            <h5>Manage Subtopic</h5>
            <br>
            <div class="d-flex justify-content-around align-content-center">
                <h6><a href="/addsubtopic"><button class="btn btn-warning text-white">Add Subtopic</button></a>
                </h6>
                <h6><a href="/viewsubtopic"><button class="btn btn-warning text-white">View Subtopics</button></a></h6>
            </div>
        </div>
        <div class="container mx-3 border rounded adminCon">
            <h5>Manage Question</h5>
            <br>
            <div class="d-flex justify-content-around align-content-center">
                <h6><a href="/addquestion"><button class="btn btn-warning text-white">Add Question</button></a>
                </h6>
                <h6><a href="/viewquestion"><button class="btn btn-warning text-white">View Questions</button></a></h6>
            </div>
        </div>
    </div>
</body>






@include('components.footer')