@if (Session::has('message'))
    @php
        $messages = Session::get('message');
    @endphp
    <div class="col-md-11 alert alert-{{ $messages['type'] }}" id="msg">
        <b>{{ $messages['value'] }}</b>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
