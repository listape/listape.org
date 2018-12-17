<?php
$title='Entrar';
?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container">
        <div class="offset4 span3">
            <h1><?php print $title; ?></h1>
            <form id="frmSignin" class="form-vertical" action="/signin" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="input-block-level" required>
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="input-block-level" minlength="8" required>
                <button type="submit" class="btn-large btn-block btn-primary"><?php print $title; ?></button>
            </form>
            <script type="text/javascript">
            $(function() {
                var validator = $( "#frmSignin" ).validate();
                $( "#email" ).focus();
                <?php
                if(isset($error)){
                    print 'validator.form();';
                }
                ?>
            });
            </script>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
