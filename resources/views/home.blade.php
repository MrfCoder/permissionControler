@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ok welcome
                </div>
            </div>
            
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Sidebar</div>
                <ul class="nav" role="tablist">
                <div class="card-body">
                    @hasrole('super-admin')
                    
                        <li role="presentation">
                            <a href="{{ url('/home') }}">
                                Dashboard 
                            </a>
        
                        </li>
                        <li role="presentation">
        
                            <a href="{{ url('/admin/role') }}">
                                Role 
                            </a>
                        </li>
                        <li role="presentation">
        
                            <a href="{{ url('/admin/permission') }}">
                                Permission 
                            </a>
                        </li>
                        
                        <li role="presentation">
                            <a href="{{ url('/admin/user') }}">
                                Users 
                            </a>
                        </li>
                    
                    @else
                    <li role="presentation">
                        <a href="{{ url('/home') }}">
                            Home
                        </a>
                    </li>
                    @endhasrole
                </ul>
                    

                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection
