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
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Project: <b>
                    <?php echo $project['name'] ?></b></h3>
        </div>
        <table class="table">

            <tbody>
                <tr>
                    <th>Name:</th>
                    <td>
                        <?php echo $project['name'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>
                        <?php echo $project['description'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>
                        <?php echo $project['status'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php' ?>
