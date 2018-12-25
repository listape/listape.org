<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Enviar lista</title>
  <?php view('inc/header'); ?>
</head>
<body>
  <?php view('inc/nav',$data); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="offset3 span6 text-center">
        <br>
        <form class="form-vertical" id="frmList" action="/list/_/create" method="post" enctype="multipart/form-data" method="post">
          <div class="control-group">
            <label for="file">Selecione um arquivo no formato csv, ods ou xlsx e clique em enviar</label>
            <input type="file" name="file" class="input-block-level" id="file" required>
          </div>
          <div class="text-center">
            <button class="btn btn-large" type="submit">Enviar</button>
          </div>
        </form>
        <script type="text/javascript">
        document.getElementById("file").onchange = function() {
          document.getElementById("frmList").submit();
        };
        $.validator.addMethod('filesize', function (value, element, param) {
          return this.optional(element) || (element.files[0].size <= param)
        }, 'File size must be less than {0} bytes');

        var validator=$('#frmList').validate({
          rules: {
            file: {
              required: true,
              extension: "csv,ods,xlsx",
              filesize: 1000000,//1000000 = 1 mb
            }
          },
          messages: {
            file: {
              extension: "Envie um arquivo {0}",
              filesize: 'Envie um arquivo com o no máximo 1 megabyte'
            }
          }
        });
        <?php
        if(isset($error)){
          print 'validator.form();';
        }
        ?>
        </script>
      </div>
    </div>
  </div> <!--container-->
  <?php view('inc/footer'); ?>
</body>
</html>
