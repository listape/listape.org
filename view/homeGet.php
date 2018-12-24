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
                <a href="/" title="ListApe">
                    <img src="/img/mushape.svg" alt="" width="300" alt="ListApe">
                </a>
                <?php view('inc/formSearch',$data); ?>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
