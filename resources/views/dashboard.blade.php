

@extends('backend.Layout')
@section('backend_contents')
<div class="page-wrapper">
    <div class="page-content">
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Total Users</p>
                                <h5 class="mb-0">85K</h5>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Page Views</p>
                                <h5 class="mb-0">42,892</h5>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Session</p>
                                <h5 class="mb-0">45K</h5>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-0">Bounce Rate</p>
                                <h5 class="mb-0">51.4%</h5>
                            </div>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                      <div class="col-lg-7 col-xl-7 col-xxl-8">
                        <div class="chart-js-container4 p-4">
                           <div class="piechart-legend">
                              <h2 class="mb-1">68%</h2>
                              <h6 class="mb-0">Total Traffic</h6>
                           </div>
                          <canvas id="chart6"></canvas>
                        </div>
                      </div>
                      <div class="col-lg-5 col-xl-5 col-xxl-4">
                        <div class="">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                <i class='bx bxs-circle text-info'></i>Organic (12%)</span>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                <i class='bx bxs-circle text-danger'></i><span>Direct (22%)</span>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                <i class='bx bxs-circle text-success'></i><span>Referral (34%)</span>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                <i class='bx bxs-circle text-primary'></i><span>Others (18%)</span>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                <i class='bx bxs-circle text-warning'></i><span>Social (37%)</span>
                            </li>
                          </ul>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
               <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-3">
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-facebook text-white mb-3"><i class="bx bxl-facebook-square"></i>
                                            </div>
                                            <h4 class="my-1">84K</h4>
                                            <p class="mb-0 text-secondary">Facebook Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-twitter text-white mb-3"><i class="bx bxl-twitter"></i>
                                            </div>
                                            <h4 class="my-1">34M</h4>
                                            <p class="mb-0 text-secondary">Twitter Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-linkedin text-white mb-3"><i class="bx bxl-linkedin-square"></i>
                                            </div>
                                            <h4 class="my-1">56K</h4>
                                            <p class="mb-0 text-secondary">Linkedin Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-youtube text-white mb-3"><i class="bx bxl-youtube"></i>
                                            </div>
                                            <h4 class="my-1">38M</h4>
                                            <p class="mb-0 text-secondary">YouTube Subscribers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-behance text-white mb-3"><i class="bx bxl-dropbox"></i>
                                            </div>
                                            <h4 class="my-1">28K</h4>
                                            <p class="mb-0 text-secondary">Dropbox Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 mb-0 shadow-none border">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="widgets-icons rounded-circle mx-auto bg-dribbble text-white mb-3"><i class='bx bxl-dribbble'></i>
                                            </div>
                                            <h4 class="my-1">49K</h4>
                                            <p class="mb-0 text-secondary">Dribbble Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <h5 class="mb-0 mb-md-0">Audience Overview</h5>
                    </div>
                    <div class="col-md-9">
                        <form class="float-md-end">
                            <div class="row row-cols-md-auto g-lg-3 align-items-center">
                                <label for="inputFromDate" class="col-md-2 col-form-label text-md-end">From Date</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="inputFromDate">
                                </div>
                                <label for="inputToDate" class="col-md-2 col-form-label text-md-end">To Date</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="inputToDate">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="chart-js-container3">
                    <canvas id="chart5"></canvas>
                </div>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-1">
            <div class="col col-lg-8">
                <div class="card radius-10">
                    <div class="card-body">
                        <div id="geographic-map"></div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-header p-3">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Top Countries</h5>
                            </div>
                            <div class="ms-auto">
                                <h3 class="mb-0"><span class="font-14">Total Visits:</span> 15K</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-top-countries mb-3 p-3">
                        <ul class="list-group list-group-flush radius-10">
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-in"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">India</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">647</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-us"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">United States</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">435</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-vn"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Vietnam</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">287</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-au"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Australia</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">432</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-dz"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Angola</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">345</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-ax"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Aland Islands</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">134</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-ar"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Argentina</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">147</div>
                            </li>
                            <li class="list-group-item d-flex align-items-center radius-10 mb-2 border">
                                <div class="d-flex align-items-center">
                                    <div class="font-20"><i class="flag-icon flag-icon-be"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">Belgium</h6>
                                    </div>
                                </div>
                                <div class="ms-auto">210</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Browser Statistics</h5>
                            </div>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                         </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-js-container3">
                            <canvas id="chart7"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100 overflow-hidden">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Device Sessions</h5>
                            </div>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                  <i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                              </div>
                         </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-js-container2">
                            <canvas id="chart8"></canvas>
                          </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                          Desktop
                          <span class="badge bg-primary rounded-pill">558</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mobile
                          <span class="badge bg-success rounded-pill">204</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Tablet
                          <span class="badge bg-danger rounded-pill">108</span>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 font-weight-bold">Social Traffic</h5>
                            <p class="mb-0 ms-auto"><i class="bx bx-dots-horizontal-rounded float-right font-22"></i>
                            </p>
                        </div>
                        <div class="d-flex mt-2 mb-4">
                            <h2 class="mb-0 font-weight-bold">89,421</h2>
                            <p class="mb-0 ms-1 font-14 align-self-end text-secondary">Total Visits</p>
                        </div>
                        <div class="progress radius-10" style="height: 10px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <div><i class="bx bxs-checkbox me-2 font-22 text-primary"></i>
                                                </div>
                                                <div>Facebook</div>
                                            </div>
                                        </td>
                                        <td>46 Visits</td>
                                        <td class="px-0 text-right">33%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <div><i class="bx bxs-checkbox me-2 font-22 text-danger"></i>
                                                </div>
                                                <div>YouTube</div>
                                            </div>
                                        </td>
                                        <td>12 Visits</td>
                                        <td class="px-0 text-right">17%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <div><i class="bx bxs-checkbox me-2 font-22 text-info"></i>
                                                </div>
                                                <div>Linkedin</div>
                                            </div>
                                        </td>
                                        <td>29 Visits</td>
                                        <td class="px-0 text-right">21%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <div><i class="bx bxs-checkbox me-2 font-22 text-warning"></i>
                                                </div>
                                                <div>Twitter</div>
                                            </div>
                                        </td>
                                        <td>34 Visits</td>
                                        <td class="px-0 text-right">23%</td>
                                    </tr>
                                    <tr>
                                        <td class="px-0">
                                            <div class="d-flex align-items-center">
                                                <div><i class="bx bxs-checkbox me-2 font-22 text-success"></i>
                                                </div>
                                                <div>Dribbble</div>
                                            </div>
                                        </td>
                                        <td>28 Visits</td>
                                        <td class="px-0 text-right">19%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card radius-10">
            <div class="card-body">
                <div class="table-responsive lead-table">
                    <table class="table mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Potential Leads</th>
                                <th>Diposit</th>
                                <th>Progress</th>
                                <th>Last Update</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-1.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">Ronald Waters</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$89,620</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"></div>
                                    </div>
                                </td>
                                <td>14 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-primary w-100">In Progress</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-2.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">David Buckley</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$38,520</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 76%"></div>
                                    </div>
                                </td>
                                <td>15 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-danger w-100">Cancelled</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-3.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">James Caviness</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$63,820</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </td>
                                <td>16 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-4.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">John Roman</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$97,420</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 58%"></div>
                                    </div>
                                </td>
                                <td>18 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-primary w-100">In Progress</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-7.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">Johnny Seitz</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$48,360</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 66%"></div>
                                    </div>
                                </td>
                                <td>22 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-danger w-100">Cancelled</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="">
                                            <img src="backend_assets/images/avatars/avatar-8.png" class="rounded-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">Pauline Bird</h6>
                                            <p class="mb-0 font-13 text-secondary">Lead Designers</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$74,620</td>
                                <td class=" w-25">
                                    <div class="progress radius-10" style="height:4.5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </td>
                                <td>24 Oct 2020</td>
                                <td>
                                    <div class="badge rounded-pill bg-success w-100">Completed</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection