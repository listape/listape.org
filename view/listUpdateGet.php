<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Atualizar lista</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav',$data); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset3 span6">
                <h1>Atualizar lista</h1>
                <form id="frmList" class="form-vertical" action="/list/<?php e($list['uid']); ?>/update" method="post">
                    <label for="name">Nome da lista</label>
                    <input type="text" name="name" id="name" value="<?php e($list['name']); ?>" class="input-block-level" minlength="3" maxlength="<?php print $_ENV['LIST_MAX_NAME_SIZE']; ?>" required>
                    <button type="submit" name="button">Atualizar lista</button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <script type="text/javascript">
    $(function() {
        var validator = $( "#frmList" ).validate( {
            rules: {
                name: {
                    normalizer: function( value ) {
                        return $.trim( value );
                    }
                }
            }
        } );

        $( "#name" ).focus();
        <?php
        if(isset($error)){
            print 'validator.form();';
        }
        ?>
    });
    </script>
    <?php view('inc/footer'); ?>
</body>
</html>
