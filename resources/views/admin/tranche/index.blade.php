@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Tranches</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Tranche</li>
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
                                    <a href="{{ url('admin/tranche/create') }}" class="btn btn-sm btn-success float-left"><i
                                            class="fa fa-plus"></i> Ajouter</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Niveau</th>
                                                <th>Montant</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tranche as $item)
                                                <tr>
                                                    <td><b>{{ $item->nom }}</b></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            <b>{{ $item->montant }} FCFA</b></div>
                                                    </td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/tranche/' . $item->id . '/edit') }}"
                                                            title="Modifier tranche" class="btn btn-primary btn-sm"><i
                                                                class="fas fa-edit" aria-hidden="true"></i>
                                                            Modifier</a>
                                                        <form method="POST"
                                                            action="{{ url('/admin/tranche' . '/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                title="Delete tranche"
                                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i>
                                                                Supprimer</button>
                                                        </form>
                                                        {{-- @if (null != Auth::user() && (Auth::user()->hasPermission('tranche-delete') || Auth::user()->hasRole('administrateur')))
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm  deleted_element"
                                                            title="Delete tranche"
                                                            onclick="return alertDeleteElement({{ $item->id }},'/admin/tranche/' + {{ $item->id }})"><i
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
