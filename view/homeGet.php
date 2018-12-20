<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>ListApe</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container text-center">
        <div class="row-fluid">
            <div class="offset3 span6">
                <br>
                <ul class="nav nav-tabs">
                    <?php view('inc/menu',$data); ?>
                </ul>
                <a href="/" title="ListApe">
                    <img src="/img/mushape.svg" alt="" width="300" alt="ListApe">
                </a>
                <form class="" action="/" method="get">
                    <div class="control-group"><br>
                        <input type="text" class="input-block-level" name="s" value="" id="s">
                    </div>
                    <button type="submit" class="btn btn-large">
                        Pesquisar
                    </button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
