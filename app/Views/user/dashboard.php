
<!-- //cheking user eists or not -->
<?php $local_session = session(); ?>
<?php if($local_session->getTempdata("email")): ?>
  <?php return redirect("login") ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #000;
        }
    </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
 <div class="container">
    <a href="<?=current_url();?>" class="navbar-brand">MultiTodo</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
       
        <li class="nav-item ms-3">
          <a class="btn btn-black btn-rounded" href="<?=base_url();?>login">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 










    
</body>
</html>