
@extends('sidebar')
@extends('letbar')
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>MedAPP-Profil</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>ajouter invoice</h4>
							</div>
                            <br>
                            <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class="alert alert-danger"> {{$error}}</li>
                                @endforeach
                                </ul>

    <div class="modal-body pd-0">
        <div class="task-list-form">
            <ul>
                <li>
                    <form action="ajouterin/traitment" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4">client</label>
                            <div class="col-md-8">
                                <select type="text" class="form-control" id="client" name="client">
                                    <option selected disabled align='center'>----Choisez client----</option>
                                @foreach ($clients as $client)
                                <option value="{{ $client->name }}"> {{ $client->name }}</option>
                            @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Date Issued</label>
                            <div class="col-md-8">
                                <input type="text" class="datetimepicker form-control" type="text" id="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Account No</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" type="date" id="accountno" name="accountno">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-md-4">Code</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="code" name="code">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <label class="col-md-4">Due By</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control date-picker" id="due" name="due">
                            </div>
                        </div>
                        <br>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-success" type="submit">ajouter</button>
        <a class="btn btn-sm btn-danger" href="{{url('/invoices')}}">Anuuler</a>
    </div>
</form>

<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/cropperjs/dist/cropper.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        var image = document.getElementById('image');
        var cropBoxData;
        var canvasData;
        var cropper;

        $('#modal').on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                autoCropArea: 0.5,
                dragMode: 'move',
                aspectRatio: 3 / 3,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
                cropBoxMovable: false,
                cropBoxResizable: false,
                toggleDragModeOnDblclick: false,
                ready: function () {
                    cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                }
            });
        }).on('hidden.bs.modal', function () {
            cropBoxData = cropper.getCropBoxData();
            canvasData = cropper.getCanvasData();
            cropper.destroy();
        });
    });
</script>
</body>
</html>
