@if($errors->any())
<div class="notification is-dager">

    <ul>
        @foreach ($errors->all() as $error )

        <li>
            {{$error}}
        </li>
            
        @endforeach
    </ul>

</div>
@endif