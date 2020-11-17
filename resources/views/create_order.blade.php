@extends('content')
@section('create_order')

<form class="form-horizontal" action="{{ route('order.store') }}" method="POST">
    @csrf
    <fieldset>
        <h2 class="adduser">{{ trans('mes_order.add_order') }}</h2>
    
        <div class="form-group">
            <label for="name">{{ trans('mes_order.user_id') }}</label>
            <input type="text" class="form-control" id="email" 
                placeholder="{{ trans('mes_order.plh_id_user') }}" name="user_id" 
                value="{{ old('user_id') }}" >
                @error('order_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-group">
            <label for="name">{{ trans('mes_order.order_name') }}</label>
            <input type="text" class="form-control" 
                placeholder="{{ trans('mes_order.plh_name_order') }}" 
                name="order_name" >
                @error('order_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="control-group">
            <div class="controls actionuser">
                <button class="btn btn-success" 
                    type="submit">{{ trans('mes_order.register') }}</button>
                <a href="{{ route('order.back') }}" 
                    class="btn btn-danger ">{{ trans('mes_order.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>

@endsection
