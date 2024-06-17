<?php
include ('./conn/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diaryID = $_POST['diaryID'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("UPDATE tbl_diary SET title = ?, content = ? WHERE tbl_diary_id = ?");
    $stmt->execute([$title, $content, $diaryID]);

    header("Location: read-diary.php");
    exit();
}
?>
