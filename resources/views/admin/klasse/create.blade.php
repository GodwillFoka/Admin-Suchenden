@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Classes</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/klasse') }}">Classe</a></li>
                            <li class="breadcrumb-item active">Ajouter</li>
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

                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Ajouter</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <form method="POST" action="{{ url('/admin/klasse') }}" accept-charset="UTF-8"
                                        class="form-horizontal" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @include('admin.klasse.form', ['formMode' => 'create'])
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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
