  <?php if ($WHERE_AM_I == 'home'): ?>
  <?php
    $featured = array_slice($content, 0, 1);
    $content = array_slice($content, 1);
    foreach ($featured as $page):
  ?>
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark jumbotron-image shadow " style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>);">
    <div class="col-md-6 px-0">
      <h6><span class="badge bg-danger"><?php echo $page->category() ?></span></h6>
      <h1 class="display-4"><?php echo $page->title(); ?></h1>
      <p class="lead my-3"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
      <p class="lead mb-0"><a href="<?php echo $page->permalink(); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
  </div>
  <?php endforeach ?>
  <?php endif; ?>

<main role="main" class="container" style="padding-top: 20px;">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 border-bottom">
        <?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('All stories')) ?></h2>
      </h3>

      <!-- Post -->
      <div class="blog-post">
        <?php if (empty($content)) { $language->p('No pages found'); } ?>
        <?php foreach ($content as $page): ?>
        <!-- Blog card -->
        <div class="row g-0 bg-white position-relative">
          <div class="col-md-6 mb-md-0 p-md-4">
            <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="w-100 center-cropped rounded" alt="<?php echo $page->title(); ?>">
          </div>
          <div class="col-md-6 p-4 ps-md-0 align-middle">
            <a href="<?php echo $page->permalink(); ?>"><h5 class="mt-0"><?php echo $page->title(); ?></h5></a>
            <p class="blog-post-meta"><i class="fas fa-clock text-warning"></i> <?php echo $page->date(); ?> <i class="fas fa-folder text-warning"></i> <?php echo $page->category() ?> </p>
            <p><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
            <a href="<?php echo $page->permalink(); ?>" class="text-dark">Read more</a>
          </div>
        </div>
        <!--/ Blog card -->
        <?php endforeach ?>
      </div>
      <!--/ Post -->
      <?php if (Paginator::numberOfPages()>1): ?>
      <nav class="blog-pagination">
        <?php if (Paginator::showPrev()): ?>
        <a class="btn btn-outline-danger" href="<?php echo Paginator::previousPageUrl() ?>"><i class="fas fa-arrow-left"></i> Previous</a>
        <?php endif ?>
        <?php if (Paginator::showNext()): ?>
        <a class="btn btn-outline-secondary" href="<?php echo Paginator::nextPageUrl() ?>" tabindex="-1" aria-disabled="true">Next <i class="fas fa-arrow-right"></i></a>
        <?php endif ?>
      </nav>
      <?php endif ?>
    </div>
    <!-- /.blog-main -->

    <!--/ sidebar -->
    <?php include('sidebar.php'); ?>
    <!--/ sidebar -->

  </div>
  <!--/row -->
</main>
<!--/container -->
