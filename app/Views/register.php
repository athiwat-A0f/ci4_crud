<div class="container mt-4">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <h1>Sign up</h1>
            <hr>
            <?php if(isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
            <?php endif; ?>
            <form action="/register/save" method="post">
                <div class="mb-3">
                    <label for="inputname" class="form-lable">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= set_value('name') ?>">
                </div>
                <div class="mb-3">
                    <label for="inputemail" class="form-lable">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>">
                </div>
                <div class="mb-3">
                    <label for="inputpassword" class="form-lable">Password</label>
                    <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
                </div>
                <div class="mb-3">
                    <label for="inputconfpassword" class="form-lable">Confirm Password</label>
                    <input type="password" name="confpassword" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Register <i class="fas fa-registered"></i></button>
            </form>
            <hr>
            <a href="/login" class="btn btn-primary">Login Page <i class="fas fa-sign-in-alt"></i></a>
        </div>
    </div>
</div>
    
