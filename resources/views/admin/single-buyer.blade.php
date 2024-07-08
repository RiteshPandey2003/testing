@extends('layouts.app')  

@section('title', 'single buyer Details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Buyer Details
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $buyer->name }}</p>
                        <p><strong>Email:</strong> {{ $buyer->email }}</p>
                        <p><strong>Phone Number:</strong> {{ $buyer->phone_number }}</p>
                        <p><strong>Type:</strong> {{ $buyer->type }}</p>
                        <p><strong>RFQ Raised:</strong> {{ $buyer->rfq_raised }}</p>
                        <p><strong>Orders:</strong> {{ $buyer->orders }}</p>

                        <a href="#" class="btn btn-secondary">Back to All Buyers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
