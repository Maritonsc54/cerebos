@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <h1>CEREBOS</h1>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Cerebos</span></h6>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                        {{ csrf_field() }}
                        <fieldset class="form-group position-relative has-icon-left mb-0 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control form-control-lg input-lg" id="email" name="email" value="{{ old('email') }}" placeholder="Your Username" required autofocus>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control form-control-lg input-lg" id="user-password"  name="password" placeholder="Enter Password" required>
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </fieldset>
                        <fieldset class="form-group row">
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember" name="remember" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"> Remember Me</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right"></div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="">
                    <p class="float-sm-right text-xs-center m-0">Developer by | Mr.kanawoot korsang</p>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    </div>
</div>
@endsection
