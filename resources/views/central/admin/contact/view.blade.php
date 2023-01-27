@extends('central.admin.layout.app')
@section('page','View Contact')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description"> Create And Modify @yield('page') Here</p>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                           </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-border">
                            <tr>
                                <td width="25%">Name</td>
                                <td>: {{$data->name}}</td>
                            </tr>
                            <tr>
                                <td width="25%">Email</td>
                                <td>: {{$data->email}}</td>
                            </tr>
                            <tr>
                                <td width="25%">subject</td>
                                <td>: {{$data->subject}}</td>
                            </tr>
                            <tr>
                                <td width="25%">Message</td>
                                <td>: {{$data->message}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-danger" href="{{route('contact.index')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection