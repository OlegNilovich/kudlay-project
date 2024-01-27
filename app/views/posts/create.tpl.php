<!-- Header -->
<?php

require VIEWS . '/incs/header.php'

/**
 * @var \myfrm\Validator $validation
 */
?>
<!-- End-Header -->

<!-- Main -->
<main class="main py-3">
   <div class="container">
      <div class="row">

         <!-- Content -->
         <div class="col-md-12">

            <h1> New Post </h1>

            <form action="/posts" method="POST">

               <div class="mb-3">
                  <label for="title" class="form-label">Заголовок</label>
                  <input name="title" type="text" class="form-control" id="title" placeholder="Введите заголовок поста" value="<?= oldField('title') ?>">
                  <?= isset($validation) ? $validation->listErrors('title') : ""; ?>
               </div>

               <div class="mb-3">
                  <label for="excerpt" class="form-label">Краткое описание</label>
                  <textarea name="excerpt" class="form-control" id="excerpt" rows="2" placeholder="Заполните описание поста"><?= oldField('excerpt') ?></textarea>
                  <?= isset($validation) ? $validation->listErrors('excerpt') : ""; ?>
               </div>

               <div class="mb-3">
                  <label for="content" class="form-label">Содержание</label>
                  <textarea name="content" class="form-control" id="content" rows="5" placeholder="Заполните содержание поста"><?= oldField('content') ?></textarea>
                  <?= isset($validation) ? $validation->listErrors('content') : ""; ?>
               </div>

               <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Создать</button>
               </div>

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