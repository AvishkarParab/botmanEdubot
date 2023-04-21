<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

head {
    position: sticky;
    z-index: 999;
    top: 0;
}

body {
    font-family: 'Poppins', sans-serif;
    background: rgb(240, 168, 32);
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);

}

body::-webkit-scrollbar {
    display: none;
}

.card-img-top {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin: auto;

}

.card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    border-radius: 0;
    padding: 20px;
    border: none;
}

.bi {
    font-size: 25px;
    color: rgb(255, 85, 0);

}

.bi:hover {
    cursor: pointer;
    color: black;
}
}
</style>
@if(count($data) == 0)
<h1 style="width:fit-content;margin:auto;">No courses to Show</h1>
@else

<body>
    <div class="container text-center py-5">
        <h2 class="text-black">Subtopics</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            @foreach ($data as $q)
            <!-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur!</p> -->
            <div class="col">
                <div class="card">
                    <img src="http://learn.simonrankin.art/wp-content/uploads/sites/6/2021/02/html-1024x683.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$q['subtopicName']}}</h3>
                        <p class="text-muted">Subtopic Id: {{$q['id']}}</p>
                        <p class="card-text">Chapter Id: {{$q['chapterID']}}</p>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <button type="button" class="btn btn-warning">&nbsp; &nbsp; Edit &nbsp; &nbsp;</button>
                        <button type="button" class="btn btn-danger">&nbsp; Delete &nbsp;</button>
                    </div>
                    <br>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <body>

        @endif
        @include('components.footer')