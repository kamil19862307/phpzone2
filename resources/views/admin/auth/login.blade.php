<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Логин</title>

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
            <a href="{{ route('home') }}">
                <img src="{{ asset('storage/images/logo.png') }}"/>
            </a>
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form role="form" action="{{ route('admin.sign_in') }}" method="post">
                    @csrf
                    <hr/>
                    <h5>Введите данные для входа</h5>

                    @if($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="text"
                               name="email"
                               class="form-control"
                               placeholder="Ваш Email"
                               value="{{ old('email') }}"/>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Ваш пароль"
                               value="{{ old('password') }}"/>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"
                                   name="remember"
                                   value="1"/>
                            Запомнить меня
                        </label>
                        <span class="pull-right">
                            <a href="index.html">Забыли пароль? </a>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Войти</button>
                    <hr/>
                    Нет аккаунта? <a href="{{ route('admin.register') }}">Нажмите сюда </a> либо <a href="{{ route('home') }}">На главную</a>
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>
