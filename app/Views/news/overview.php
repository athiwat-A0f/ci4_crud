<div class="container">
    <div class="d-flex justify-content-end me-3 mt-3 mb-3">
      <a href="/news/create" class="btn btn-primary"><i class="fas fa-plus-square"></i> Add</a>
    </div>
    <?php if (!empty($news) && is_array($news)): ?>
      <div class="row mb-5">
        <?php foreach ($news as $key => $news_item): ?>
        <div class="col-sm-4 mb-3">
          <div class="card">
            <img src="<?= base_url('images/uploads/'.$news_item['thumbnail']) ?>" class="card-img-top" alt="NO IMAGE">
            <div class="card-body">
              <h5 class="card-title"><?=esc($news_item['title'])?></h5>
              <p class="card-text"><?=esc(substr($news_item['body'],0,200))?>...</p>
              <a href="/news/<?=esc($news_item['slug'], 'url')?>" class="btn btn-info"><i class="fas fa-eye"></i> View</a>
              <a href="/news/edit/<?=esc($news_item['slug'], 'url')?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            </div>
          </div>
        </div>
        <?php endforeach;?> 
      </div>
      
    <?php else: ?>
    
        <h3>No News</h3>
    
        <p>Unable to find any news for you.</p>
    
    <?php endif?>
</div>