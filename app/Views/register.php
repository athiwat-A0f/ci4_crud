<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
                    <input type="submit" class="btn btn-primary" value="Register">
                </form>
                <hr>
                <a href="/login" class="btn btn-primary">Login Page</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>