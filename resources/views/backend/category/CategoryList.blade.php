@extends('backend.Layout')

@push('backend_css')
    <!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

@endpush
@section('backend_contents')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
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
				<h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">

                            <div class="d-flex justify-content-between my-3">
                                
                                <div class="show-data">
                                    <label for="rowCount">Show:</label>
                                    <select id="rowCount" onchange="updateRowCount()">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
    
                                <input type="text" id="myInput" onkeyup="filterTable()" placeholder="Search for names, positions, offices..." title="Type in a name, position, or office">

                            </div>

							<table id="myTable" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Category Name</th>
										<th>Image</th>
										<th>Create</th>
										<th>Update</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @forelse ($categorys as $key => $category)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $category->category_name }}</td> <!-- Display category name -->
                                        <td>image</td> <!-- Display category slug -->
                                        <td>{{ $category->created_at->format('d M Y') }}</td>
                                        <td>{{ $category->updated_at->format('d M Y') }}</td>
                                        <td>
                                            <div class="form-check form-switch text-center">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" 
                                                       {{ $category->status === 1 ? 'checked' : '' }} 
                                                       data-id="{{ $category->id }}">
                                                <span class="active_status">{{ $category->status === 1 ? 'active' : 'pending' }}</span>
                                            </div>
                                        </td>
                                        <td style="text-align: center">
                                            <a href="#" class="edit-category" data-id="{{ $category->id }}" data-name="{{ $category->category_name }}" style="margin-right: 30%">
                                                <span><i class="lni lni-pencil-alt"></i></span>
                                            </a>
                                            <a href="#" class="delete-category" data-id="{{ $category->id }}">
                                                <span><i class="lni lni-trash"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" align="center" style="color: red">No Data Available !</td>
                                    </tr>
                                @endforelse
									
									<!-- Add more rows as needed -->
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>

            {{-- MODAL  --}}
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editModalLabel">Category Update</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="edit_category_form">
                                @csrf
                                <input type="hidden" id="category_id" name="category_id">
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                                </div>
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary" id="saveChanges">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- MODAL END --}}
		</div>
		<!--end page wrapper -->






@endsection



@push('backend_js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>



    
$(document).ready(function() {
    $('.form-check-input').change(function() {
        var status = $(this).is(':checked') ? 1 : 0;
        var categoryId = $(this).data('id');

        $.ajax({
            url: `{{ route('category.category.status.update') }}`,
            type: 'POST',
            data: {
                id: categoryId,
                status: status,
                _token: '{{ csrf_token() }}' // Include CSRF token
            },
            success: function(response) {
                if (response.success) {
                    // Update the text based on the new status for the specific category
                    $(this).closest('tr').find('.active_status').text(status === 1 ? 'active' : 'pending');
                }
            }.bind(this), // Bind 'this' to maintain the context
            error: function(xhr) {
                console.log(xhr.responseText); // Handle error
            }
        });
    });
});



    function filterTable() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        tr[i].style.display = "none"; // Initially hide each row
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) { // Loop through each cell in the row
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText; // Get the text content of the cell
                if (txtValue.toUpperCase().indexOf(filter) > -1) { // Check if the cell contains the search term
                    tr[i].style.display = ""; // Show the row if a match is found
                    break; // Stop checking other cells in this row
                }
            }
        }
    }
}

function updateRowCount() {
    var select, table, tr, i, rowCount;
    select = document.getElementById("rowCount");
    rowCount = parseInt(select.value); // Get the selected number of rows
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Hide all rows initially
    for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        tr[i].style.display = "none";
    }

    // Show the selected number of rows
    for (i = 1; i <= rowCount && i < tr.length; i++) {
        tr[i].style.display = ""; // Show the row
    }
}

// Call updateRowCount on page load to set initial row count
document.addEventListener("DOMContentLoaded", function() {
    updateRowCount();
});











$(document).ready(function() {
    // Open modal and populate data
    $('.edit-category').click(function(e) {
        e.preventDefault();
        var categoryId = $(this).data('id');
        var categoryName = $(this).data('name'); // Change this line

        $('#category_id').val(categoryId);
        $('#category_name').val(categoryName); // Change this line
        $('#editModal').modal('show'); // Show the modal
    });

    // Save changes via AJAX
    $('#saveChanges').click(function() {
        var categoryId = $('#category_id').val();
        var categoryName = $('#category_name').val(); // Change this line

        $.ajax({
            url: `{{ route('category.category.update') }}`, // Update this route to your actual update route
            type: 'POST',
            data: {
                id: categoryId,
                category_name: categoryName, // Change this line
                _token: '{{ csrf_token() }}' // Include CSRF token
            },
            success: function(response) {
                if (response.success) {
                    // Update the UI with the new category name
                    $('a.edit-category[data-id="' + categoryId + '"]').data('name', categoryName); // Update the data attribute
                    $('a.edit-category[data-id="' + categoryId + '"]').closest('tr').find('td:nth-child(2)').text(categoryName); // Update the name in the table
                    $('#editModal').modal('hide'); // Hide the modal
                }
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Handle error
            }
        });
    });
});








$(document).ready(function() {
    // Delete category
    $('.delete-category').click(function(e) {
        e.preventDefault();
        var categoryId = $(this).data('id');

        // SweetAlert confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `{{ route('category.delete') }}`, // Update this route to your actual delete route
                    type: 'POST',
                    data: {
                        id: categoryId,
                        _token: '{{ csrf_token() }}' // Include CSRF token
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the row from the table
                            $('a.delete-category[data-id="' + categoryId + '"]').closest('tr').remove();
                            Swal.fire(
                                'Deleted!',
                                'Your category has been deleted.',
                                'success'
                            );
                        } else {
                            Swal.fire(
                                'Error!',
                                'Failed to delete the category. Please try again.',
                                'error'
                            );
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText); // Handle error
                        Swal.fire(
                            'Error!',
                            'An error occurred. Please try again.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});
</script>


@endpush


@push('backend_js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
@endpush