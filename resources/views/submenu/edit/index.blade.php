@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Creditos Otorgados</h4>
                            <table class="table supervisor-editC-table">
                                <tbody>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Credito</th>
                                    <th>Barrio</th>
                                    <th>Hora</th>
                                    <th>Tasa</th>
                                    <th>Cuotas</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                                @foreach($credit as $cred)
                                    <tr>
                                        <td><span class="value">{{$cred->name}} {{$cred->last_name}}</span></td>
                                        <td><span class="value">{{$cred->credit_id}}</span></td>
                                        <td><span class="value">{{$cred->province}}</span></td>
                                        <td><span class="value">{{$cred->created_at}}</span></td>
                                        <td><span class="value">{{$cred->utility}}</span></td>
                                        <td><span class="value">{{$cred->payment_number}}</span></td>
                                        <td><span class="value">{{$cred->amount_neto}}</span></td>
                                        <td class="text-right">
                                            <a href="{{url('supervisor/credit')}}/{{$cred->credit_id}}/edit?id_wallet={{$id_wallet}}" class="btn btn-xs btn-warning">Editar</a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Gastos del Agente</h4>
                            <table class="table supervisor-editG-table">
                                <tbody>
                                <tr>
                                    <th>Gasto</th>
                                    <th>Detalle</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                                @foreach($bills as $bill)
                                    <tr>
                                        <td><span class="value">{{$bill->type}}</span></td>
                                        <td><span class="value">{{$bill->description}}</span></td>
                                        <td><span class="value">{{$bill->amount}}</span></td>
                                        <td class="text-right">
                                            <a href="{{url('supervisor/bill')}}/{{$bill->id}}/edit?id_wallet={{$id_wallet}}" class="btn btn-xs btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Pagos Recibidos</h4>
                            <table class="table supervisor-editP-table">
                                <tbody>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Credito</th>
                                    <th>Cuota</th>
                                    <th>Valor</th>
                                    <th>Saldo</th>
                                    <th></th>
                                </tr>
                                @foreach($summary as $sum)
                                    <tr>
                                        <td><span class="value">{{$sum->name}} {{$sum->last_name}}</span></td>
                                        <td><span class="value">{{$sum->id_credit}}</span></td>
                                        <td><span class="value">{{$sum->number_index}}</span></td>
                                        <td><span class="value">{{$sum->amount}}</span></td>
                                        <td><span class="value">{{($sum->amount_neto)-($sum->total_payment)}}</span></td>
                                        <td class="text-right">
                                            <a href="{{url('supervisor/summary')}}/{{$sum->id_summary}}/edit?id_wallet={{$id_wallet}}" class="btn btn-xs btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
