<!doctype html>
<head>
    <meta charset="utf-8">

    <title>MVC Tareas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <style>
        body {
            padding-top: 5rem;
            width: 100%;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
        .fa-trash-alt{
          color:red;
        }
        .fa-eye{
          color:grey;
        }
      
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container-fluid">
    <a class="navbar-brand" href="#">MVC Tareas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href=<?php echo WEBROOT . 'users/index' ?> >Users</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href=<?php echo WEBROOT . 'posts/index' ?> >Post </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href=<?php echo WEBROOT . 'comments/index' ?> >Comentarios</a>
        </li>
       
      </ul>
    </div>
  </div>

</nav>

<main role="main" class="container">

    <div class="starter-template">

        <?php
        echo $content_for_layout;
        ?>

    </div>

</main>


</body>
</html>
