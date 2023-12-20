<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Sign Up Page</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #353535;
        }

        .container {
            max-width: 400px;
            margin-top: 50px;
        }

        .card {
            border: none;
            background-color: #353535;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #353535;
            color: #353535;
            text-align: center;
        }

        .card-header img {
            max-width: 100%;
            height: auto;
        }

        .card-body {
            padding: 20px;
        }

        h4.login {
            color: #f8f9fa;
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #353535;
            color: #f8f9fa;
            border: 1px solid #f8f9fa;
        }

        .btn {
            background-color: #2ecc71;
            border: none;
            color: #f8f9fa;
        }

        .btn a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .footer-text a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .text-center a {
            color: #2ecc71;
            margin: 0 10px;
            text-decoration: none;
        }

        .mt-3 a{
            color: #f8f9fa;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <img src="../images\logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="card-body">
                <h4 class="text-center mb-4">Sign Up to Your Account</h4>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cnic" placeholder="Cnic" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address" placeholder="Address" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" id="signup" class="btn  btn-block">Sign Up</button>
                    <button type="submit" class="btn btn-block">
                        <a href="login.html">Login</a></button>
                    <div class="text-center  mt-3">
                        <a href="../main.html">Back to Main</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script src="js/signupValidation.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
