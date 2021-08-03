<div class="container">
    <img src="<?= base_url('images/uploads/'.$news['thumbnail']) ?>" alt="NO IMAGE" width="80%" height="50%" class="mt-3 mb-3" >

    <h2><?= esc($news['title']) ?></h2>
    <p><?= esc($news['body']) ?></p>
    <a href="/news" class="btn btn-secondary"><i class="fas fa-chevron-left"></i> Back</a> 
    <br><br><br>
</div>