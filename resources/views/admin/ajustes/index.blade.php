@extends('tablar::page')

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Administración
                </div>
                <h2 class="page-title">
                    Ajustes
                </h2>
            </div>
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <button class="btn btn-primary d-none d-sm-inline-block">
                            <i class="ti ti-device-floppy"></i>
                            Guardar
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
       @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="d-flex">
                    <div class="">
                        <i class="ti ti-check"></i>    
                    </div>    
                    <div>
                        {{session('success')}}
                    </div>
                </div>    
            </div>
        <!-- Page Content goes here -->
            
    </div>
    <a  class="btn close " data-bs-dismiss="alert" aria-label="close"></a>
</div>
@endif
<form action="" id="form-ajustes" method="post"  enctype='multipart/form-data '>
@csrf
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">Configuración de la clinica </h3>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-12">
             <small class="text-muted"><span class="text-danger">*</span> Campos requeridos</small>    
            </div>
            <div class="col-md-6">
                <label for="Nombre" class="form-label"> Nombre  <span class="text-danger">*</span></label>    
                <div class="input-group">
                    <span class="input-text">
                        i.ti.ti-building
                    </span>
                    <input type="text" class="form-control"  @error('nombre') name="nombre">
                </div>
            </div> 
        </div>
    </div>
</div>
</form>
@endsection
