<h2>Upload File</h2>
<form class="mx-5" action="upload" method="post" enctype="multipart/form-data"">
    @csrf
        <input type="file" name="file" placeholder="Enter your File ">
        <br><br>
        <button type="submit" class="btn btn-outline-primary">Upload</button>
</form>