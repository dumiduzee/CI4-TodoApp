<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTodo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(45deg, #007bff, #0056b3);
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
            text-transform: uppercase;
        }
        .nav-link:hover {
            color: #d4e3fc !important;
        }

        /* Login Form Styling */
        .login-container {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            margin: 50px auto;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            font-size: 1.8rem;
            font-weight: 600;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 500;
            color: #343a40;
        }
        .form-control {
            border: 1px solid #007bff;
            border-radius: 10px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-custom {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border: none;
            font-weight: 600;
            border-radius: 20px;
            width: 100%;
        }
        .btn-custom:hover {
            background: #0056b3;
            transition: 0.3s;
        }

        .btn-custom2 {
            background-color: white;
            color: #007bff;
            font-weight: 600;
            border: none;
            border-radius: 20px;
        }

        .btn-custom2:hover {
            background-color: #d4e3fc;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?=current_url();?>">MultiTodo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    
                  
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>


                </ul> -->
                <a href="<?=base_url();?>register"><button class="btn btn-custom2 ms-3">Sign Up</button></a>
            </div>
        </div>
    </nav>


    <?= $this->renderSection('content'); ?>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
