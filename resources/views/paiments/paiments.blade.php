@extends('welcome')
@extends('sidebar')
@extends('letbar')

<div class="main-container">
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Paiments</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paiments</li>
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
    <a class="btn btn-sm btn-primary" href="/ajouter_paiments">ajouter Paiments</a>
</div><br>
<ul class="row">
    @foreach ($paiments as $paiment )

<li class="col-lg-4 col-md-6 col-sm-12">
    <div class="product-box">
        <div class="producct-img"><img src="{{ asset('details/' . $paiment->recut) }}" alt=""></div>
        <div class="product-caption">
            <h4><a href="#">{{$paiment->client}}</a></h4>
            <div class="price">
                <p>avance:</p><ins>{{$paiment->avance}} DH</ins><p>{{$paiment->date_avance}}</p>
            </div>
            <div class="price">
                <p>reste:</p><ins>{{$paiment->reste}} DH</ins><p>{{$paiment->date_reste}}</p>
            </div>
            <a href="/details_paiments/{{$paiment->id}}" class="btn btn-outline-primary">details</a>
        </div>
    </div>
</li>
@endforeach
</ul>

</div>

