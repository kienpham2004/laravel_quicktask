@extends('content')
@section('userindex')

    <h2>Users list</h2>

    <form action="{{ route('user.create') }}" method="get">
      <button class="btn btn-primary actionuser" type="submit">{{ trans('trans.add_user') }}</button>
    </form>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('trans.name') }}</th>
                <th>{{ trans('trans.email') }}</th>
                <th>{{ trans('trans.create_at') }}</th>
                <th>{{ trans('trans.update_at') }}</th>
                <th>{{ trans('trans.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td class="buttonflex">
                        <form action="{{ route('user.edit', $user->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning" type="submit">{{ trans('trans.edit') }}</button>
                        </form>
                            &nbsp; &nbsp; 
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">{{ trans('trans.ok') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>     
    </table>

@endsection
