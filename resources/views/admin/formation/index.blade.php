@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Formations</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active">Formation</li>
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
                                    <a href="{{ url('admin/formation/create') }}"
                                        class="btn btn-sm btn-success float-left"><i class="fa fa-plus"></i> Ajouter</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($formation as $item)
                                                <tr>
                                                    <td>{{ $item->nom }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/formation/' . $item->id . '/edit') }}"
                                                            title="Modifier formation" class="btn btn-primary btn-sm"><i
                                                                class="fas fa-edit" aria-hidden="true"></i>
                                                            Modifier</a>
                                                        <form method="POST"
                                                            action="{{ url('/admin/formation' . '/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                title="Delete formation"
                                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i>
                                                                Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">
                                                        <div class="text-center">Nous n'avons aucune formation enregistré
                                                            pour
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
