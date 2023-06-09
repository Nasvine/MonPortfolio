@extends('admin.layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Experiences</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Experience</a></li>
                        <li class="active">Acceuil</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h3 class="box-title">Listes des Experiences</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <button class=" btn btn-info pull-right btn-rounded" type="button" data-toggle="modal" data-target="#exampleModal">Ajouter une experience</button>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Poste</th>
                                        <th class="text-center">Entreprise</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Statut</th>
                                        <th class="text-center">Date de début</th>
                                        <th class="text-center">Date de fin</th>
                                        <th class="text-center" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiences as $k => $experience)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                            <td class="text-center">{{ $experience->poste }}</td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $experience->entreprise }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $experience->description }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $experience->statut }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $experience->date_debut }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $experience->date_fin }}</span> </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a data-toggle="modal" data-target="#exampleModal_{{ $experience->id }}"> <i class="fa fa-pencil"></i> </a>
                                                    <form method="POST" action="{{ route('experience.admin.destroy', $experience->id ) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </button>
                                                    </form>    
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="exampleModal_{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier une experience</h4> </div>
                            
                                                        <form action="{{ route('experience.admin.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Poste</label>
                                                                    <input type="text" name="poste" class="form-control" id="exampleInputEmail1" value="{{ $experience->poste }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Entreprise</label>
                                                                    <input type="text" name="entreprise" class="form-control" id="exampleInputEmail1" value="{{ $experience->entreprise }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Status</label>
                                                                    <select class="form-control" name="statut">
                                                                        <option>--Selectionner le statut dans l'entreprise--</option>
                                                                        <option value="Employé">Employé</option>
                                                                        <option value="Stage Professionnel">Stage Professionnel</option>
                                                                        <option value="CDD">CDD</option>
                                                                        <option value="CDI">CDI</option>
                                                                        <option value="Stage Académique">Stage Académique</option>
                                                                    </select>  
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Tâches effectuées</label>
                                                                    <textarea type="text" name="description" class="form-control" value="{{ $experience->description }}" rows="5"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de début</label>
                                                                    <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" value="{{ $experience->date_debut }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de fin</label>
                                                                    <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" value="{{ $experience->date_fin }}"> 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary waves-effect text-rigth">Valider</button>
                                                            </div>
                                                        </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter une experience</h4> </div>

                            <form action="{{ route('experience.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Poste</label>
                                        <input type="text" name="poste" class="form-control" id="exampleInputEmail1" placeholder="Entrer le poste occupé"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Entreprise</label>
                                        <input type="text" name="entreprise" class="form-control" id="exampleInputEmail1" placeholder="Entrer le nom de l'entreprise"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="form-control" name="statut">
                                            <option>--Selectionner le statut dans l'entreprise--</option>
                                            <option value="Employé">Employé</option>
                                            <option value="Stage Professionnel">Stage Professionnel</option>
                                            <option value="CDD">CDD</option>
                                            <option value="CDI">CDI</option>
                                            <option value="Stage Académique">Stage Académique</option>
                                        </select>  
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tâches effectuées</label>
                                        <textarea type="text" name="description" class="form-control" placeholder="Entrer les taches effectuées" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date de début</label>
                                        <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" placeholder="Entrer la date de début"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date de fin</label>
                                        <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" placeholder="Entrer la date de fin"> 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect text-rigth">Valider</button>
                                </div>
                            </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
@endsection