<div class="container mt-4">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <h1>Login</h1>
            <hr>
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?=session()->getFlashdata('msg');?></div>
            <?php endif;?>
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <label for="inputemail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputforemail" value="<?=set_value('email');?>">
                </div>
                <div class="mb-3">
                    <label for="inputpassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputforpassword">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <hr>
            <a href="/register" class="btn btn-primary">Register Page</a>
        </div>
    </div>
</div>

