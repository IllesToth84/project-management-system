<?php
include 'partials/header.php';
require __DIR__.'/projects/projects.php';

if (!isset($_POST['id'])){
    include "partials/not_found.php";
    exit;
}

$projectId = $_POST['id'];
deleteProject($projectId);

header("Location: index.php");

?>
