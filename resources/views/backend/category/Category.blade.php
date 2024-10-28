@extends('backend.Layout')
@section('backend_contents')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Forms</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-4">
            
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Vertical Form</h5>
                    <form id="create_category" class="row g-3" action="{{ route('category.create') }}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <label for="input1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="input1" placeholder="First Name">
                        </div>
                        
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!--end row-->







</div>
@endsection

@push('backend_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
@endpush

@push('backend_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script>
        $(function(){

            $("#create_category").on('submit',()=>{
                $.toast({
                    heading: 'Positioning',
                    text: 'Use the predefined ones, or specify a custom position object.',
                    position: 'top-center',
                    stack: false
                })
            })
            
        });
    </script>
@endpush