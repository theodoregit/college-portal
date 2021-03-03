@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Manage Accounts</div>
                    
                <div class="panel-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Instructor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Registrar Staff</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div style="background-color: #f5f8fa">         
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">ID Number</th> 
                                            <th scope="col">Password</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abebe Alemu Zerihun</td>
                                            <td>ATR/4025/08</td>
                                            <td>123456</td>
                                            <td><a href="" class="btn btn-primary">Edit</a></td>
                                            <td><a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>                                              
                                    </tbody>
                                </table>                        
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div style="background-color: #f5f8fa">         
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th> 
                                            <th scope="col">Password</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abebe Alemu Zerihun</td>
                                            <td>ATR/4025/08</td>
                                            <td>123456</td>
                                            <td><a href="" class="btn btn-primary">Edit</a></td>
                                            <td><a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>                                              
                                    </tbody>
                                </table>                        
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div style="background-color: #f5f8fa">         
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th> 
                                            <th scope="col">Password</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Abebe Alemu Zerihun</td>
                                            <td>ATR/4025/08</td>
                                            <td>123456</td>
                                            <td><a href="" class="btn btn-primary">Edit</a></td>
                                            <td><a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>                                              
                                    </tbody>
                                </table>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
