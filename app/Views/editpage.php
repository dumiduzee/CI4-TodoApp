<?php

use CodeIgniter\HTTP\SiteURI;

 $local_session = session(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #1E3A8A;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: white;
            font-weight: 600;
        }

        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #FFD700;
        }

        .container {
            max-width: 900px;
            margin-top: 30px;
        }

        .todo-card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .todo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .todo-item button {
            margin-left: 10px;
        }

        .todo-done {
            text-decoration: line-through;
            color: #6c757d;
        }

        .todo-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .todo-box p {
            margin: 0;
            font-weight: 600;
            flex-grow: 1;
        }

        .todo-actions {
            display: flex;
            gap: 10px;
        }

        .todo-actions i {
            cursor: pointer;
        }

        .btn-custom {
            background-color: #1E3A8A;
            color: white;
            font-weight: 600;
        }

        .btn-custom:hover {
            background-color: #0b1f57;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Todo App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?=base_url()?>login"><button class="btn btn-outline-light">Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="add-todo-form">
        <form action="<?=base_url()?>EditTodo/editItem" method="post">
            <div class="input-group">

                <input type="text" class="form-control" id="todoInput" name="todoitem"  value="<?= isset($tododata) ? $tododata : '' ?>" placeholder="Add a new task..." aria-label="Add a new task" >  
                <input type="hidden" value="<?= isset($todoid) ? $todoid : '' ?>  name="todoid">
                <button class="btn btn-custom" type="submit" >Edit Todo</button>
                
                </form>
            </div>
        </div>
        

    </div>

    
        


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    
</body>
</html>
