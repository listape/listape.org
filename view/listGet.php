<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($list['name']); ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <h1>
                    <?php e($list['name']); ?>
                </h1>
                <p>
                    <?php e($list['description']); ?>
                </p>
                <?php
                $link='/list/'.$list['uid'].'/download';
                print '<a href="'.$link.'" class="btn btn-large input-block-level">';
                print 'Baixar lista';
                print '</a>';
                ?>
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
