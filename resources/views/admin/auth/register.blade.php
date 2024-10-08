<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Регистрация</title>

    @vite([
        'resources/admin/assets/css/bootstrap.css',
        'resources/admin/assets/css/font-awesome.css',
        ])
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <a href="index.html">
                <img src="{{ asset('storage/images/logo.png') }}"/>
            </a>
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form role="form">
                    <hr/>
                    <h5>Введите данные для регистрации</h5>
                    <br/>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="text" class="form-control" placeholder="Ваше имя"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                        <input type="text" class="form-control" placeholder="Ваш Email"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Ваш пароль"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Повторите пароль"/>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"/> Запомнить меня
                        </label>
                        <span class="pull-right">
                            <a href="index.html">Вспомнили пароль?</a>
                        </span>
                    </div>

                    <a href="index.html" class="btn btn-primary ">Войти</a>
                    <hr/>
                    Вернуться <a href="index.html">На главную</a>
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>
