@extends('layouts.main')

@section('content')
<div class="title-banner"><h2>Please select the type of component</h2></div>
<div class="container">
	<div class="justify-content-center p-5">
		<a href="{{ route('components.list', ['type' =>  'ram']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				RAM
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'cpu']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				CPU
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'hdd']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				HDD
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'ssd']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				SSD
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'cooler']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				Cooler
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'gpu']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				GPU
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'cabinet']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				Cabinet
			</button>
		</a>
		<a href="{{ route('components.list', ['type' =>  'power_supply']) }}">
			<button type="button" class="m-2 btn btn-centered btn-labeled btn-success btn-info" >
				Power supply
			</button>
		</a>
	</div>
</div>
@endsection