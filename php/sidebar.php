<aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-danger text-white rounded">
        <h4><?php echo $site->title(); ?></h4>
        <p class="mb-0"><?php echo $site->description(); ?></p>
      </div>

      <div class="p-4">
        <h5>Follow Us!</h5>
        <ul class="llist-group list-group-flush">
          <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
          <li style="float:left;list-style-type: none;"><a href="<?php echo $site->{$key}(); ?>"><img src="<?php echo DOMAIN_THEME.'img/'.$key.'.png' ?>"> </a>&nbsp;</li>
          <?php endforeach; ?>
          <br>
        </ul>
      </div>

      <div class="p-4">
        <h5>Latest Post</h5>
        <ul class="llist-group list-group-flush">
          <?php
            $listOfKeys = $pages->getList(1, 8);
            if ($listOfKeys) :
            foreach ($listOfKeys as $key) :
            $lPage = new Page($key);
          ?>
          <li class="list-group-item"><a href="<?php echo $lPage->permalink() ?>"><small class="text-black-50"><?php echo $page->date(); ?></small><br><?php echo $lPage->title() ?></a></li>
          <?php endforeach ?>
          <?php endif ?>
        </ul>
      </div>

      <div class="p-4">
        <h5>Categories</h5>
        <ul class="llist-group list-group-flush">
          <?php foreach ($categories->db as $key=>$fields): if($fields['list']):  ?>
          <li class="list-group-item"><a href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?> </a></li>
          <?php endif; endforeach; ?> 
        </ul>
      </div>
</aside><!--/ sidebar -->