@extends('layouts.master')

@section('content')


<div class="col-md-9 main">
	<h1 class="page-header">Dashboard</h1>
	<div class="row placeholders">
		<div class="col-xs-6 col-sm-3 placeholder">
			<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
			<h4>Step 1</h4>
			<span class="text-muted">Add Client</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
			<h4>Step 2</h4>
			<span class="text-muted">Create Project</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
			<h4>Step 3</h4>
			<span class="text-muted">Create Case Study</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
			<h4>Step 4</h4>
			<span class="text-muted">Upload Visuals</span>
		</div>
	</div>
	<h2 class="sub-header">Case Studies</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Header</th>
					<th>Header</th>
					<th>Header</th>
					<th>Header</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1,001</td>
					<td>Lorem</td>
					<td>ipsum</td>
					<td>dolor</td>
					<td>sit</td>
				</tr>
				<tr>
					<td>1,002</td>
					<td>amet</td>
					<td>consectetur</td>
					<td>adipiscing</td>
					<td>elit</td>
				</tr>
				<tr>
					<td>1,003</td>
					<td>Integer</td>
					<td>nec</td>
					<td>odio</td>
					<td>Praesent</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@stop
