<!-- Header -->
<?php require VIEWS . '/incs/header.php' ?>
<!-- End-Header -->

<!-- Main -->
<main class="main py-3">
   <div class="container">
      <div class="row">

         <!-- Posts -->
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
            <!-- End-Posts -->

            <hr>

            <!-- Pagination -->
            <?php
            for ($i = 1; $i <= $pages_count; $i++) {
               echo "<a href='?page={$i}'>{$i}</a> ";
            }
            ?>
            <!-- End-Pagination -->

         </div>

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