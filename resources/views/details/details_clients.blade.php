@extends('welcome')
@extends('letbar')
@extends('sidebar')



<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>details des clients</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">details des clients</li>
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
    <div class="d-flex justify-content-center">
        <a class="btn btn-sm btn-primary" href="/ajouter_details">ajouter details</a>
    </div>
    <br>
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
<div class="row clearfix">
    @foreach ($details as $detail)
    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
        <div class="da-card">
            <div class="da-card-photo">
                <img src="{{ asset('details/' . $detail->phot) }}" alt="Model Image">
                {{-- <div class="da-overlay da-slide-left">
                    <div class="da-social">
                        <ul class="clearfix">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
            <div class="da-card-content">
                <h5 class="h5 mb-10">{{$detail->client}}</h5>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{ asset('details/' . $detail->cin) }}"><button type="button" class="btn btn-outline-primary">cin</button></a>
                    <a href="{{ asset('details/' . $detail->radio) }}"><button type="button" class="btn btn-outline-primary">radio</button></a>
                    <a href="{{ asset('details/' . $detail->pdf) }}"><button type="button" class="btn btn-outline-primary">pdf</button></a>
                    {{-- <button type="button" class="btn btn-outline-primary">photo</button> --}}
                    <a href="{{ asset('details/' . $detail->fil) }}"><button type="button" class="btn btn-outline-primary">file</button></a>
                  </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
