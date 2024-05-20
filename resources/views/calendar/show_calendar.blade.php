@extends('welcome')
@extends('letbar')
@extends('sidebar')
<div class="main-container">
    @if (count($calendars)==0)
    <div class="alert alert-primary pb-1">
        <p align="center"><b>Aucune events Enregistrer</b></p>
    </div>
@else
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                @foreach ($calendars as $calendar )
                <div class="row clearfix">
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<h5 class="card-header weight-500">{{ $calendar->ename }}</h5>
							<div class="card-body">
								<h5 class="card-title">{{ $calendar->edesc }}</h5>
								{{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
							</div>
							<div class="card-footer text-muted">
								{{ $calendar->edate }}
                                <a onclick="showAlert()" href="/delete_calendar/{{$calendar->id}}" class="btn btn-danger btn-sm">X</a>
							</div>
						</div>
					</div>
					{{-- <div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-header">
								{{ $calendar->ename }}
							</div>
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<footer class="blockquote-footer"><cite title="Source Title">{{ $calendar->edate }}</cite></footer>
								</blockquote>
							</div>
						</div>
					</div> --}}
				</div>
                <hr>
@endforeach
@endif
</div>
</div>
</div>
</div>
<script>
    function showAlert() {
        alert("are you sure want to delete calendar!");
    }
</script>
