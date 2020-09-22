<?php
include 'partials/header.php';
require __DIR__.'/projects/projects.php';
 
$project = [
    'id' => '',
    'name' => '',
    'description' => '',
    'status' => '',
    'contacts' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
createProject($_POST);
header("Location: index.php");
}

?>

<<<<<<< HEAD
<?php include '_form.php' ?>
=======
<?php include 'forms/create_form.php' ?>
>>>>>>> 139c6a8... second commit

<?php include 'partials/footer.php'; ?>
