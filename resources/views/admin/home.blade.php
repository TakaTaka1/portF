@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AdminDashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            </br>
            </br>
            <form method="post" action="{{ route('admin.analyze') }}">
                <div class="form-group">
                    <label for="usr">URL</label>
                    <input type="text" class="form-control" id="usr">
                </div>
            </form>                       
        </div>        
    </div>
</div>
@endsection
