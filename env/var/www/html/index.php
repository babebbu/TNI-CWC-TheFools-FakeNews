<!-- TNI-CWC-2019 : The Fool -->

<?php
    require('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>เว็บข่าวปอม</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <h1><a class="blog-header-logo text-dark" href="#">ข่าวปอม</a></h1>
        <p>ปอมล้วนๆ ไม่มีปลอมผสม</p>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="login.html" id="login">จัดการข่าว</a>&nbsp;
        <a class="btn btn-sm btn-outline-secondary" href="add.html">เขียนข่าวใหม่</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">เราแชร์ข่าวปอม<br>ไม่ได้แชร์ข่าวปลอม</h1>
      <p class="lead my-3">เว็บข่าวปอม ปลอดข่าวปลอม 100%<br>ถ้ามีข่าวปลอมที่ไม่ใช่ข่าวปอม แอดมินจะลบทันที</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-auto d-none d-lg-block">
          <img src="images/pom.jpg" style="width: 100%">
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">ปอมรอบโลก</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">หมาปอมเป็นหมาตัวเล็กสีส้มขนปุยน่ารักหิ้วใส่กระเป๋าได้ ทำให้มนุษย์ทั่วโลกหลงรัก เราจะพาไปดูความน่ารักของหมาปอมทั่วโลกกัน</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-auto d-none d-lg-block">
          <img src="images/pom.jpg" style="width: 100%">
        </div>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Science</strong>
          <h3 class="mb-0">โรคระบาดกับหมาปอม</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">คุณรู้หรือไม่ ทุกวันนี้เกิดโรคระบาดขึ้นกับหมาปอม เนื่องจากค่าฝุ่น PM 2.5 ในกรุงเทพส่งผลโดยตรงต่อระบบทางเดินหายใจ</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        ข่าวปอมล่าสุด
      </h3>

      <?php
        $sql = "SELECT * FROM news ORDER BY id ASC";
        $news = $conn->query($sql);
	      if(count($news) > 0):
          while($article = $news->fetch_assoc()):
      ?>

      <div class="blog-post">
        <h2 class="blog-post-title"><?=$article['title']?></h2>
        <p class="blog-post-meta"><small><?php echo $article['timestamp']; ?></small></p>

        <p><?php echo htmlspecialchars_decode($article['content']); ?></p>
      </div><!-- /.blog-post -->

      <?php
          endwhile;
        endif;
      ?>

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">เว็บข่าวปอม จัดตั้งขึ้นในปี 2560 โดยชมรมคนรักปอม เพื่อแชร์ข้อมูล"ปอมๆ" โดยทุกคนสามารถร่วมกันแชร์ข้อมูลได้ เริ่มต้นง่ายๆจากการกดปุ่ม "เขียนข่าวใหม่" ด้านบนขวาของเว็บ</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">ปี 2562</a></li>
          <li><a href="#">ปี 2561</a></li>
          <li><a href="#">ปี 2560</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
	  <li><a href="https://github.com/codesonteen" target="_blank">พูดคุยกับแอดมิน #ข่าวปอม</a></li>
	  <li><a href="https://instagram.com/babebbu_" target="_blank">ติดตาม #ข่าวปอม</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<hr>

<footer class="blog-footer">
<p class="text-center">Written by Faker</p>
</footer>
</body>
</html>
