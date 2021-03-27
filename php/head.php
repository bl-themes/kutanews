    <!-- Dynamic title tag -->
    <?php echo Theme::metaTags('title'); ?>
    <!-- Dynamic description tag -->
    <?php echo Theme::metaTags('description'); ?>
    <!-- Include Favicon -->
    <?php echo Theme::favicon('img/favicon.png'); ?>
    <!-- Include CSS Styles from this theme -->
    <?php echo Theme::css('./bootstrap.min.css'); ?>
    <?php echo Theme::css('./blog.css'); ?>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .center-cropped {
        object-fit: cover;
        width: 300px;
        height: 250px;
      }
    </style>

    <?php Theme::plugins('siteHead'); ?>