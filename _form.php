<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($project['id']): ?>
                Projekt szerkesztése: <b>
                    <?php echo $project['name'] ?></b>
                <?php else: ?>
                Projekt létrehozása:
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">
            <form method="post" enctype="application/json" action="">
                <div class="form-group">
                    <label>Projekt név</label>
                    <input name="name" value="<?php echo $project['name'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Leírás</label>
                    <input name="description" value="<?php echo $project['description'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Státusz</label>
                    <select name="status" value="<?php echo $project['status'] ?>" class="form-control" required>
                        <option value="Fejlesztésre vár">Fejlesztésre vár</option>
                        <option value="Folyamatban">Folyamatban</option>
                        <option value="Kész">Kész</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kapcsolattartók</label>

                    <div class="row">
                     <div class="col">
                            <input type="name" class="form-name" name="contacts[0][name]" placeholder="Név" value="<?php echo $project['contacts'][0]['name'] ?>">
                            <input type="email" class="form-email" name="contacts[0][email]" placeholder="E-mail" value="<?php echo $project['contacts'][0]['email'] ?>">
                        </div>
                       <div class="col">
                            <input type="name" class="form-name" name="contacts[1][name]" placeholder="Név" value="<?php echo $project['contacts'][1]['name'] ?>">
                            <input type="email" class="form-email" name="contacts[1][email]" placeholder="E-mail" value="<?php echo $project['contacts'][1]['email'] ?>">
                        </div>
                       <div class="col">
                            <input type="name" class="form-name" name="contacts[2][name]" placeholder="Név" value="<?php echo $project['contacts'][2]['name'] ?>">
                            <input type="email" class="form-email" name="contacts[2][email]" placeholder="E-mail" value="<?php echo $project['contacts'][2]['email'] ?>">
                        </div>
                        <div class="col">
                            <input type="name" class="form-name" name="contacts[3][name]" placeholder="Név" value="<?php echo $project['contacts'][3]['name'] ?>">
                            <input type="email" class="form-email" name="contacts[3][email]" placeholder="E-mail" value="<?php echo $project['contacts'][3]['email'] ?>">
                        </div>
                    </div>

                </div>

                <button class="btn btn-success">Mentés</button>

            </form>


        </div>
    </div>
</div>


<?php
