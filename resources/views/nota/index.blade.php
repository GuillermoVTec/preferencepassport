@extends('layouts.app')

@section('template_title')
    Nota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('nota.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                <table >
                                <thead >
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Nota</th>
                                        <th>Leads Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $nota->nota }}</td>
                                            <td>{{ $nota->leads_id }}</td>

                                            <td>
                                                <form action="{{ route('nota.destroy',$nota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('nota.show',$nota->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('nota.edit',$nota->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $notas->links() !!}
            </div>
        </div>
    </div>
@endsection
