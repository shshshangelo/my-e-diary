$(document).ready(function() {
    $(".write-diary").click(function() {
        window.location.href = "http://localhost/my-e-diary/write-diary.php";
    });

    $(".read-diary").click(function() {
        window.location.href = "http://localhost/my-e-diary/read-diary.php";
    });
});


function deleteDiary(id) {
    if (confirm('Do you want to delete this diary?')) {
        window.location = "./endpoint/delete-diary.php?diary=" + id;
    }
}