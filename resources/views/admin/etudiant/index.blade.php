@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Etudiants</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Etudiants</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-12">
                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Les plus récentes</h3>
                                <div class="card-tools">
                                    <a href="{{ url('admin/etudiant/create') }}"
                                        class="btn btn-sm btn-success float-left"><i class="fa fa-plus"></i> Ajouter</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="row d-flex align-items-stretch">
                                    <div class="col-10 px-3">
                                        @foreach ($etudiant as $item)
                                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                <div class="card bg-light">
                                                    <div class="ribbon-wrapper">
                                                        @if ($item->statut == 'en_regle')
                                                            <div class="ribbon bg-success">
                                                            @elseif ($item->statut == 'en_cours')
                                                                <div class="ribbon bg-warning">
                                                                @elseif ($item->statut == 'non_en_regle')
                                                                    <div class="ribbon bg-danger">
                                                        @endif
                                                        <b>{{ $item->niveau }}</b>
                                                    </div>
                                                </div>
                                                <div class="card-header text-muted border-bottom-0">
                                                    {{ $item->nom }} {{ $item->prenom }}
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="p-1"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-home"></i></span><u>Adresse:</u>
                                                                    {{ $item->ville }}
                                                                </li>
                                                                <li class="p-1"><span class="fa-li"><i
                                                                            class="fas fa-lg fa-phone-square-alt"></i></span><u>Phone:</u>
                                                                    <a
                                                                        href="tel:{{ $item->telephone }}">{{ $item->telephone }}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <img src="{{ $item->photo }}" alt="{{ $item->nom }} {{ $item->prenom }}"
                                                                alt="Nom" class="img-circle img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-center">
                                                        <a href="{{ url('/admin/etudiant/' . $item->id) }}"
                                                            class="btn btn-shadow-dark btn-wider btn-info">
                                                            <i class="fas fa-address-card"></i> Plus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
