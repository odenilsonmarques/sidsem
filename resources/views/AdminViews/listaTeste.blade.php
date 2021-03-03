@foreach ($registros as $registro)
    NOME:{{$registro->nome}}
    ANEXO:{{$registro->anexo}}.<br><hr>
    <img src="{{url("storage/{$registro->anexo}")}}">

   
@endforeach