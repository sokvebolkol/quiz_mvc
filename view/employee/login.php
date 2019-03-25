
<body class='bg-dark'>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="container mt-4">
    <div class="card">
        <form method="post" action="index.php?action=validate">
            <div class="card-header text-center bg-light">
                <img style="width:60px;" src="view/img/pn-logo.png"/>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <input type="submit"class="btn btn-info btn-block" value="Submit" name="but_submit" id="but_submit"/>
                </div>
                <hr>
                <span>Don't have an account???</span>
                <a href="index.php?action=form">Register here</a>
        </form>
    </div>
    </div>
</div>
    </div>
    <div class="col-md-4"></div>
</div>
</body>