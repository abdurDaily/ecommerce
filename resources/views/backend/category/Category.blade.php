@extends('backend.Layout')
@section('backend_contents')
    @push('backend_css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

        <style>
            .select2-container {
                width: 100% !important;
            }

            .select2-container--default .select2-selection--single {
                background-color: #ffffff;
                border: 1px solid #aaa;
                border-radius: 4px;
                height: 40px;
                display: flex;
                align-items: center;
            }

            .select2-container--default .select2-selection--single .select2-selection__placeholder {
                line-height: 45px;
            }
        </style>
    @endpush

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Forms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Category Create</h5>
                            <form id="create_category" class="row g-3" action="{{ route('category.store') }}"
                                enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="input1" class="form-label">Category Name</label>
                                    <input name="category_name" type="text" class="form-control mb-3" id="input1"
                                        placeholder="Category Name">
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <label for="category_select" class="form-label">Select Category </label>
                                    <select name="category_id" id="category_select" class="form-control select_category">
                                        <option value="" selected disabled>Select a category</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>
                                        @endforeach
                                    </select>



                                    <div class="category_img text-center mt-3">
                                        <label for="category_image"
                                            style="text-align: center; margin:20px 0; cursor:pointer;">
                                            <img id="preview_image"
                                                style="width: 35%; height:35%; display: none; border-radius:50%;"
                                                src="" alt="">
                                            <img id="add_image" style="width: 35%;" src="{{ asset('images/add.png') }}"
                                                alt="">
                                        </label>
                                    </div>






                                    <input name="category_image" accept=".png,.jpg,.webp,.jpeg,.svg,.gif" type="file"
                                        id="category_image" class="d-none">

                                </div>

                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid justify-content-center align-items-center gap-3">
                                        <button type="submit" class="w-100 btn btn-primary px-4">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
    </div>
@endsection

@push('backend_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
@endpush

@push('backend_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        //INITIAL CATEGORY NAME INSERT 
        $(document).ready(function() {
            // Function to handle form submission
            function handleFormSubmission(formId) {
                $(formId).on('submit', function(e) {
                    e.preventDefault(); // Prevent the default form submission

                    // Create a FormData object to hold the form data
                    var formData = new FormData(this);

                    // Use AJAX to submit the form
                    $.ajax({
                        url: $(this).attr('action'), // Get the action URL from the form
                        type: 'POST',
                        data: formData, // Send the FormData object
                        contentType: false, // Tell jQuery not to set contentType
                        processData: false, // Tell jQuery not to process the data
                        success: function(response) {
                            // Show success alert
                            $.toast({
                                heading: 'Success',
                                text: 'Data uploaded successfully!',
                                position: 'top-center',
                                stack: false,
                                icon: 'success'
                            });
                            // Optionally, reset the form
                            $(formId)[0].reset();
                            // Optionally, hide the preview image
                            $('#preview_image').hide();
                            $('#add_image').show(); // Show the add image again
                        },
                        error: function(xhr) {
                            // Handle errors if needed
                            let errorMessage = 'There was an error uploading the data.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON
                                    .message; // Get error message from response
                            }
                            $.toast({
                                heading: 'Error',
                                text: errorMessage,
                                position: 'top-center',
                                stack: false,
                                icon: 'error'
                            });
                        }
                    });
                });
            }

            // Handle form submissions for both forms
            handleFormSubmission('#create_category');
            handleFormSubmission('#create_subcategory');

            // Image preview functionality
            $('#category_image').change(function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Hide the add image and show the selected image
                        $('#add_image').hide();
                        $('#preview_image').attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            });
        });


        //CATEGORY IMAGE PREVIEW 
        $(document).ready(function() {
            // Function to handle image preview
            function handleImagePreview(inputSelector, previewSelector, addImageSelector) {
                $(inputSelector).change(function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            // Hide the add image and show the selected image
                            $(addImageSelector).hide();
                            $(previewSelector).attr('src', e.target.result).show();
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }

            // Call the function for both category and subcategory image inputs
            handleImagePreview('#category_image', '#preview_category_image', '#add_image_category');
            handleImagePreview('#subcategory_image', '#preview_subcategory_image', '#add_image_subcategory');
        });


        //SELECT OPTION FOR SELECTING PARENT CATEGORY 
        $(document).ready(function() {
            // Initialize Select2 on the select element
            $(".select_category").select2({
                placeholder: "Select a category", // Placeholder text
                allowClear: true // Allow clearing the selection
            });
        });
    </script>
@endpush
