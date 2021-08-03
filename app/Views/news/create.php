<h2><?= esc($title) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<div class="ps-2 ms-2">
    <div class="col-sm-6 mt-4">
        <form action="/news/create" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="formFile" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" name="thumbnail" id="formFile">
            </div>
        
            <label for="title">Title</label> <span class="text-red">*</span>
            <input type="input" name="title" class="form-control"/><br />
        
            <label for="body">Description</label> <span class="text-red">*</span>
            <textarea name="body" class="form-control" rows="5"></textarea><br />
        
            <div class="d-flex justify-content-end">
                <a href="/news" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a> &nbsp
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Create news item</button>
            </div>
        </form>
    </div>
</div>
<br>