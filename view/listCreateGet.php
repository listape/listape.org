<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Enviar lista</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <h1>
                    Enviar lista
                </h1>
                <p>Selecione uma lista no formato csv e clique em enviar</p>
                <form class="form-vertical" action="index.html" method="post" enctype="multipart/form-data" method="post">
                    <div class="control-group">
                        <input type="file" name="file" class="input-block-level">
                    </div>
                    <button class="btn btn-primary btn-large input-block-level" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
