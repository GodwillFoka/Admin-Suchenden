@extends('layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Gestion Des Etudiants</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/etudiant') }}">Etudiant</a></li>
                            <li class="breadcrumb-item active">détail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('Style/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Nina Mcintire</h3>

                                <p class="text-muted text-center">Software Engineer</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="float-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="float-right">13,287</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">Malibu, California</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    fermentum enim neque.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="{{ asset('Style/dist/img/user1-128x128.jpg')}}" alt="user image">
                                                <span class="username">
                                                    <a href="#">Jonathan Burke Jr.</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Shared publicly - 7:30 PM today</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="{{ asset('Style/dist/img/user7-128x128.jpg')}}" alt="User Image">
                                                <span class="username">
                                                    <a href="#">Sarah Ross</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Sent you a message - 3 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                    <input class="form-control form-control-sm" placeholder="Response">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="{{ asset('Style/dist/img/user6-128x128.jpg')}}" alt="User Image">
                                                <span class="username">
                                                    <a href="#">Adam Jones</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Posted 5 photos - 5 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid" src="{{ asset('Style/dist/img/photo1.png')}}"
                                                        alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="{{ asset('Style/dist/img/photo2.png')}}"
                                                                alt="Photo">
                                                            <img class="img-fluid" src="{{ asset('Style/dist/img/photo3.jpg')}}"
                                                                alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="{{ asset('Style/dist/img/photo4.jpg')}}"
                                                                alt="Photo">
                                                            <img class="img-fluid" src="{{ asset('Style/dist/img/photo1.png')}}"
                                                                alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-danger">
                                                    10 Feb. 2014
                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent
                                                        you an email</h3>

                                                    <div class="timeline-body">
                                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                        quora plaxo ideeli hulu weebly balihoo...
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-user bg-info"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                    <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                        accepted your friend request
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-comments bg-warning"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented
                                                        on your post</h3>

                                                    <div class="timeline-body">
                                                        Take me to your leader!
                                                        Switzerland is small and neutral!
                                                        We are more like Germany, ambitious and misunderstood!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-warning btn-flat btn-sm">View
                                                            comment</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-success">
                                                    3 Jan. 2014
                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-camera bg-purple"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded
                                                        new photos</h3>

                                                    <div class="timeline-body">
                                                        <img src="https://placehold.it/150x100" alt="...">
                                                        <img src="https://placehold.it/150x100" alt="...">
                                                        <img src="https://placehold.it/150x100" alt="...">
                                                        <img src="https://placehold.it/150x100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-4 required form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                                    <label for="photo" class="control-label">{{ 'Photo etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" accept="image/png,image/gif,image/jpg,image/jpeg" name="photo" type="file"
                                                        id="photo" placeholder="Entrer le photo de la rentree"
                                                        value="{{ isset($rentree->photo) ? $rentree->photo : '' }}" required>
                                                    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-2 required form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                                                    <label for="age" class="control-label">{{ 'Age etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" min="10" max="35" name="age" type="number" id="age"
                                                        placeholder="Entrer le age de la rentree" value="{{ isset($rentree->age) ? $rentree->age : '' }}" required>
                                                    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                                    <label for="telephone" class="control-label">{{ 'Telephone etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="telephone" type="text" id="telephone"
                                                        placeholder="Entrer le telephone de la rentree"
                                                        value="{{ isset($rentree->telephone) ? $rentree->telephone : '' }}" required>
                                                    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                                    <label for="nom" class="control-label">{{ 'Nom etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="nom" type="text" id="nom"
                                                        placeholder="Entrer le nom de la rentree" value="{{ isset($rentree->nom) ? $rentree->nom : '' }}" required>
                                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
                                                    <label for="prenom" class="control-label">{{ 'Prenom etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="prenom" type="text" id="prenom"
                                                        placeholder="Entrer le prenom de la rentree" value="{{ isset($rentree->prenom) ? $rentree->prenom : '' }}"
                                                        required>
                                                    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
                                                    <label for="ville" class="control-label">{{ 'Résidence' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="ville" type="text" id="ville"
                                                        placeholder="Entrer le quartier de la residence"
                                                        value="{{ isset($rentree->ville) ? $rentree->ville : '' }}" required>
                                                    {!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-3 requiredform-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                                    <label for="nom" class="control-label">{{ 'Niveau' }} <span class="text-red">*</span></label>
                                                    <select required name="nom" class="form-control">
                                                        <option selected disabled>Veuillez selectionner un niveau</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'A1' ? 'selected' : '' }} value="A1">
                                                            A1</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'A2' ? 'selected' : '' }} value="A2">
                                                            A2</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'B1' ? 'selected' : '' }} value="B1">
                                                            B1</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'B2' ? 'selected' : '' }} value="B2">
                                                            B2</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'C1' ? 'selected' : '' }} value="C1">
                                                            C1</option>
                                                    </select>
                                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                                </div>

                                                <div class="col-md-3 requiredform-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                                    <label for="nom" class="control-label">{{ 'Statut' }} <span class="text-red">*</span></label>
                                                    <select required name="nom" class="form-control">
                                                        <option selected disabled>Veuillez selectionner un statut</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'en_regle' ? 'selected' : '' }}
                                                            value="en_regle">
                                                            En règle</option>
                                                        <option {{ isset($etudiant->niveau) && $etudiant->niveau == 'non_en_regle' ? 'selected' : '' }}
                                                            value="non_en_regle">
                                                            Non en règle</option>
                                                    </select>
                                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('classe_id') ? 'has-error' : '' }}">
                                                    <label for="classe_id" class="control-label">{{ 'Classe etudiant' }} <span class="text-red">*</span></label>
                                                    <select name="classe_id" id="classe_id js-example-basic-single" class="custom-select2 form-control">

                                                        <option selected disabled>Veuillez selectionner une salle de classe</option>
                                                        @foreach ($classe as $item)
                                                            <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->classe_id) selected @endif>
                                                                {{ $item->niveau }} </option>
                                                        @endforeach
                                                    </select>
                                                    {!! $errors->first('classe_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('formation_id') ? 'has-error' : '' }}">
                                                    <label for="formation_id" class="control-label">{{ 'Formation etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <select name="formation_id" id="formation_id js-example-basic-single" class="custom-select2 form-control">

                                                        <option selected disabled>Veuillez selectionner la formation de l'étudiant</option>
                                                        @foreach ($formation as $item)
                                                            <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->formation_id) selected @endif>
                                                                {{ $item->nom }} </option>
                                                        @endforeach
                                                    </select>
                                                    {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('nom_parent') ? 'has-error' : '' }}">
                                                    <label for="nom_parent" class="control-label">{{ 'Nom parent' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="nom_parent" type="text" id="nom_parent"
                                                        placeholder="Entrer le nom_parent de la rentree"
                                                        value="{{ isset($rentree->nom_parent) ? $rentree->nom_parent : '' }}" required>
                                                    {!! $errors->first('nom_parent', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('contact_parent') ? 'has-error' : '' }}">
                                                    <label for="contact_parent" class="control-label">{{ 'Contact parent' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="contact_parent" type="text" id="contact_parent"
                                                        placeholder="Entrer le contact_parent de la rentree"
                                                        value="{{ isset($rentree->contact_parent) ? $rentree->contact_parent : '' }}" required>
                                                    {!! $errors->first('contact_parent', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('ville_provenance') ? 'has-error' : '' }}">
                                                    <label for="ville_provenance" class="control-label">{{ 'Ville de provenance etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="ville_provenance" type="text" id="ville_provenance"
                                                        placeholder="Entrer le ville_provenance de la rentree" value="{{ isset($rentree->ville_provenance) ? $rentree->ville_provenance : '' }}"
                                                        required>
                                                    {!! $errors->first('ville_provenance', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('niveau_etude') ? 'has-error' : '' }}">
                                                    <label for="niveau_etude" class="control-label">{{ 'Niveau d\'etude etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="niveau_etude" type="text" id="niveau_etude"
                                                        placeholder="Entrer le niveau_etude de la rentree"
                                                        value="{{ isset($rentree->niveau_etude) ? $rentree->niveau_etude : '' }}" required>
                                                    {!! $errors->first('niveau_etude', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('formation_scolaire') ? 'has-error' : '' }}">
                                                    <label for="formation_scolaire" class="control-label">{{ 'Diplome etudiant' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="formation_scolaire" type="text" id="formation_scolaire"
                                                        placeholder="Entrer le formation_scolaire de la rentree" value="{{ isset($rentree->formation_scolaire) ? $rentree->formation_scolaire : '' }}"
                                                        required>
                                                    {!! $errors->first('formation_scolaire', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-6 required form-group {{ $errors->has('formation_professionnelle') ? 'has-error' : '' }}">
                                                    <label for="formation_professionnelle" class="control-label">{{ 'Formation professionnelle' }} <span class="text-red">*</span></label>
                                                    <input class="form-control" name="formation_professionnelle" type="text" id="formation_professionnelle"
                                                        placeholder="Entrer le formation_professionnelle de la rentree" value="{{ isset($rentree->formation_professionnelle) ? $rentree->formation_professionnelle : '' }}"
                                                        required>
                                                    {!! $errors->first('formation_professionnelle', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                    <label for="description" class="control-label">{{ 'Description' }} </label>
                                                    <textarea class="form-control" rows="3" placeholder="Doonez plus d'informations sur l'étudiant"
                                                        name="description" type="textarea" id="description">{{ isset($rentree->description) ? $rentree->description : '' }}</textarea>
                                                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName2"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                    class="col-sm-2 col-form-label">Experience</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills"
                                                        placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms
                                                                and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
