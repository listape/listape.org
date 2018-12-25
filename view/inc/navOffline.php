<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/">ListApe</a>
            <div class="nav-collapse collapse">
<?php view('inc/menu',$data); ?>
                <form class="navbar-form pull-right" action="/signin" method="post">
                    <input class="span2" type="email" name="email" placeholder="Email">
                    <input class="span2" type="password" name="password" placeholder="Senha">
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
