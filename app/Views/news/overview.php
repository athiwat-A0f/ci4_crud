<div class="container-fluid">
    <div class="d-flex justify-content-end me-3 mt-3">
      <a href="/news/create" class="btn btn-primary">Add</a>
    </div>
    <?php if (!empty($news) && is_array($news)): ?>
    
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col" width="15%">Tools</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($news as $key => $news_item): ?>
                <tr>
                  <th scope="row"><?= esc($key+1)?></th>
                  <td><?=esc($news_item['title'])?></td>
                  <td><?=esc($news_item['body'])?></td>
                  <td>
                    <a href="/news/<?=esc($news_item['slug'], 'url')?>" class="btn btn-info">View</a>
                    <a href="/news/edit/<?=esc($news_item['slug'], 'url')?>" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
                <?php endforeach;?>
            </tbody>
          </table>
    
    <?php else: ?>
    
        <h3>No News</h3>
    
        <p>Unable to find any news for you.</p>
    
    <?php endif?>
</div>