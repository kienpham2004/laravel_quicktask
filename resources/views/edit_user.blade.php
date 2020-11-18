@extends('content')
@section('useredit')

<form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('put')

    <fieldset>
        <h2 class="adduser">{{ trans('mes_user.add_user') }}</h2>
        
        <div class="form-group">
            <label for="name">{{ trans('mes_user.username') }}</label>
            <input type="text" class="form-control" id="email" 
                placeholder="{{ trans('mes_user.plh_name') }}" name="name"
                value="{{ $user->name}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
    
        <div class="form-group">
            <label for="name">{{ trans('mes_user.email') }}</label>
            <input type="text" class="form-control" 
                name="email" value="{{ $user->email}}" readonly>
        </div>
    
        <div class="form-group">
            <label for="pwd">{{ trans('mes_user.password') }}</label>
            <input type="password" class="form-control" 
                placeholder="{{ trans('mes_user.plh_password') }}" 
                name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="pwd">{{ trans('mes_user.password_confirm') }}</label>
            <input type="password" class="form-control" 
                placeholder="{{ trans('mes_user.plh_password_confirm') }}" 
                name="password_confirm">
                @error('password_confirm')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="control-group">
            <div class="controls actionuser">
                <button class="btn btn-success" type="submit">{{ trans('mes_user.update') }}</button>
                <a href="{{ route('user.back') }}" class="btn btn-danger ">{{ trans('mes_user.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>

@endsection
