<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<div class="ps-2 ms-2">
    <div class="col-sm-6 mt-4">
        <form action="/news/create" method="post">
            <?= csrf_field() ?>
        
            <label for="title">Title</label> <span class="text-red">*</span>
            <input type="input" name="title" class="form-control" required/><br />
        
            <label for="body">Description</label> <span class="text-red">*</span>
            <textarea name="body" class="form-control" rows="5" required></textarea><br />
        
            <div class="d-flex justify-content-end">
                <a href="/" class="btn btn-secondary">Back</a> &nbsp
                <input type="submit" name="submit" value="Create news item" class="btn btn-success" />
            </div>
        </form>
    </div>
</div>
<br>