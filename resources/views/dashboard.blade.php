@extends('layouts.dashboard.head')

@section('content')
    <!-- modal  -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button type="button" class="close" data-dismiss="modal"> &times; </button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of model  -->

    <!-- cards  -->
    <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row pt-5 mt-md-3 mb-5">
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Plan</h5>
                                        <h3>Free</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>Current</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Get help with Integration</h5>
                                        <h3>Support</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>support@brisebox.com</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-users fa-3x text-warning"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Users</h5>
                                        <h3>$15,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>Updated Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fas fa-chart-line fa-3x text-danger"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Visitors</h5>
                                        <h3>$45,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-sync mr-3"></i>
                                <span>Updated Now</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end of cards  -->

    <!-- tables  -->
    <section id="tables">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-muted text-center mb-3">Allow User-To-User Discussions on your Website.</h3>
                        <ul class="list-group">
                            <li class="list-group-item ">Get Started By: <li>
                            <li class="list-group-item">(1). Trying the Brisebox Button to see how it will look for your users </li>
                            <li class="list-group-item">(2). Copying a code into your HTML page</li>
                            <li class="list-group-item">(3). Entering your website info</li>
                            <li class="list-group-item">(4). Done. Enjoy more users on your platform.</li>
                        </ul>
                        <a href="docs" class="btn btn-danger btn-lg">Try Now</a>

                        <!-- pagination  -->
                        <!-- <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3"><span>&laquo;</span></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3"><span>&raquo;</span></a>
                                </li>
                            </ul>
                        </nav> -->
                        <!-- end of pagination  -->
                    </div>
                    <div class="col-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end of tables  -->
@endsection