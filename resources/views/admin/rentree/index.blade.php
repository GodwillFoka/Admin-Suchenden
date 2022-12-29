@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Rentrees</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Rentree</li>
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
                                    <a href="{{ url('admin/rentree/create') }}" class="btn btn-sm btn-success float-left"><i
                                            class="fa fa-plus"></i> Ajouter</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($rentree as $item)
                                                <tr>
                                                    <td>{{ $item->nom }}</td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            {{ $item->date_debut }}</div>
                                                    </td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/rentree/' . $item->id . '/edit') }}"
                                                            title="Modifier rentree" class="btn btn-primary btn-sm"><i
                                                                class="fas fa-edit" aria-hidden="true"></i>
                                                            Modifier</a>
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm  deleted_element"
                                                            title="Delete rentree"
                                                            onclick="return alertDeleteElement({{ $item->id }},'/admin/rentree/' + {{ $item->id }})"><i
                                                                class="fa fa-trash" aria-hidden="true"></i> Supprimer</button>
                                                        {{-- @if (null != Auth::user() && (Auth::user()->hasPermission('rentree-delete') || Auth::user()->hasRole('administrateur')))
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm  deleted_element"
                                                            title="Delete rentree"
                                                            onclick="return alertDeleteElement({{ $item->id }},'/admin/rentree/' + {{ $item->id }})"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></button>
                                                    @endif --}}
                                                        {{-- <div class="btn-group">
                                                      <button type="button" class="btn btn-warning"><i class="fas fa-pen-square"></i> Modifier</button>
                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</button>
                                                    </div> --}}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">
                                                        <div class="text-center">Nous n'avons aucune rentrée enregistré pour
                                                            le moment veillez en créer une!</div>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
