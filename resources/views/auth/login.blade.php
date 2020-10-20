<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestilumi 3.0</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <style>
            fieldset.scheduler-border{
                border:1px solid #ddd !important;
                padding: 0 0 0 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow: 0px 0px 0px 0px #000;
                box-shadow: 0px 0px 0px 0px #000;
                border-radius:5px;
            }

            legend.scheduler-border{
                font-size:0.9em !important;
                font-weight: bold !important;
                text-align: left !important;
                border:none;
                margin: 0 1.5em 0 0 !important;
                padding: 0 0 0 0.2em !important;
                color: #908f8f !important;
            }

            .none-border{
                border: none;
            }

            .center-infyom{
                text-align:center !important;
                margin: 1.5em 0 0 0 !important;
            }

            .login-box-body{
                padding: 30% 1.5em 35% 1.5em !important;
                height:100% !important;
            }

            .login-logo{
                font-size: 1.5em !important;
            }

            .boton-margen{
                margin-top:1.2em !important;
            }

            .login-left{
                background:#0d1d2c !important;
                height:100% !important;
            }

            .title-gestilumi{
                color:white !important;
            }

            .color-login{
                background:#0d1d2c !important;
            }

            .color-login-font a{
                color:black !important;
            }
        </style>

</head>
<body class="hold-transition row">
<div class="col-md-8 col-xs-12">
    <div class="login-box-body login-left">
        <div class="row">
            <div class="col-xs-12">
                <img src="{!! asset('images/hb.png') !!}">
            </div>
        
                <div class="col-xs-12">
                    <h1 class="title-gestilumi"> Bem vindo ao SisPulsar 1.0</h1> 
                    Para conhecer as serviços de Grupo Pulsar Empreendimentos em Saúde
                    <br>
                    <a href="/">www.grupopulsar.com.br</a>
                </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-xs-12">
<div class="login-box-body">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><b>LOGIN</b></a>
    </div>

    <!-- /.login-logo -->
    
        <!--p class="login-box-msg">Insira seus dados para iniciar sua sessão</p-->

        <form method="post" action="{{ url('/login') }}">
            @csrf
            <fieldset class="scheduler-border"><legend class="scheduler-border">E-mail*</legend>
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                
                    
                    <input type="email" class="form-control none-border" name="email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    
                
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </fieldset>
            
            <fieldset class="scheduler-border"><legend class="scheduler-border">Senha*</legend>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control none-border" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </fieldset>
            <div class="row">
                <!--div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div-->
                <!-- /.col -->
                
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat boton-margen color-login">Login</button>
                </div>
                </div>
                <!-- /.col -->
                <div class="row">
                <div class="col-xs-12 center-infyom color-login-font">
        <a href="{{ url('/password/reset') }}">Esqueci minha senha</a><br>
        <!--a href="{{ url('/register') }}" class="text-center">Register a new membership</a-->
        </div>
        
    </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
