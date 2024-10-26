<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Восстановить пароль</title>

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

            @if(session()->has('message'))
                {{ session('message') }}
            @endif

            <div class="panel-body">
                <form role="form" action="{{ route('admin.password.update') }}" method="post">
                    @csrf
                    <hr/>
                    <h5>Введите новый пароль</h5>

                    @if($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="text"
                               name="email"
                               required
                               class="form-control"
                               placeholder="Ваш Email"
                               value="{{ request('email') }}"/>
                    </div>

                    <div class="form-group input-group @error('password') has-error @enderror">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"
                               name="password"
                               required
                               class="form-control"
                               placeholder="Ваш пароль"/>
                    </div>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"
                               name="password_confirmation"
                               required
                               class="form-control"
                               placeholder="Повторите пароль"/>
                    </div>

                    <div class="form-group">
                          <span class="pull-right">
                            <a href="{{ route('admin.login') }}">Вспомнил пароль! </a>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Обновить пароль</button>
                    <hr/>
                    Нет аккаунта? <a href="{{ route('admin.register') }}">Нажмите сюда </a> либо <a href="{{ route('home') }}">На главную</a>
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>