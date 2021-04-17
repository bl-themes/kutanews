
<?php Theme::plugins('pageBegin'); ?>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $page->title(); ?></h2>
        <p class="blog-post-meta"><i class="fas fa-clock text-warning"></i> <?php echo $page->date(); ?> <i class="fas fa-folder text-warning"></i> <?php echo $page->category() ?></p>
        <?php if ($page->coverImage()): ?>
        <img src="<?php echo $page->coverImage(); ?>" class="w-100 rounded" alt="<?php echo $page->title(); ?>"><br><small><span class="text-black-50"><?php echo $page->custom('figure'); ?></span></small>
        <?php endif ?>
        <p><?php echo $page->content(); ?></p>
        <?php Theme::plugins('pageEnd'); ?>
        <br>
        <?php if (!empty($page->tags(true))): ?>
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tag text-warning" style="margin-top: 4px;"></i></li>
            <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
            <li class="breadcrumb-item"><a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><?php echo $tagName; ?></a></li>
            <?php endforeach ?>
          </ol>
        </nav>
        <?php endif; ?>
        <!-- share tools -->
        <div class="addthis_inline_share_toolbox_8ozz"></div>
        <!--/ share tools -->
        <br>
        <!-- author -->
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname') ?>" width="50" style="border-radius: 50%;">
            </a>
          </div>
          <div class="media-body" style="padding-left: 10px;padding-top: 3px;">
            <p><strong><?php echo $page->user('nickname'); ?></strong><br><small>Administrator</small></p>
          </div>
        </div>
        <!--/ author -->
      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

     <!--/ sidebar -->
    <?php include('sidebar.php'); ?>
    <!--/ sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
