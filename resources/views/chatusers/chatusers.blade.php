@extends('welcome')
@extends('letbar')
@extends('sidebar')



<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Chatusers</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chatusers</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        January 2018
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Export List</a>
                        <a class="dropdown-item" href="#">Policies</a>
                        <a class="dropdown-item" href="#">View Assets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd-20 card-box mb-30">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">from</th>
                        <th scope="col">to</th>
                        <th scope="col">subject</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chatusers as $chatuser )
                    <tr class="table-active">
                        <th scope="row">{{$chatuser->id}}</th>
                        <td>{{$chatuser->from}}</td>
                        <td>{{$chatuser->to}}</td>
                        <td>{{$chatuser->subject}}</td>
                        <td><a onclick="showAlert()" class="btn btn-sm btn-danger" href="/delete_chatusers/{{$chatuser->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="collapse collapse-box" id="contextual-table">
            <div class="code-box">
                <div class="clearfix">
                    <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                    <a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                </div>
                <pre><code class="xml copy-pre" id="contextual-table-code">
<div class="table-responsive">
<table class="table table-striped">
<tbody>
<tr class="table-active"><td></td></tr>
<tr class="table-primary"><td></td></tr>
<tr class="table-secondary"><td></td></tr>
<tr class="table-success"><td></td></tr>
<tr class="table-danger"><td></td></tr>
<tr class="table-warning"><td></td></tr>
<tr class="table-info"><td></td></tr>
<tr class="table-light"><td></td></tr>
<tr class="table-dark"><td></td></tr>
</tbody>
</table>
</div>
                </code></pre>
            </div>
        </div>
    </div>
</div>
<script>
    function showAlert() {
        alert("are you sure want to delete chat!");
    }
</script>
