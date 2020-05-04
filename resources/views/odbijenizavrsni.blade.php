@extends('layouts.app')

@section('content')

</head>
<body style="background: url('images/show.jpg'); background-size: 100%; text-align:center;">
	<div class="wrapper" style="text-align:center; position:center;">
		<section class="panel panel-primary" style="background:transparent">
			<div class="panel-heading" style="font-size:30px; background-color:rgba(110, 3, 124, 0.555)">
				ODBIJENI ZAVRŠNI RADOVI:
			</div>
			<div class="panel-body" style="background-color: grey border-color: black;">
				<table class="table table-bordered">
					<thead>
						<th>Ime i Prezime</th>
						<th>Broj indeksa</th>
                        <th>Tema</th>
						<th>Mentor</th>
						<th>Datum Prijave</th>
					</thead>

					<tbody>

					@foreach($downloads as $down)
						<tr>
                            <td>{{$down['ime_i_prezime']}}</td>
							<td>{{$down['broj_indeksa']}}</td>
                            <td>{{$down['tema']}}</td>
							<td>{{$down['mentor']}}</td>
							<td>{{$down['prijava']}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</section>
    </div>
    @endsection