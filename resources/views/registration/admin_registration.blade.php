@extends('layouts.app1')

@section('title')
Admin Registration
@endsection

@section('content')

@if($errors->any())
<div class="alert-danger">

	@foreach($errors->all() as $error)
	<ul>
		<li>{{ $error }}</li>
	</ul>
	@endforeach

</div>
@endif
<div class="container-fluid">
	<form action="{{ route('admin_registration') }}" method="POST" class="" accept-charset="utf-8" style="color:#8b4513;font-size: 1.2em;">
		@csrf
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Name:-
			</label>
			<div class="col-md-4" >
				<input type="text" name="admin_name" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Address:-
			</label>
			<div class="col-md-4" >
				<textarea name="admin_address" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Gender:-
			</label>
			<div class="col-md-4" >
				<div class="radio">
					<label><input type="radio" name="gender">Male</label>
					<label><input type="radio" name="gender">Female</label>
				</div>
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Date of Birth:-
			</label>
			<div class="col-md-4" >
				<input type="date" name="admin_birth_date" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Contact:-
			</label>
			<div class="col-md-4" >
				<input type="text" name="admin_contact" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Username(Email):-
			</label>
			<div class="col-md-4" >
				<input type="email" name="admin_username" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Password:-
			</label>
			<div class="col-md-4" >
				<input type="password" name="admin_password" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<label class="col-md-4 control-label">
				Confirm Password:-
			</label>
			<div class="col-md-4" >
				<input type="password" name="admin_password_confirmation" class="form-control">
			</div>
		</div>
		<div class="form-group" style="padding:1.5rem;">
			<div class="col-md-offset-4 col-md-4">
				<input type="submit" class="btn btn-success" name="submit" value="Register">
			</div>
		</div>

	</form>
</div>

@endsection
