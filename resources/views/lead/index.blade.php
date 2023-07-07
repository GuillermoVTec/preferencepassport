@extends('layouts.app')

@section('template_title')
    Lead
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lead') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('leads.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
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
                                        
										<th>Id Uto</th>
										<th>Nombre</th>
										<th>Edad</th>
										<th>Estadocivil</th>
										<th>Telefono1</th>
										<th>Telefono2</th>
										<th>Correo</th>
										<th>Pais</th>
										<th>Activar Id</th>
										<th>User Id</th>
										<th>Statuses Id</th>
										<th>Distribuidores Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $lead)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lead->id_uto }}</td>
											<td>{{ $lead->nombre }}</td>
											<td>{{ $lead->edad }}</td>
											<td>{{ $lead->estadocivil }}</td>
											<td>{{ $lead->telefono1 }}</td>
											<td>{{ $lead->telefono2 }}</td>
											<td>{{ $lead->correo }}</td>
											<td>{{ $lead->pais }}</td>
											<td>{{ $lead->activar_id }}</td>
											<td>{{ $lead->user_id }}</td>
											<td>{{ $lead->statuses_id }}</td>
											<td>{{ $lead->distribuidores_id }}</td>

                                            <td>
                                                <form action="{{ route('leads.destroy',$lead->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('leads.show',$lead->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('leads.edit',$lead->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $leads->links() !!}
            </div>
        </div>
    </div>
@endsection
