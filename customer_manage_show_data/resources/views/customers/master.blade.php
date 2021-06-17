@extends('customers.list')
@section('title','Customer List')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Customer List</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">Customer Name</td>
                        <td scope="col">Birth of Date</td>
                        <td scope="col">Email</td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer['name']}}</td>
                            <td>{{$customer['bod']}}</td>
                            <td>{{$customer['email']}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>Do not have a data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
