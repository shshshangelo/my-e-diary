<?php include ('./conn/conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Diary</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
                        <a class="nav-link" href="http://localhost/my-e-diary/">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <a class="back-button" href="http://localhost/my-e-diary/home.php">< Back</a>
            <div class="read-diary-container">
                <h1>Your list of diaries.</h1>

                <?php 
                
                    $stmt = $conn->prepare("SELECT * FROM tbl_diary");
                    $stmt->execute();

                    $result = $stmt->fetchAll();

                    foreach ($result as $row) {
                        $diaryID = $row['tbl_diary_id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = $row['date'];
                        ?>

                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title"><?= $title ?> <small class="float-right"><?= $date ?></small></h5>
                                <p class="card-text"><?= substr($content, 0, 300) . (strlen($content) > 300 ? '...' : '') ?></p>
                                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#viewModal<?= $diaryID ?>">View All</a>
                                <a href="#" class="btn btn-secondary float-right mr-2" data-toggle="modal" data-target="#editModal<?= $diaryID ?>">Edit</a>
                            </div>
                        </div>

                        <!-- View Modal -->
                        <div class="modal fade" id="viewModal<?= $diaryID ?>" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewModalLabel">Title: <?= $title ?></h5>
                                    <button type="button" class="btn btn-danger ml-auto" onclick="deleteDiary(<?= $diaryID ?>)"><i class="fa-solid fa-trash"></i></button>
                                </div>
                                <div class="modal-body">
                                    <?= $content ?>
                                </div>
                                <div class="modal-footer">
                                    <small class="mr-auto">Date: <?= $date ?></small>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?= $diaryID ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Diary: <?= $title ?></h5>
                                    </div>
                                    <form action="edit_diary.php" method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="diaryID" value="<?= $diaryID ?>">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="<?= $title ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea class="form-control" id="content" name="content" rows="10" required><?= $content ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                ?>

            </div>

        </div>

    </div>

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Script JS -->
    <script src="./assets/script.js"></script>
</body>
</html>
