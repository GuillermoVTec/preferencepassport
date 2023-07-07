@extends('layouts.app')

@section('template_title')
    Worksheet
@endsection

@section('content')
    <div >
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Calificacion</th>
										<th>Booking</th>
										<th>Ocupaciont</th>
										<th>Nombrec</th>
										<th>Edadc</th>
										<th>Ocupácionc</th>
										<th>Estadocivilc</th>
										<th>Ingresos</th>
										<th>Tarjetas</th>
										<th>Ciudad</th>
										<th>Cp</th>
										<th>Plataforma</th>
										<th>Localizador</th>
										<th>Moneda</th>
										<th>Leads Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($worksheets as $worksheet)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $worksheet->calificacion }}</td>
											<td>{{ $worksheet->booking }}</td>
											<td>{{ $worksheet->ocupaciont }}</td>
											<td>{{ $worksheet->nombrec }}</td>
											<td>{{ $worksheet->edadc }}</td>
											<td>{{ $worksheet->ocupácionc }}</td>
											<td>{{ $worksheet->estadocivilc }}</td>
											<td>{{ $worksheet->ingresos }}</td>
											<td>{{ $worksheet->tarjetas }}</td>
											<td>{{ $worksheet->ciudad }}</td>
											<td>{{ $worksheet->cp }}</td>
											<td>{{ $worksheet->plataforma }}</td>
											<td>{{ $worksheet->localizador }}</td>
											<td>{{ $worksheet->moneda }}</td>
											<td>{{ $worksheet->leads_id }}</td>

                                            <td>
                                                <form action="{{ route('worksheet.destroy',$worksheet->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('worksheet.show',$worksheet->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('worksheet.edit',$worksheet->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $worksheets->links() !!}
            </div>
        </div>
  </div>
   </div>
  
          
    
@endsection
