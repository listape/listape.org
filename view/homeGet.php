<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container text-center">
        <div class="row-fluid">
            <div class="offset3 span6">
                <img src="/img/mushape.svg" alt="" width="300">
                <form class="" action="/" method="get">
                    <label for="s">Digite o nome da lista</label>
                    <input type="text" class="input-block-level" name="s" value="" id="s">
                    <button type="submit+class=btn">Pesquisar</button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
