@extends('content')
@section('ordercreate')

<form class="form-horizontal" action="{{ route('order.store') }}" 
       method="POST">
    @csrf
    <fieldset>
        <h2 style="margin-left: 180px">{{ trans('trans.add_order') }}</h2>
    
        <div class="form-group">
            <label for="name">{{ trans('trans.user_id') }}</label>
            <input type="text" class="form-control" id="email" 
                    placeholder="{{ trans('trans.plh_id_user') }}" name="user_id" 
                     value="{{ old('user_id') }}" >
        </div>

        <div class="form-group">
            <label for="name">{{ trans('trans.order_name') }}</label>
            <input type="text" class="form-control" 
                    placeholder="{{ trans('trans.plh_name_order') }}" 
                     name="order_name" >
        </div>
        
        <div class="control-group">
            <div class="controls" style="float: right">
                <button class="btn btn-success" 
                         type="submit">{{ trans('trans.register') }}</button>
                <a href="{{ route('order.back') }}" 
                    class="btn btn-danger ">{{ trans('trans.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>

@endsection
