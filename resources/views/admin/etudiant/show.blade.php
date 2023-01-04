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
                                    src="{{ $etudiant->photo }}" alt="{{ $etudiant->nom ." ". $etudiant->prenom }}">
                                </div>

                                <h3 class="profile-username text-center">{{ $etudiant->nom }}</h3>

                                <p class="text-muted text-center">{{ $etudiant->prenom }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Ages</b> <a class="float-right">{{ $etudiant->age }} Ans</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Sexe</b> <a class="float-right">{{ $etudiant->sexe }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Telephone</b> <a class="float-right">{{ $etudiant->telephone }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Quartier</b> <a class="float-right">{{ $etudiant->ville }}</a>
                                    </li>
                                </ul>
                                <div class="text-center row">
                                    <div class="col-4">
                                        <a href="tel:{{ $etudiant->telephone }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                                height="40" viewBox="0 0 50 50" style=" fill:#000000;">
                                                <path
                                                    d="M 14 3.9902344 C 8.4886661 3.9902344 4 8.4789008 4 13.990234 L 4 35.990234 C 4 41.501568 8.4886661 45.990234 14 45.990234 L 36 45.990234 C 41.511334 45.990234 46 41.501568 46 35.990234 L 46 13.990234 C 46 8.4789008 41.511334 3.9902344 36 3.9902344 L 14 3.9902344 z M 18.005859 12.033203 C 18.633859 12.060203 19.210594 12.414031 19.558594 12.957031 C 19.954594 13.575031 20.569141 14.534156 21.369141 15.785156 C 22.099141 16.926156 22.150047 18.399844 21.498047 19.589844 L 20.033203 21.673828 C 19.637203 22.237828 19.558219 22.959703 19.824219 23.595703 C 20.238219 24.585703 21.040797 26.107203 22.466797 27.533203 C 23.892797 28.959203 25.414297 29.761781 26.404297 30.175781 C 27.040297 30.441781 27.762172 30.362797 28.326172 29.966797 L 30.410156 28.501953 C 31.600156 27.849953 33.073844 27.901859 34.214844 28.630859 C 35.465844 29.430859 36.424969 30.045406 37.042969 30.441406 C 37.585969 30.789406 37.939797 31.366141 37.966797 31.994141 C 38.120797 35.558141 35.359641 37.001953 34.556641 37.001953 C 34.000641 37.001953 27.316344 37.761656 19.777344 30.222656 C 12.238344 22.683656 12.998047 15.999359 12.998047 15.443359 C 12.998047 14.640359 14.441859 11.879203 18.005859 12.033203 z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="https://wa.me/{{ $etudiant->telephone }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                                height="40" viewBox="0 0 64 64" style=" fill:#000000;">
                                                <radialGradient id="AhngXQ8Zf2VLA52L6fLwQa" cx="32.5" cy="32.5"
                                                    r="30.516" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#eed7a2"></stop>
                                                    <stop offset=".106" stop-color="#f1dcab"></stop>
                                                    <stop offset=".437" stop-color="#f8e8c3"></stop>
                                                    <stop offset=".744" stop-color="#fcefd2"></stop>
                                                    <stop offset="1" stop-color="#fef2d7"></stop>
                                                </radialGradient>
                                                <path fill="url(#undefined)"
                                                    d="M59,21h1.5c2.168,0,3.892-1.998,3.422-4.243C63.58,15.122,62.056,14,60.385,14L53,14 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h3.385c1.67,0,3.195-1.122,3.537-2.757C60.392,4.998,58.668,3,56.5,3H34.006H32.5h-24 C6.575,3,5,4.575,5,6.5S6.575,10,8.5,10H10c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-5.385,0c-1.67,0-3.195,1.122-3.537,2.757 C0.608,19.002,2.332,21,4.5,21H18v12L4.615,33c-1.67,0-3.195,1.122-3.537,2.757C0.608,38.002,2.332,40,4.5,40H5 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2H4.5c-2.168,0-3.892,1.998-3.422,4.243C1.42,49.878,2.945,51,4.615,51H10 c1.105,0,2,0.895,2,2c0,1.105-0.895,2-2,2l-1.385,0c-1.67,0-3.195,1.122-3.537,2.757C4.608,60.002,6.332,62,8.5,62h22.494H32.5h23 c1.925,0,3.5-1.575,3.5-3.5S57.425,55,55.5,55H55c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2h4.385c1.67,0,3.195-1.122,3.537-2.757 C63.392,45.998,61.668,44,59.5,44H47V32h12.385c1.67,0,3.195-1.122,3.537-2.757C63.392,26.998,61.668,25,59.5,25H59 c-1.105,0-2-0.895-2-2C57,21.895,57.895,21,59,21z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M29.947,7.082C17.733,8.057,7.89,18.032,7.059,30.256c-0.309,4.552,0.603,8.865,2.44,12.647 L6.134,55.69c-0.507,1.926,1.25,3.683,3.176,3.176l13.598-3.579c3.66,1.43,7.733,2.034,11.999,1.546 c11.801-1.349,21.144-11.084,22.021-22.93C58.067,18.55,45.318,5.855,29.947,7.082z">
                                                </path>
                                                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr1" x1="32.001"
                                                    x2="32.001" y1="11" y2="53.984" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#00d772"></stop>
                                                    <stop offset=".996" stop-color="#00b26e"></stop>
                                                    <stop offset="1" stop-color="#00b26e"></stop>
                                                </linearGradient>
                                                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQb_OlCQeBlsSdb9_gr1)"
                                                    d="M13.556,43.205c0.122-0.462,0.074-0.952-0.135-1.382l-0.323-0.666 c-1.59-3.274-2.298-6.95-2.047-10.629c0.698-10.274,8.959-18.64,19.215-19.458C30.843,11.023,31.426,11,32,11 c5.817,0,11.428,2.447,15.391,6.715c4.018,4.326,5.988,9.97,5.55,15.894c-0.73,9.854-8.678,18.129-18.486,19.251 C33.638,52.953,32.812,53,32,53l0,0c-2.624,0-5.192-0.484-7.635-1.438l-0.607-0.237c-0.394-0.154-0.827-0.179-1.237-0.071 l-10.25,2.697c-0.741,0.195-1.416-0.481-1.222-1.222L13.556,43.205z">
                                                </path>
                                                <path fill="#fff" fill-rule="evenodd"
                                                    d="M25.611,21.115c-0.479-1.06-0.983-1.082-1.44-1.101 C23.798,19.999,23.372,20,22.946,20c-0.426,0-1.119,0.16-1.706,0.797S19,22.974,19,26.107s2.292,6.16,2.612,6.584 c0.32,0.424,4.426,7.058,10.928,9.611c5.403,2.121,6.503,1.699,7.677,1.593c1.173-0.106,3.785-1.539,4.318-3.026 s0.533-2.761,0.374-3.026c-0.16-0.266-0.587-0.424-1.226-0.744c-0.295-0.147-1.928-0.949-3.717-1.813 c-0.826-0.399-1.818-0.186-2.405,0.519c-0.242,0.29-0.708,0.848-1.229,1.469c-0.592,0.706-1.587,0.917-2.415,0.513 c-1.27-0.62-3.141-1.649-4.601-2.945c-1.046-0.928-2.253-2.566-3.04-3.711c-0.529-0.77-0.462-1.8,0.169-2.489 c0.279-0.305,0.561-0.613,0.765-0.851c0.487-0.569,0.617-1.36,0.334-2.054C26.964,24.321,25.998,21.971,25.611,21.115z"
                                                    clip-rule="evenodd"></path>
                                                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr2" x1="43.455"
                                                    x2="43.455" y1="11.14" y2="39.238" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#00e67a"></stop>
                                                    <stop offset=".996" stop-color="#00c177"></stop>
                                                    <stop offset="1" stop-color="#00c177"></stop>
                                                </linearGradient>
                                                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQc_OlCQeBlsSdb9_gr2)"
                                                    d="M52.91,30H44c-1.11,0-2-0.89-2-2.01v-0.05c0-1.07,0.87-1.94,1.94-1.94h0.56 c0.83,0,1.5-0.67,1.5-1.5S45.33,23,44.5,23h-8c-0.69,0-1.32-0.28-1.77-0.73C34.28,21.82,34,21.19,34,20.5c0-1.38,1.12-2.5,2.5-2.5 h1c0.83,0,1.5-0.67,1.5-1.5S38.33,15,37.5,15h-1c-0.69,0-1.32-0.28-1.77-0.73C34.28,13.82,34,13.19,34,12.5 c0-0.5,0.15-0.97,0.4-1.36c4.94,0.57,9.58,2.9,12.99,6.57C50.58,21.15,52.48,25.42,52.91,30z">
                                                </path>
                                                <linearGradient id="AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr3" x1="8.646"
                                                    x2="41.95" y1="42.071" y2="54.192"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#00c267"></stop>
                                                    <stop offset=".996" stop-color="#009d61"></stop>
                                                    <stop offset="1" stop-color="#009d61"></stop>
                                                </linearGradient>
                                                <path fill="url(#AhngXQ8Zf2VLA52L6fLwQd_OlCQeBlsSdb9_gr3)"
                                                    d="M29.998,50.402c0.038,1.011-0.521,1.894-1.358,2.328c-1.46-0.23-2.88-0.63-4.27-1.17 l-0.61-0.24c-0.4-0.15-0.83-0.17-1.24-0.07l-10.251,2.703c-0.741,0.195-1.417-0.481-1.222-1.222L13.56,43.2 c0.12-0.46,0.07-0.95-0.14-1.38l-0.32-0.66c-0.94-1.94-1.57-4.02-1.88-6.16h7.28c0.83,0,1.5,0.67,1.5,1.5S19.33,38,18.5,38 S17,38.67,17,39.5s0.67,1.5,1.5,1.5H23c1.206,0,2.163,1.062,1.972,2.316C24.821,44.308,23.893,45,22.89,45l-1.39,0 c-0.83,0-1.5,0.67-1.5,1.5c0,0.83,0.67,1.5,1.5,1.5h5.857C28.725,48,29.946,49.035,29.998,50.402z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="mailto:ngojacky96@gmail.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                                viewBox="0 0 48 48" style=" fill:#000000;">
                                                <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z">
                                                </path>
                                                <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z">
                                                </path>
                                                <polygon fill="#e53935" points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17">
                                                </polygon>
                                                <path fill="#c62828"
                                                    d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                                                </path>
                                                <path fill="#fbc02d"
                                                    d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Plus d'info</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Niveau d'étude</strong>

                                <p class="text-muted">
                                    {{ $etudiant->niveau_etude }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ville provenance</strong>

                                <p class="text-muted">{{ $etudiant->ville_provenance }}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Diplome </strong>

                                <p class="text-muted">{{ $etudiant->formation_scolaire }}
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Formation professionnelle</strong>

                                <p class="text-muted">{{ $etudiant->formation_professionnelle }}</p>
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
                                    <li class="nav-item"><a class="nav-link" href="#timeline"
                                            data-toggle="tab">Cursus</a>
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
                                                    src="{{ asset('Style/dist/img/user1-128x128.jpg') }}"
                                                    alt="user image">
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
                                                    src="{{ asset('Style/dist/img/user7-128x128.jpg') }}"
                                                    alt="User Image">
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
                                                    src="{{ asset('Style/dist/img/user6-128x128.jpg') }}"
                                                    alt="User Image">
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
                                                    <img class="img-fluid" src="{{ asset('Style/dist/img/photo1.png') }}"
                                                        alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3"
                                                                src="{{ asset('Style/dist/img/photo2.png') }}"
                                                                alt="Photo">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Style/dist/img/photo3.jpg') }}"
                                                                alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3"
                                                                src="{{ asset('Style/dist/img/photo4.jpg') }}"
                                                                alt="Photo">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Style/dist/img/photo1.png') }}"
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
                                        <form method="POST" action="{{ url('/admin/etudiant/' . $etudiant->id) }}" accept-charset="UTF-8"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 required form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                                    <label for="photo" class="control-label">{{ 'Photo etudiant' }}
                                                        <span class="text-red">*</span></label>
                                                    <input class="form-control"
                                                        accept="image/png,image/gif,image/jpg,image/jpeg" name="photo"
                                                        type="file" id="photo"
                                                        placeholder="Entrer le photo de la etudiant"
                                                        value="{{ isset($etudiant->photo) ? $etudiant->photo : '' }}"
                                                        required>
                                                    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-2 required form-group {{ $errors->has('age') ? 'has-error' : '' }}">
                                                    <label for="age" class="control-label">{{ 'Age etudiant' }}
                                                        <span class="text-red">*</span></label>
                                                    <input class="form-control" min="10" max="35"
                                                        name="age" type="number" id="age"
                                                        placeholder="Entrer le age de la etudiant"
                                                        value="{{ isset($etudiant->age) ? $etudiant->age : '' }}"
                                                        required>
                                                    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                                    <label for="telephone"
                                                        class="control-label">{{ 'Telephone etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="telephone" type="text"
                                                        id="telephone" placeholder="Entrer le telephone de la etudiant"
                                                        value="{{ isset($etudiant->telephone) ? $etudiant->telephone : '' }}"
                                                        required>
                                                    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                                                    <label for="nom" class="control-label">{{ 'Nom etudiant' }}
                                                        <span class="text-red">*</span></label>
                                                    <input class="form-control" name="nom" type="text"
                                                        id="nom" placeholder="Entrer le nom de la etudiant"
                                                        value="{{ isset($etudiant->nom) ? $etudiant->nom : '' }}"
                                                        required>
                                                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
                                                    <label for="prenom" class="control-label">{{ 'Prenom etudiant' }}
                                                        <span class="text-red">*</span></label>
                                                    <input class="form-control" name="prenom" type="text"
                                                        id="prenom" placeholder="Entrer le prenom de la etudiant"
                                                        value="{{ isset($etudiant->prenom) ? $etudiant->prenom : '' }}"
                                                        required>
                                                    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-3 required form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
                                                    <label for="ville" class="control-label">{{ 'Résidence' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="ville" type="text"
                                                        id="ville" placeholder="Entrer le quartier de la residence"
                                                        value="{{ isset($etudiant->ville) ? $etudiant->ville : '' }}"
                                                        required>
                                                    {!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-3 requiredform-group {{ $errors->has('niveau') ? 'has-error' : '' }}">
                                                    <label for="niveau" class="control-label">{{ 'Niveau' }} <span
                                                            class="text-red">*</span></label>
                                                    <select required name="niveau" class="form-control">
                                                        <option selected disabled>Veuillez selectionner un niveau</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'A1' ? 'selected' : '' }}
                                                            value="A1">
                                                            A1</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'A2' ? 'selected' : '' }}
                                                            value="A2">
                                                            A2</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'B1' ? 'selected' : '' }}
                                                            value="B1">
                                                            B1</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'B2' ? 'selected' : '' }}
                                                            value="B2">
                                                            B2</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'C1' ? 'selected' : '' }}
                                                            value="C1">
                                                            C1</option>
                                                    </select>
                                                    {!! $errors->first('niveau', '<p class="help-block">:message</p>') !!}
                                                </div>

                                                <div
                                                    class="col-md-3 requiredform-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                                                    <label for="sexe" class="control-label">{{ 'Sexe' }} <span
                                                            class="text-red">*</span></label>
                                                    <select required name="sexe" class="form-control">
                                                        <option selected disabled>Veuillez selectionner un sexe</option>
                                                        <option
                                                            {{ isset($etudiant->sexe) && $etudiant->sexe == 'Masculin' ? 'selected' : '' }}
                                                            value="Masculin">
                                                            Masculin</option>
                                                        <option
                                                            {{ isset($etudiant->sexe) && $etudiant->sexe == 'Feminin' ? 'selected' : '' }}
                                                            value="Feminin">
                                                            Feminin</option>
                                                    </select>
                                                    {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-3 requiredform-group {{ $errors->has('statut') ? 'has-error' : '' }}">
                                                    <label for="statut" class="control-label">{{ 'Statut' }} <span
                                                            class="text-red">*</span></label>
                                                    <select required name="statut" class="form-control">
                                                        <option selected disabled>Veuillez selectionner un statut</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'en_regle' ? 'selected' : '' }}
                                                            value="en_regle">
                                                            En règle</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'en_cours' ? 'selected' : '' }}
                                                            value="en_cours">
                                                            En cours</option>
                                                        <option
                                                            {{ isset($etudiant->niveau) && $etudiant->niveau == 'non_en_regle' ? 'selected' : '' }}
                                                            value="non_en_regle">
                                                            Non en règle</option>
                                                    </select>
                                                    {!! $errors->first('statut', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('classe_id') ? 'has-error' : '' }}">
                                                    <label for="classe_id" class="control-label">{{ 'Classe etudiant' }}
                                                        <span class="text-red">*</span></label>
                                                    <select name="classe_id" id="classe_id js-example-basic-single"
                                                        class="custom-select2 form-control">

                                                        <option selected disabled>Veuillez selectionner une salle de classe
                                                        </option>
                                                        {{-- @foreach ($classe as $item)
                                                            <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->classe_id) selected @endif>
                                                                {{ $item->nom }} </option>
                                                        @endforeach --}}
                                                    </select>
                                                    {!! $errors->first('classe_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('formation_id') ? 'has-error' : '' }}">
                                                    <label for="formation_id"
                                                        class="control-label">{{ 'Formation etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <select name="formation_id" id="formation_id js-example-basic-single"
                                                        class="custom-select2 form-control">

                                                        <option selected disabled>Veuillez selectionner la formation de
                                                            l'étudiant</option>
                                                        {{-- @foreach ($formation as $item)
                                                            <option value="{{ $item->id }}" @if (isset($etudiant) && $item->id == $etudiant->formation_id) selected @endif>
                                                                {{ $item->nom }} </option>
                                                        @endforeach --}}
                                                    </select>
                                                    {!! $errors->first('formation_id', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('nom_parent') ? 'has-error' : '' }}">
                                                    <label for="nom_parent" class="control-label">{{ 'Nom parent' }}
                                                        <span class="text-red">*</span></label>
                                                    <input class="form-control" name="nom_parent" type="text"
                                                        id="nom_parent" placeholder="Entrer le nom_parent de la etudiant"
                                                        value="{{ isset($etudiant->nom_parent) ? $etudiant->nom_parent : '' }}"
                                                        required>
                                                    {!! $errors->first('nom_parent', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('contact_parent') ? 'has-error' : '' }}">
                                                    <label for="contact_parent"
                                                        class="control-label">{{ 'Contact parent' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="contact_parent" type="text"
                                                        id="contact_parent"
                                                        placeholder="Entrer le contact_parent de la etudiant"
                                                        value="{{ isset($etudiant->contact_parent) ? $etudiant->contact_parent : '' }}"
                                                        required>
                                                    {!! $errors->first('contact_parent', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('ville_provenance') ? 'has-error' : '' }}">
                                                    <label for="ville_provenance"
                                                        class="control-label">{{ 'Ville de provenance etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="ville_provenance" type="text"
                                                        id="ville_provenance"
                                                        placeholder="Entrer le ville_provenance de la etudiant"
                                                        value="{{ isset($etudiant->ville_provenance) ? $etudiant->ville_provenance : '' }}"
                                                        required>
                                                    {!! $errors->first('ville_provenance', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('niveau_etude') ? 'has-error' : '' }}">
                                                    <label for="niveau_etude"
                                                        class="control-label">{{ 'Niveau d\'etude etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="niveau_etude" type="text"
                                                        id="niveau_etude"
                                                        placeholder="Entrer le niveau_etude de la etudiant"
                                                        value="{{ isset($etudiant->niveau_etude) ? $etudiant->niveau_etude : '' }}"
                                                        required>
                                                    {!! $errors->first('niveau_etude', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('formation_scolaire') ? 'has-error' : '' }}">
                                                    <label for="formation_scolaire"
                                                        class="control-label">{{ 'Diplome etudiant' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="formation_scolaire" type="text"
                                                        id="formation_scolaire"
                                                        placeholder="Entrer le formation_scolaire de la etudiant"
                                                        value="{{ isset($etudiant->formation_scolaire) ? $etudiant->formation_scolaire : '' }}"
                                                        required>
                                                    {!! $errors->first('formation_scolaire', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-6 required form-group {{ $errors->has('formation_professionnelle') ? 'has-error' : '' }}">
                                                    <label for="formation_professionnelle"
                                                        class="control-label">{{ 'Formation professionnelle' }} <span
                                                            class="text-red">*</span></label>
                                                    <input class="form-control" name="formation_professionnelle"
                                                        type="text" id="formation_professionnelle"
                                                        placeholder="Entrer le formation_professionnelle de la etudiant"
                                                        value="{{ isset($etudiant->formation_professionnelle) ? $etudiant->formation_professionnelle : '' }}"
                                                        required>
                                                    {!! $errors->first('formation_professionnelle', '<p class="help-block">:message</p>') !!}
                                                </div>
                                                <div
                                                    class="col-md-12 form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                    <label for="description" class="control-label">{{ 'Description' }}
                                                    </label>
                                                    <textarea class="form-control" rows="3" placeholder="Doonez plus d'informations sur l'étudiant"
                                                        name="description" type="textarea" id="description">{{ isset($etudiant->description) ? $etudiant->description : '' }}</textarea>
                                                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            <div class="form-group  row">
                                                <div class="offset-sm-2 col-sm-12">
                                                    <button type="submit" class="btn btn-warning">Mettre à jour</button>
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
