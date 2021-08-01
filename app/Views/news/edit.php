<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<div class="ps-2 ms-2">
    <div class="col-sm-6 mt-4">
        <form action="/news/edit" method="post">
            <?= csrf_field() ?>
        
            <label for="title">Title</label> <span class="text-red">*</span>
            <input type="input" name="title" class="form-control" value="<?= $news['title'] ?>"/><br />
        
            <label for="body">Description</label> <span class="text-red">*</span>
            <textarea name="body" class="form-control" rows="5"><?= $news['body'] ?></textarea><br />

            <input type="hidden" name="id" value="<?= $news['id'] ?>">
            <div class="d-flex justify-content-end">
                <a href="/news" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a> &nbsp
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Edit news item</button>
            </div>
        </form>
    </div>
</div>
<br>