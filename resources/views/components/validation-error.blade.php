@if ($errors->any())
    <div class="alert card red lighten-1 white-text" style="border-radius: 20px">
        <div class="card-content">
            @foreach ($errors->all() as $error)
                <p style="font-weight: bold">{{$error}}</p>
            @endforeach
        </div>
    </div>
@endif
