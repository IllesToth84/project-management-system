<?php 
require 'projects/projects.php';

$projects = getProjects();

include 'partials/header.php';

?>


<div class="container">
    <h3>Projektkezelő rendszer</h3>
</div>

<div class="container">
<<<<<<< HEAD
    <table class="table">

=======
    <div class="container-header" style="display: grid; grid-template-columns: 3fr 1fr;">
        <div class="filter-wrapper" style="display: flex; align-items: center; width: 100%;">
            <select name="status" id="select" class="form-control" onchange="filterTable()">
                <option value="" selected>Szűrés státusz alapján</option>
                <option value="Fejlesztésre vár" class="filter-table">Fejlesztésre vár</option>
                <option value="Folyamatban" class="filter-table">Folyamatban</option>
                <option value="Kész" class="filter-table">Kész</option>
            </select>
        </div>
        <div class="pagination-wrapper" style="display: flex; align-items: center; width: 100%;">
            <nav aria-label="Table navigation">
                <ul class=pagination>
                    <li id="previous-page">
                        <a href="javascript:void(0)" aria-label=Previous>
                            <span aria-hidden=true>&laquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <table class="table">
>>>>>>> 139c6a8... second commit
        <thead>
            <tr>
                <th>Projekt név</th>
                <th>Leírás</th>
                <th>Státusz</th>
                <th>Kapcsolattartók</th>
                <th>Módosítás</th>
            </tr>
        </thead>

<<<<<<< HEAD
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
=======
        <tbody id="loop">
            <?php foreach ($projects as $project): ?>
            <tr class="table-row">
>>>>>>> 139c6a8... second commit
                <td>
                    <?php echo $project['name'] ?>
                </td>
                <td>
                    <?php echo $project['description'] ?>
                </td>
                <td>
                    <?php echo $project['status'] ?>
                </td>
<<<<<<< HEAD
                <?php foreach($project['contacts'] as $contact): ?>
                <td class="contact-td">
                   <ul>
                    <li><b><?php echo $contact['name']; ?></b> &nbsp;<?php echo $contact['email']; ?></li>
                    </ul>
                </td>
                <?php endforeach; ?>

                <td>
                    <a href="update.php?id=<?php echo $project['id'] ?>"><button class="btn btn-sm btn-primary">Szerkeszt</button></a>
=======
                <td class="contact-td">
                    <?php echo count($project['contacts']); ?>
                </td>

                <td>
                    <a href="update.php?id=<?php echo $project['id'] ?>">
                        <button class="btn btn-sm btn-primary">Szerkeszt</button>
                    </a>
>>>>>>> 139c6a8... second commit
                    <form method="POST" action="delete.php" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?php echo $project['id'] ?>">
                        <button class="btn btn-sm btn-danger">Töröl</button>
                    </form>
                </td>
            </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
    <a href="create.php"><button class="btn btn-success">Projekt létrehozása</button></a>

</div>
<<<<<<< HEAD

=======
>>>>>>> 139c6a8... second commit
<?php include 'partials/footer.php' ?>
