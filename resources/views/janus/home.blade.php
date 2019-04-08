@extends('layouts.janus')

@section('content')

<div class="col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3 z-indexconteudo p-0">
    @include('includes.menu')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h3 class="">Dashboard</h3>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Lista de usuarios
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-header">
                        Remover usuario
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">

                            <li class='list-group-item pt-0 mb-1 border-0'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-danger waves-effect waves-link'>X</button>
                                    <div type='button' class='btn btn-outline-dark disabled'>Lorem Ipsum</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary waves-effect waves-link">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <div class="card shadow" style="overflow:hidden;">
                    <table class="table m-0 table-striped">
                        <thead>
                            <tr>
                                <th class="border-0" scope="col">#</th>
                                <th class="border-0" scope="col">First</th>
                                <th class="border-0" scope="col">Last</th>
                                <th class="border-0" scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    @mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    @fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    @twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <div class="card shadow">
                    <table class="table m-0 ">
                        <thead>
                            <tr>
                                <th class="border-0" scope="col">#</th>
                                <th class="border-0" scope="col">First</th>
                                <th class="border-0" scope="col">Last</th>
                                <th class="border-0" scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    @mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    @fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    @twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link border-0 rounded mr-1 waves-effect waves-link" href="" tabindex="-1"><i class="material-icons" style="font-size:inherit; margin-top:2px;">chevron_left</i></a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link border-0 rounded mr-1 bg-pink" href="">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 mr-1 rounded waves-effect waves-link" href="">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 mr-1 rounded waves-effect waves-link" href="">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 rounded waves-effect waves-link" href=""><i class="material-icons" style="font-size:inherit; margin-top:2px;">chevron_right</i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
