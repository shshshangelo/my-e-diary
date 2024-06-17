<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function validateForm() {
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            // Custom validation for username
            if (!username.includes("@")) {
                showError("Please include an '@' in the email address.");
                return false;
            }

            // Check if password is empty
            if (password.trim() === "") {
                showError("Password is required.");
                return false;
            }

            // Check password length
            if (password.length < 5) {
                showError("Password must be at least 5 characters long.");
                return false;
            }

            return true;
        }

        function showError(message) {
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: message,
                confirmButtonText: 'OK'
            });
        }
    </script>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="login-container">
                <h1>My Diary</h1>
                <form action="./endpoint/login.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="email" class="form-control" id="username" name="username" required pattern=".*@.*">
                        <div class="invalid-feedback">
                            Please include an '@' in the email address.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="5">
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
