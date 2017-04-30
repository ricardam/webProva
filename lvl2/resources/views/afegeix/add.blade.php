@extends('master')
@section('title')
Afageix una casa
@stop
@section('header')
	  <h2>Afegeix una casa</h2>
    

@stop
@section('content')
	

<div class="container">
	<div class="row">
       
        <!-- panel preview -->
        <div class="col-sm-6">
          
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                      
                        <label for="nom" class="col-sm-3 control-label">Nom:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>
                            
                            <div class="form-group">
                                <label for="descripco" class="col-sm-3 control-label">Descripció:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="descripcio" name="descripcio">
                                </div>
                            </div> 

                            <hr>

                            <div class="form-group">
                                <label for="preuBasic" class="col-sm-3 control-label">Preu bàsic:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="preuBasic" name="preuBasic">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="preuMitja" class="col-sm-3 control-label">Preu pansio mitjà:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="preuMitja" name="preuMitja">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="preuComplet" class="col-sm-3 control-label">Preu pansio completa:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="preuComplet" name="preuComplet">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="banys" class="col-sm-3 control-label">Banys:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="banys" name="banys">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="capacitat" class="col-sm-3 control-label">Capacitat:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="capacitat" name="capacitat">
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="habitacions" class="col-sm-3 control-label">Habitacions:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="habitacions" name="habitacions">
                                </div>
                            </div> 

                            <label for="contain">Instal·lacions:</label>

                            <label class="checkbox-inline"><input type="checkbox" value="">Billar</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Camp de futbol</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Camp de tenis</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Internet</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Piscina</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Projector</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Sala comuna</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Tenis taula</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Altres</label>

                              <hr>

                            <div class="form-group">
                                <label for="provincia" class="col-sm-3 control-label">Provincia:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="provincia" name="provincia">
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="comarca" class="col-sm-3 control-label">Comarca:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="comarca" name="comarca">
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="codiPostal" class="col-sm-3 control-label">Codi Postal:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="codiPostal" name="codiPostal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="poblacio" class="col-sm-3 control-label">Població:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="poblacio" name="poblacio">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="carrer" class="col-sm-3 control-label">Carrer:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="carrer" name="carrer">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <button type="button" class="btn btn-default preview-add-button">
                                        <span class="glyphicon glyphicon-plus"></span> Afegir
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>               
        </div>
	</div>
</div>
@stop
@section('footer')

@stop