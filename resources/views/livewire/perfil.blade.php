@extends('layouts.app')



@section('content')
<section >
 <div>
    
<h1>Usuario #{{ $user->id }}</h1>

<table class="table table-dark">
<thead>
<tr>
<th scope="col">{{ $user->id }}</th>
<th scope="col">{{ $user->name }}</th>
<th scope="col">{{ $user->email }}</th>
</tr>
</thead>
 </div>
  </div>
   </div>
    </section>
@endsection
