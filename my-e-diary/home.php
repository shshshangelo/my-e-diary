<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY DIARY</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        /* Additional CSS for adjusting image size */
        .write-diary img,
        .read-diary img {
            width: 50%; /* Ensure images fill the entire width of their container */
            max-height: 200px; /* Limit the maximum height of the images */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
            border-radius: 8px; /* Optional: Rounded corners for aesthetics */
        }

        .select-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 50px;
            max-height: calc(100vh - 150px); /* Adjust based on navbar and title height */
            overflow: hidden; /* Hide overflow content */
        }

        .write-diary,
        .read-diary {
            text-align: center;
            max-width: 45%;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .write-diary h4,
        .read-diary h4 {
            margin-top: 20px;
            font-size: 24px;
        }

        .write-diary h6,
        .read-diary h6 {
            margin-top: 10px;
            font-size: 16px;
            color: #666;
        }

        /* Hover effect for logout button */
        #logoutButton:hover {
            background-color: #A52A2A; /* Change the background color on hover */
            color: white; /* Change the text color on hover */
        }
    </style>
</head>
<body>

    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #575347;">
            <a class="navbar-brand ml-4" href="#"><i class="fa-solid fa-book"></i>&nbsp; My Diary</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/my-e-diary/" id="logoutButton">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <div class="title-container">
                <h1>WELCOME TO MY DIARY</h1>
                <h3>What is happening today?</h3>
            </div>

            <div class="select-container">

                <div class="write-diary">
                    <img src="./assets/images/good.jpg" alt="Write a Diary Image">
                    <h4>Write your Memories</h4>
                    <h6>Write your thoughts, emotions, and reflections as they flow, capturing the essence of your experiences in a raw and authentic narrative.</h6>
                </div>

                <div class="read-diary">
                    <img src="./assets/images/new.jpg" alt="Read Diary Image">
                    <h4>Memories</h4>
                    <h6>Review all your memories by looking back at the things that happened in your life. Recall the small details and important moments that made your life special.</h6>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Script JS -->
    <script src="./assets/script.js"></script>

    <!-- Custom JS for Logout Button -->
    <script>
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            this.style.backgroundColor = 'red'; // Change the button's background color to red
            this.style.color = 'white'; // Optionally change the text color to white for better contrast
            setTimeout(() => {
                window.location.href = this.href; // Redirect after a short delay
            }, 200); // Adjust the delay as needed
        });
    </script>

</body>
</html>
