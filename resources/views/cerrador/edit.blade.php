@extends('layouts.app')

@section('template_title')
    Update Cerrador
@endsection

@section('content')
    <section >
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                                        <div class="card-header">
                      <h5 class=""><small class="text-muted float-end"><a class="btn btn-primary"  href="{{ route('cerradors.index') }}"><i class="fa fa-fw fa-edit"></i> Regresar</a></small></h5>
                    </div>
                    <div class="card-header">
                        <span class="card-title">Update Cerrador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cerradors.update', $cerrador->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cerrador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
