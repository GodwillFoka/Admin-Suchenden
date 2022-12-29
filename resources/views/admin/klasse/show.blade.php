@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Arrive {{ $arrive->id }}</div>
                    <div class="card-body">
                        <div style="float:right">
                            <a href="{{ url('/admin/arrive') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                            <a href="{{ url('/admin/arrive/' . $arrive->id . '/edit') }}" title="Modifier Arrive"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                        </div>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th> Type </th><td> {{ $arrive->type }} </td></tr><tr><th> Position </th><td> {{ $arrive->position }} </td></tr><tr><th> Temps </th><td> {{ $arrive->temps }} </td></tr><tr><th> Nom Athlete </th><td> {{ $arrive->athlete->nom }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
