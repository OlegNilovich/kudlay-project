<!-- Header -->
<?php require VIEWS . '/incs/header.php' ?>
<!-- End-Header -->

<!-- Main -->
<main class="main py-3">
   <div class="container">
      <div class="row">

         <!-- Content -->
         <div class="col-md-12">

            <h1> <?= h($post['title']) ?> </h1>
            <?= $post['content'] ?>

            <form action="/posts" method="POST">
               <input type="hidden" name="_method" value="DELETE">
               <input type="hidden" name="id" value="<?= $post['id'] ?>">
               <button type="submit" class="btn btn-link">Delete</button>
            </form>

         </div>
         <!-- End-Content -->

      </div>
   </div>
</main>
<!-- End-Main -->

<!-- Footer -->
<?php require VIEWS . '/incs/footer.php' ?>
<!-- End-Footer -->