@extends('hosting.base')
@section('content')
<h1>Listado de Servidores</h1>
@if($data['status'] == 1)
	<table class="table table-striped">
	 <tr>
	 				<th>IP</th>
					<th>Dominio</th>
					<th>Usuario</th>
					<th>Email</th>
					<th>Fecha de Inicio</th>
					<th>Acciones</th>
	 </tr>
	 @foreach($data['acct'] as $host)
		<tr>
			<td>{{ $host['ip']}}</td>
			<td><a href="http://{{ $host['domain']}}" target="_blank">{{ $host['domain']}}</a></td>
			<td>{{ $host['user']}}</td>
			<td>{{ $host['email']}}</td>
			<td>{{ date('d/m/Y',$host['unix_startdate'])}}</td>
			<td>acciones</td>
		</tr>
	@endforeach
	</table>
@endif
@stop