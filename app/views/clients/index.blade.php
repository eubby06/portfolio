@extends('layouts.master')

@section('content')


<div class="col-md-9 main">
	<h1 class="page-header">Clients</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID#</th>
					<th>Name</th>
					<th>Date Created</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1,001</td>
					<td>Lorem</td>
					<td>ipsum</td>
					<td>shown</td>
					<td><a href="#"><span class="glyphicon glyphicon-edit"></span>edit</a></td>
				</tr>
				<tr>
					<td>1,002</td>
					<td>amet</td>
					<td>consectetur</td>
					<td>hidden</td>
					<td><a href="#"><span class="glyphicon glyphicon-edit"></span>edit</a></td>
				</tr>
				<tr>
					<td>1,003</td>
					<td>Integer</td>
					<td>nec</td>
					<td>hidden</td>
					<td><a href="#"><span class="glyphicon glyphicon-edit"></span>edit</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@stop
