<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.1/css/bootstrap.min.css">
</head>
<body>
    <main class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <form action="index.php?a=save" method="post" class="row">
                    <div class="col-8">
                        <input type="text" name="product" id="product" class="form-control" placeholder="Produktname">
                    </div>

                    <div class="col-4">
                        <button class="btn btn-secondary">Hinzufügen</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Liste</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for($i = 0; $i < count($products); $i++) { ?>
                        <tr>
                            <td><?= ($i + 1) ?></td>
                            <td><?= $products[$i] ?></td>
                            <td><a href="index.php?a=delete&i=<?= $i ?>" class="btn btn-danger">Löschen</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="../bootstrap-5.3.1/js/bootstrap.min.js"></script>

</body>
</html>