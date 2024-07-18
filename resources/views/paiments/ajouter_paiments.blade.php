@extends('welcome')
@extends('sidebar')
@extends('letbar')

<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>ajouter paiments</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ajouter paiments</li>
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
            <!-- Default Basic Forms Start -->

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
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Ajouter paiments</h4>

                    </div>

                </div>
                <form action="/ajouter/pai" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">client</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" id="client" name="client">
                                <option selected disabled align='center'>----Choisez client----</option>
                                @foreach ($clients as $client)
                                <option value="{{ $client->name }}"> {{ $client->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">avance</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="number" id="avance" name="avance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">date de avance</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="date" id="date_avance" name="date_avance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">reste</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="number"  id="reste" name="reste">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">date de reste</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="date"  id="date_reste" name="date_reste">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">import recut</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file"  id="recut" name="recut">
                        </div>
                    </div>
                        </div>
                        <div class="mb-3 pd-20">
                            <button class="btn btn-success" type="submit">ajouter</button>
                        <a class="btn btn-sm btn-danger" href="{{url('/paiments')}}">Anuuler</a>
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
