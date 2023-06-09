@extends('admin.layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Skills</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Skill</a></li>
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
                                <h3 class="box-title">Listes des compétences</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <button class=" btn btn-info pull-right btn-rounded" type="button" data-toggle="modal" data-target="#exampleModal">Ajouter une compétence</button>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Noms</th>
                                        <th class="text-center">Progressions</th>
                                        <th class="text-center">Progressions Colors</th>
                                        <th class="text-center" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($skills as $k => $skill)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                            <td class="text-center">{{ $skill->name }}</td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $skill->progression }}%</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $skill->progression_color}}</span> </td>
                                            <td class="text-center" class="text-nowrap">
                                                
                                                <a href="#" type="button" data-toggle="modal" data-target="#exampleModal_{{ $skill->id }}" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                    method="POST" action="{{ route('skill.admin.destroy', $skill->id ) }}"
                                                    onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cette compétence ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </button>

                                                </form>    
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="#exampleModal_{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier une compétence</h4> </div>
                            
                                                        <form action="{{ route('skill.admin.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom</label>
                                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $skill->name }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Progression</label>
                                                                    <input type="number" name="progression" class="form-control" id="exampleInputEmail1" value="{{ $skill->progression }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Progression Color</label>
                                                                    <select class="form-control" name="progression_color">
                                                                        <option>--Selectionner la couleur de la progression--</option>
                                                                        <option value="bg-primary">bg-primary</option>
                                                                        <option value="bg-success">bg-success</option>
                                                                        <option value="bg-danger">bg-danger</option>
                                                                        <option value="bg-info">bg-info</option>
                                                                        <option value="bg-warning">bg-warning</option>
                                                                    </select>                 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary waves-effect text-rigth" data-dismiss="modal">Valider</button>
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

                            <form action="{{ route('skill.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Entrer le nom de la compétence"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Progression</label>
                                        <input type="number" name="progression" class="form-control" id="exampleInputEmail1" placeholder="Entrer le pourcentage de progression"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Progression Color</label>
                                        <select class="form-control" name="progression_color">
                                            <option>--Selectionner la couleur de la progression--</option>
                                            <option value="bg-primary">bg-primary</option>
                                            <option value="bg-success">bg-success</option>
                                            <option value="bg-danger">bg-danger</option>
                                            <option value="bg-info">bg-info</option>
                                            <option value="bg-warning">bg-warning</option>
                                        </select>
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