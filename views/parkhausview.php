<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkhausverwaltung</title>
    <link rel="stylesheet" href="../phpstarter/bootstrap-5.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Fahrzeuge</h2>

                <!-- table.table>(thead>tr>th*5)+(tbody>tr>td*5) -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kennzeichen</th>
                            <th>Marke</th>
                            <th>Typ</th>
                            <th>Baujahr</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($parkhaus->getFahrzeuge() as $f) { ?>
                        <tr>
                            <td><?= $f->getKennzeichen() ?: 'Unbekannt' ?></td>
                            <td><?= $f->getMarke() ?: 'Unbekannt' ?></td>
                            <td><?= $f->getTyp() ?: 'Unbekannt' ?></td>
                            <td><?= $f->getBaujahr() ?: 'Unbekannt' ?></td>
                            <td><?= $f->getStatus() ?: 'Unbekannt' ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <a href="<?= $_SERVER['PHP_SELF'] ?>?clear=1" class="btn btn-danger">Clear</a>

            </div>
            <div class="col">
                <h2>Neues Fahrzeug</h2>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-3">
                            <label for="kennzeichen" class="form-label">Kennzeichen</label>
                            <input type="text" name="kennzeichen" id="kennzeichen" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="marke" class="form-label">Marke</label>
                            <input type="text" name="marke" id="marke" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="typ" class="form-label">Typ</label>
                            <input type="text" name="typ" id="typ" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="baujahr" class="form-label">Baujahr</label>
                            <input type="text" name="baujahr" id="baujahr" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" id="status" class="form-control">
                        </div>

                        <button class="btn btn-info">Speichern</button>
                </form>
            </div>
        </div>
    </div>




    <script src="../phpstarter/bootstrap-5.3.1/js/bootstrap.min.js"></script>
</body>
</html>