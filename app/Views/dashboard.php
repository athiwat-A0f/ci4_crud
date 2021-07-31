<div class="container mt-4">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <h1>Dashboard</h1>
            <hr>
            <?php $session = session(); ?>
            <h3><?php echo "Welcome back, " . $session->get('user_name'); ?></h3>
            <br>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
