@extends('content')
@section('useredit')

<form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="POST">
  @csrf
  @method('put')

  <fieldset>
    <h2 class="adduser">{{ trans('trans.add_user') }}</h2>
    
     <div class="form-group">
       <label for="name">{{ trans('trans.username') }}</label>
       <input type="text" class="form-control" id="email" 
               placeholder="{{ trans('trans.plh_name') }}" name="name"
                value="{{ $user->name}}">
      @if ($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name') }}</p>
      @endif
     </div>
 
     <div class="form-group">
       <label for="name">{{ trans('trans.email') }}</label>
       <input type="text" class="form-control" 
               name="email" value="{{ $user->email}}" readonly>
     </div>
  
     <div class="form-group">
       <label for="pwd">{{ trans('trans.password') }}</label>
       <input type="password" class="form-control" 
                placeholder="{{ trans('trans.plh_password') }}" 
                  name="password">
      @if ($errors->has('password'))
        <p class="text-danger">{{ $errors->first('password') }}</p>
      @endif
     </div>

     <div class="form-group">
      <label for="pwd">{{ trans('trans.password_confirm') }}</label>
      <input type="password" class="form-control" 
              placeholder="{{ trans('trans.plh_password_confirm') }}" 
               name="password_confirm">
      @if ($errors->has('password_confirm'))
        <p class="text-danger">{{ $errors->first('password_confirm') }}</p>
      @endif
    </div>
     
     <div class="control-group">
 
       <div class="controls actionuser">
         <button class="btn btn-success" type="submit">{{ trans('trans.update') }}</button>
         <a href="{{ route('user.back') }}" class="btn btn-danger ">{{ trans('trans.cancel') }}</a>
       </div>
     </div>
   </fieldset>
</form>

@endsection
