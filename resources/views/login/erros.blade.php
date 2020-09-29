

{{---------------Feed de Erros ----------------}}



@if (count($errors) != 0) {{-- se variavel de erros for diferente de 0 --}}
    <div  class="alert alert-danger alert-dismissible fade show " role="alert">
            @if (count($errors) ==1)
                <strong class="">Erro!</strong> 
            @else
                <strong class="">Erros!</strong> 
            @endif
            <ul>
                @foreach ($errors->all() as $erro) {{--Passando as menssagens de erros --}}
                   <li class="font-weight-light text-left">{{$erro}}</li> 
                @endforeach
            </ul>
               
            
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
  </button>
   </div>
@endif

@if (isset($feed_errors))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Atenção!</strong> 
        @foreach ($feed_errors as $erro)
            <p> {{$erro}}</p>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
