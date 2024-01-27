<!-- Header -->
<?php require VIEWS . '/incs/header.php' ?>
<!-- End-Header -->

<!-- Main -->
<main class="main py-3">
   <div class="container">
      <div class="row">

         <!-- Content -->
         <div class="col-md-8">
            <?php foreach ($posts as $post) : ?>
               <div class="card mb-3">
                  <div class="card-body">
                     <h5 class="card-title"><a href="posts?id=<?= $post['id'] ?>"><?= h($post['title']) ?></a></h5>
                     <p class="card-text"><?= $post['excerpt'] ?></p>
                     <a href="posts?id=<?= $post['id'] ?>">Подробнее</a>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
         <!-- End-Content -->

         <!-- Sidebar -->
         <?php require VIEWS . '/incs/sidebar.php' ?>
         <!-- End-Sidebar -->

      </div>
   </div>
</main>
<!-- End-Main -->

<!-- Footer -->
<?php require VIEWS . '/incs/footer.php' ?>
<!-- End-Footer -->