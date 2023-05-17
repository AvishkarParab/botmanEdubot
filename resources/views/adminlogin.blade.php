<style>
body {
    background: linear-gradient(0deg, rgb(242 238 3) 0%, rgb(242 202 32) 100%);
}

.mainContainer {
    width: 100%;
    height: 70%;
    display: flex;
    flex-direction: column;

}

form {
    width: fit-content;
    margin: auto;
    justify-content: center;
    background-color: orange;
    padding: 6em;
    border-radius: 4%;
}
</style>
<h3 style="display:flex;margin:auto;width:fit-content;">Login</h3>
<div class="container d-grid mainContainer">
    <form action="/login" method="post">
        <div class="form-group" style="margin-bottom: 1em;">
            <label for="exampleInputEmail1">User ID</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter UserID">
            <small id="emailHelp" class="form-text text-muted">never share your USERid and password with anyone
                else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-warning text-white">Submit</button>
    </form>
    @include('components.footer')
</div>