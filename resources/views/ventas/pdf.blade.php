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
                <th id="">TIENDA GIGANTS</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <p id="proveedor">
                        Dirección: Feria Barrio Lindo #22<br>
                        Teléfono: 3456122<br>
                        Email: tienda_gigants@gmail.com<br>
                    </p>
                </th>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="fact">
        <p>
            NIT: {{$venta->nit}}<br>
            FACTURA No. 00000000{{$venta->id}}<br>
            AUTORIZACIÓN No. {{$venta->nro_autorizacion}}
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
                <th> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>
                    <p> Fecha: {{$venta->created_at}}<br>
                        Nombre: {{$venta->cliente->nombre .' '. $venta->cliente->apellidos}}<br>
                        CI: {{$venta->cliente->carnet_identidad}}
                    </p>
                </th>
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
                <th>DETALLE</th>
                <th>CANTIDAD</th>
                <th>PRECIO UNT. (Bs)</th>
                <th>SUBTOTAL (Bs)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($venta->factura_detalles as $factura_detalle)
                <tr>
                    <td>{{$factura_detalle->producto->descripcion}}</td>
                    <td>{{$factura_detalle->cantidad}}</td>
                    <td>{{number_format ($factura_detalle->precio_venta,2)}}</td>
                    <td>{{number_format ($factura_detalle->importe,2)}}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th colspan="3">
                    <p align="right">TOTAL A PAGAR</p>
                </th>
                <td>
                    <p align="right">Bs.- {{number_format($venta->total,2)}}</p>
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
            <b>UD. FUE ATENDIDO POR: {{ auth()->user()->persona->nombre .' '. auth()->user()->persona->apellidos }}</b>
            <br>Muchas gracias por su compra
        </p>
    </div>
</footer>
</body>
</html>
