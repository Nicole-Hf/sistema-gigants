<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de Compra</title>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 16px;
        background: #fafafa;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #faproveedor {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #facproveedor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #faccomprador {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #faccomprador thead {
        padding: 20px;
        background: #0b3251;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: #0b3251;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }
</style>

<body>
<header>
    {{--<div id="logo">
        <img src="{{ asset('/img/faces/laravel.svg') }}" alt="" id="imagen">
    </div>--}}
    <div>
        <table id="datos">
            <thead>
            <tr>
                <th id="">DATOS DEL PROVEEDOR</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <p id="proveedor">Nombre: {{$compra->proveedor->nombre}}<br>
                        Dirección: {{$compra->proveedor->direccion}}<br>
                        Teléfono: {{$compra->proveedor->telefono}}<br>
                        Email: {{$compra->proveedor->email}}<br>
                    </p>
                </th>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="fact">
        <p>Nro. de Compra<br>
            000000{{$compra->id}}
        </p>
    </div>
</header>
<br>
<br>
<section>
    <div>
        <table id="faccomprador">
            <thead>
            <tr id="fv">
                <th>DATOS DE LA COMPRA</th>
                {{--<th>COMPRADOR:</th>
                <th>FECHA DE COMPRA:</th>--}}
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <p> Fecha de Compra: {{$compra->created_at}}<br>
                        Estado: {{$compra->estado}}<br>
                        Nombre: {{auth()->user()->persona->nombre}} {{auth()->user()->persona->apellidos}}<br>
                        Carnet de Identidad: {{auth()->user()->persona->carnet_identidad}}
                    </p>
                </th>
                {{--<td>{{$compra->administrador->nombre}}</td>
                <td>{{$compra->created_at}}</td>--}}
            </tr>
            </tbody>
        </table>
    </div>
</section>
<br>
<section>
    <div>
        <table id="facproducto">
            <thead>
            <tr id="fa">
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO COMPRA (Bs)</th>
                <th>SUBTOTAL (Bs)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($compra->compra_detalles as $compra_detalle)
                <tr>
                    <td>{{$compra_detalle->producto->descripcion}}</td>
                    <td>{{$compra_detalle->cantidad}}</td>
                    <td>{{number_format ($compra_detalle->costo_compra,2)}}</td>
                    <td>{{number_format ($compra_detalle->importe,2)}}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th colspan="3">
                    <p align="right">TOTAL A PAGAR</p>
                </th>
                <td>
                    <p align="right">Bs.- {{number_format($compra->total,2)}}</p>
                </td>
            </tr>
            <tr>
                <th colspan="3">
                    <p align="right">SALDO</p>
                </th>
                <td>
                    <p align="right">Bs.- {{number_format($compra->saldo,2)}}</p>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</section>
<br>
<br>
<footer>
    <div id="datos">
        <p id="encabezado">
            <b>TIENDA GIGANTS</b>
            <br>Teléfono: 3456122
            <br>Email: tienda_gigants@gmail.com
        </p>
    </div>
</footer>
</body>
</html>
