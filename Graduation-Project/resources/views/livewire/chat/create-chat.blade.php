<div>
    @section('content')
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
     @foreach($doctors as $doctor)
       <li wire:click='checkconversation({{$doctor->id}})'>{{$doctor->name}}</li>

    @endforeach
    </ul>
    @endsection
</div>
