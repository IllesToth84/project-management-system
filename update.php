<?php
include 'partials/header.php';

require __DIR__.'/projects/projects.php';

if (!isset($_GET['id'])){
    include "partials/not_found.php";
    exit;
}



$projectId = $_GET['id'];

$project = getProjectById($projectId);
if (!$project) {
    include "partials/not_found.php";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  updateProject($_POST, $projectId);
  header("Location: index.php");
}

?>

<<<<<<< HEAD
<?php include '_form.php' ?>
=======
<?php include 'forms/update_form.php' ?>
>>>>>>> 139c6a8... second commit

<?php include 'partials/footer.php'; ?>
