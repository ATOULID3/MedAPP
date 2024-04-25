@extends('welcome')
@extends('letbar')
@extends('sidebar')



<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="container pd-0">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Users</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="contact-directory-list">
                    <ul class="row">
                        @foreach ($users as $user)
                        <li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-directory-box">
                                <div class="contact-dire-info text-center">
                                    <div class="contact-avatar">
                                        <span>
                                            <img src="vendors/images/photo2.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="contact-name">
                                        <h4>{{ $user->name }}</h4>
                                        <p>{{ $user->email }}</p>
                                        <div class="work text-success"><i class="ion-android-person"></i> Admin</div>
                                    </div>
                                    <div class="contact-skill">
                                        <span class="badge badge-pill">UI</span>
                                        <span class="badge badge-pill">UX</span>
                                        <span class="badge badge-pill">Photoshop</span>
                                        <span class="badge badge-pill badge-primary">+ 8</span>
                                    </div>
                                    <div class="profile-sort-desc">
                                        {{ $user->name }} is Admin he have autorisation to change all
                                    </div>
                                </div>
                                <div class="view-contact">
                                    <a href="#">View Profile</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
