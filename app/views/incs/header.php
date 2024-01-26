<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?? 'Title' ?></title>
   <base href="<?= PATH ?>/">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/main.css">
   <link rel="icon" href="img/favicon.ico">
</head>

<body>

   <div class="wrapper">

      <header class="header">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

               <a class="navbar-brand" href="#">Navbar</a>

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="about">О Нас</a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="posts/create">Создать пост</a>
                     </li>

                  </ul>
               </div>

            </div>
         </nav>
      </header>

      <?php get_alerts(); ?>