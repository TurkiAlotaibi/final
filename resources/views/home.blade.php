@extends('layouts.app')


@section('content')
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">Training Group Three Website</div>
=======
                <div class="card-header">Training Group three Website </div>
>>>>>>> c07c877ec48c67d9a3d6ed641ce7a89948091c2e

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcon In Your Training Group</h1>
                  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
