@extends('content')
@section('usercreate')

<form class="form-horizontal" action="{{ route('user.store') }}" method="post">
    @csrf
    <fieldset>
        <h2 class="adduser">{{ trans('mes_user.add_user') }}</h2>
    
        <div class="form-group">
            <label for="name">{{ trans('mes_user.username') }}</label>
            <input type="text" class="form-control"  
                placeholder="{{ trans('mes_user.plh_name') }}" name="name" 
                value="{{ old('name') }}" >
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="name">{{ trans('mes_user.mail') }}</label>
            <input type="text" class="form-control" 
                placeholder="{{ trans('mes_user.plh_email') }}" name="email" >
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
    
        <div class="form-group">
            <label for="pwd">{{ trans('mes_user.password') }}</label>
            <input type="password" class="form-control" 
                placeholder="{{ trans('mes_user.plh_password') }}" name="password" > 
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="pwd">{{ trans('mes_user.password_confirm') }}</label>
            <input type="password" class="form-control" 
                placeholder="{{ trans('mes_user.plh_password_confirm') }}" name="password_confirm" > 
                @error('password_confirm')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="control-group">
            <div class="controls actionuser" >
                <button class="btn btn-success" type="submit">{{ trans('mes_user.register') }}</button>
                <a href="{{ route('user.back') }}" class="btn btn-danger ">{{ trans('mes_user.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>

@endsection
