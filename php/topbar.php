
  	<div class="container bg-white" style="-webkit-box-shadow: 0px 0px 44px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 44px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 44px 0px rgba(0,0,0,0.75);">
      <div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-6 text-left">
              <a class="blog-header-logo text-dark" href="<?php echo $site->url(); ?>"><i class="fas fa-kiwi-bird text-warning"></i> <?php echo $site->title(); ?></a>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center input-group">
              
   <?php if (pluginActivated('pluginSearch')): ?>
          <input id="search-input" type="text" class="form-control rounded-pill" placeholder="Search Website..." aria-label="Search Website..." aria-describedby="button-addon2">&nbsp;
        <button onClick="searchNow()" class="btn btn-danger rounded-circle" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
        <script>
        function searchNow() {
          var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
          window.open(searchURL + document.getElementById("search-input").value, "_self");
        }
        var elem = document.getElementById('search-input');
        elem.addEventListener('keypress', function(e){
          if (e.keyCode == 13) {
            searchNow();
          }
        });
      </script>
      <?php endif ?>

      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php foreach ($categories->db as $key=>$fields): if($fields['list']):  ?>
      <a class="p-2 text-muted" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a>
      <?php endif; endforeach; ?> 
    </nav>
  </div>