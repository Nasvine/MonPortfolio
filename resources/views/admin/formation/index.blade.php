@extends('admin.layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Formations</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Formation</a></li>
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
                                <h3 class="box-title">Listes des formations</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <button class=" btn btn-info pull-right btn-rounded" type="button" data-toggle="modal" data-target="#exampleModal">Ajouter une formation</button>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Formations</th>
                                        <th class="text-center">Ecole</th>
                                        <th class="text-center">Date de début</th>
                                        <th class="text-center">Date de fin</th>
                                        <th class="text-center" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formations as $k => $formation)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                            <td class="text-center">{{ $formation->formation }}</td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $formation->ecole }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $formation->date_debut}}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $formation->date_fin}}</span> </td>
                                            <td class="text-center" class="text-nowrap">
                                                
                                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal_{{ $formation->id }}" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                    method="POST" action="{{ route('formation.admin.destroy', $formation->id ) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </button>

                                                </form>    
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="#exampleModal_{{ $formation->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier une compétence</h4> </div>
                            
                                                        <form action="{{ route('formation.admin.update', $formation->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Formation</label>
                                                                    <input type="text" name="formation" class="form-control" id="exampleInputEmail1" value="{{ $formation->formation }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Ecole</label>
                                                                    <input type="number" name="ecole" class="form-control" id="exampleInputEmail1" value="{{ $formation->ecole }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de début</label>
                                                                    <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" value="{{ $formation->date_debut }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de fin</label>
                                                                    <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" value="{{ $formation->date_fin }}"> 
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
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter une compétence</h4> </div>

                            <form action="{{ route('formation.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Formation</label>
                                        <input type="text" name="formation" class="form-control" id="exampleInputEmail1" placeholder="Entrer la formation"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ecole</label>
                                        <input type="number" name="ecole" class="form-control" id="exampleInputEmail1" placeholder="Entrer la nom de l'école"> 
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