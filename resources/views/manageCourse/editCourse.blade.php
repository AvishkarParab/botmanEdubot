<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background: linear-gradient(0deg, rgb(246, 225, 42) 0%, rgb(235, 217, 104) 100%);
}

form {
    box-shadow: 2px 6px 100px #ffffff;
}
</style>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Design</title>
</head>

<body>
    <div class="">
        <header class="text-center">
            <h1 class="display-6 ">Edit Course</h1>
        </header>
    </div>
    <br><br>
    <section class="container my-2  w-50 text-light p-2">
        <form class="row g-3 p-3" method="post">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-12">
                <label for="inputState" class="form-label">Grade</label>
                <select id="inputState" class="form-select">
                    <option selected disabled>Edit Grade</option>
                    <option value=6>VI</option>
                    <option value=7>VII</option>
                    <option value=8>VIII</option>
                </select>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Are you sure you want to edit the course
                    </label>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary col-8">Edit</button>
            </div>
        </form>
    </section>
</body>

</html>