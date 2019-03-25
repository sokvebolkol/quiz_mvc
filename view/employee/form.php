<div class="container mt4">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="card">
        <div class="card-header text-center">Register User</div>
        <div class="card-body">
        <form action="index.php?action=get_re_user" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="User Name"name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password"name="pwd" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit"class="btn btn-primary btn-block"name="btn-user">Register</button>
                </div>
                <div class="form-group">
                    <button type="reset"class="btn btn-info btn-block text-white">Clear</button>
                </div>
            </form>
        </div>
        </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
