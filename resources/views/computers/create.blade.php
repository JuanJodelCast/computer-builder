  
@extends('layouts.main')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="stylesheet" href="{{ asset('css/login.css') }}" integrity="">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card">
			<div class="card-header">
				<h3>Create new computer</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
                <form action="{{ route('computers.store') }}" method="POST">
                @csrf
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-desktop"></i></span>
						</div>
						<input name="name" id="name" type="text" class="form-control" placeholder="name">
					</div>
                    <div class="input-group form-group">
						<select name="motherboard_id" id="motherboard_id" class="form-control">
							<option value="invalid" selected>Select a motherboard</option>
							@foreach ($motherboards as $motherboard)
							<option value="{{ $motherboard->id }}">{{ $motherboard->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<input type="submit" value="Store" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
</div>
</body>
</html>
@endsection