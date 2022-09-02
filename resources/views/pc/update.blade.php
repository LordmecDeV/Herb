@extends('colaboradores.layout')
@section('content')

        <script language="javascript">   
        function moeda(a, e, r, t) {
            let n = ""
            , h = j = 0
            , u = tamanho2 = 0
            , l = ajd2 = ""
            , o = window.Event ? t.which : t.keyCode;
            if (13 == o || 8 == o)
                return !0;
            if (n = String.fromCharCode(o),
            -1 == "0123456789".indexOf(n))
                return !1;
            for (u = a.value.length,
            h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
                ;
            for (l = ""; h < u; h++)
                -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
            if (l += n,
            0 == (u = l.length) && (a.value = ""),
            1 == u && (a.value = "0" + r + "0" + l),
            2 == u && (a.value = "0" + r + l),
            u > 2) {
                for (ajd2 = "",
                j = 0,
                h = u - 3; h >= 0; h--)
                    3 == j && (ajd2 += e,
                    j = 0),
                    ajd2 += l.charAt(h),
                    j++;
                for (a.value = "",
                tamanho2 = ajd2.length,
                h = tamanho2 - 1; h >= 0; h--)
                    a.value += ajd2.charAt(h);
                a.value += r + l.substr(u - 2, u)
            }
            return !1
        }
        </script> 


        <form class="row g-3 shadow p-3 mb-4 bg-body rounded mt-3 " action="{{ route('updateComputador', ['id' => $attDados->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">    
        {{ csrf_field() }}
        {{ method_field('put') }}

            <h1 style="text-align:center;" class="mb-4">Editar Computador</h1>

            <div class="col-md-6">
                <label for="id_do_pc" class="form-label">Id do pc:</label>
                    <input type="text" class="form-control" id="id_do_pc" name="id_do_pc" require placeholder="" value="{{$attDados->id_do_pc}}">
                    </div>

                    <div class="col-md-6">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control" id="marca" require name="marca" placeholder="" value="{{$attDados->marca}}">
                    </div>

                    <div class="col-2">
                    <label for="ram" class="form-label">RAM:</label>
                    <input type="text" class="form-control" require name="ram" id="ram" value="{{$attDados->ram}}">
                    </div>

                    <div class="col-2">
                    <label for="memoria" class="form-label">Memoria:</label>
                    <input type="memoria" class="form-control" require name="memoria" id="memoria" value="{{$attDados->memoria}}">
                    </div>

                    <div class="col-2">
                    <label for="processador" class="form-label">Processador:</label>
                    <input type="processador" class="form-control" require name="processador" id="processador" value="{{$attDados->processador}}">
                    </div>

                    <div class="col-5">
                    <label for="sistema_operacional" class="form-label">Sistema Operacional:</label>
                    <input type="sistema_operacional" class="form-control" require name="sistema_operacional" id="sistema_operacional" value="{{$attDados->sistema_operacional}}">
                    </div>

                    <div class="col-5">
                    <label for="preco" class="form-label">Preço:</label>
                    <input type="text" class="form-control" id="valor" placeholder="R$500,00" required name="preco" onKeyPress="return(moeda(this,'.'.'.',event))" value="{{$attDados->preco}}">
                    </div>

                    <div class="col-5">
                    <label for="preco" class="form-label">status:</label>
                    <select class="form-select" name="status" require id="status" aria-label="Floating label select example">
                    <option></option>
                    <option {{($attDados->status == 'Disponivel' ? 'selected' : '' )}}>Disponivel</option>
                    <option {{($attDados->status == 'Em uso' ? 'selected' : '' )}}>Em uso</option>
                    <option {{($attDados->status == 'Manutenção' ? 'selected' : '' )}}>Manutenção</option>
                    </select>
                    </div>

                    <!-- botão que envia as info para o banck-end!-->
                <div class="col-12">
            <button type="submit" class="btn btn-success ">Atualizar computador</button>
            <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
            </div>

        </form> 

@endsection