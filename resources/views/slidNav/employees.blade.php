@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="row m-4">
            <div class="col-md-12">
                <h6><strong>All employees</strong></h6>
{{--                <div class="card">--}}
                    <table class="table table-striped table-light text-sm-center table-condensed">
                        <thead>
                        <tr>
                            <th class="btn-dark" scope="col">Name</th>
                            <th class="btn-dark" scope="col">Job role</th>
                            <th class="btn-dark" scope="col"> nickName</th>
                            <th class="btn-dark" scope="col">Email</th>
                            <th class="btn-dark" scope="col">Any Tasks?</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $employee)
                            <tr>
                                <td>{{$employee->user->name}}</td>
                                <td>{{$employee->role}}</td>
                                <td>{{$employee->name}}</td>
                                <th scope="row">{{$employee->user->email}}</th>
{{--                                <th><a class="btn btn-dark button" href="{{route('emp_order' , ['employee' => $employee]) }}">Show Tasks</a></th>--}}
                                <th><a class="btn btn-dark button" href="#">Show Tasks</a></th>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--            </div>--}}
        </div>
    </div>
@endsection
