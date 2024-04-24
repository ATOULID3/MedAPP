@extends('welcome')
@extends('sidebar')
@extends('letbar')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Basic</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
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
            <!-- Default Basic Forms Start -->


            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">modifer le client</h4>

                    </div>

                </div>
                @if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif


<ul>
@foreach ($errors->all() as $error)
<li class="alert alert-danger"> {{$error}}</li>
@endforeach
</ul>
                <form action="/update/traitment" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">id</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" id="id" name="id" value="{{$clients->id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" id="name" name="name" value="{{$clients->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">age</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" id="age" name="age"value="{{$clients->age}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">email</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="email" id="email" name="email"value="{{$clients->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">phone</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control"  id="phone" name="phone" value="{{$clients->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">address</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control"  id="address" name="address" value="{{$clients->address}}">
                        </div>
                    </div>

                        </div>
                        <div class="mb-3 pd-20">
                            <button class="btn btn-success" type="submit">ajouter</button>
                        <a class="btn btn-sm btn-danger" href="{{url('/clients')}}">Anuuler</a>
                    </div>

                    </div>


                </form>
                <div class="collapse collapse-box" id="basic-form1" >
                    <div class="code-box">
                        <div class="clearfix">
                            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
                            <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                        </div>
                        <pre><code class="xml copy-pre" id="copy-pre">
 </code></pre>
</div>
</div>
</div>




