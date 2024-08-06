<x-backend_main>
    <x-slot:title>Dashboard | White Library</x-slot:title>
    <x-slot:path>
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </x-slot:path>
    <x-slot:header>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                <span class="h2 font-weight-bold mb-0">350,897</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-active-40"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                <span class="h2 font-weight-bold mb-0">2,356</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-chart-pie-35"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                <span class="h2 font-weight-bold mb-0">924</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="ni ni-money-coins"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                <span class="h2 font-weight-bold mb-0">49,65%</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                    <i class="ni ni-chart-bar-32"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:header>
    <div class="row justify-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h1>Welcome back, Admin!</h1>
                </div>
                <div class="card-body">
                    <h3 class="text-gray font-weight-500">Books List</h3>
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Project</th>
                                        <th scope="col" class="sort" data-sort="budget">Budget</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        <th scope="col">Users</th>
                                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/bootstrap.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Argon Design System</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            $2500 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-warning"></i>
                                                <span class="status">pending</span>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Romina Hadid">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Alexander Smith">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Jessica Doe">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="completion mr-2">60%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            $1800 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">completed</span>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Romina Hadid">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Alexander Smith">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Jessica Doe">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="completion mr-2">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            $1800 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">completed</span>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Romina Hadid">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Alexander Smith">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Jessica Doe">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="completion mr-2">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            $1800 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">completed</span>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Romina Hadid">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Alexander Smith">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Jessica Doe">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="completion mr-2">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            $1800 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-success"></i>
                                                <span class="status">completed</span>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Romina Hadid">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Alexander Smith">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                                <a href="#" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="Jessica Doe">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="completion mr-2">100%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>Pending Permissions</h1>
                </div>
                <div class="card-body">
                    <h3 class="text-gray font-weight-500">Recent Permissions</h3>
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Book</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend_main>
