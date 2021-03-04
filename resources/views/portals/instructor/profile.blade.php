@extends('layouts.instructor.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                    
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Thumbnail
                            </th>
                            <th>
                                Type
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Amount
                            </th>
                            <th>
                                Desc1
                            </th>
                            <th>
                                Desc2
                            </th>
                            <th>
                                Desc3
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td>
                                        <img src="" alt="image" width="90px" height="50px">
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                    </td>
                                    <td>Delete</td>
                                </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
