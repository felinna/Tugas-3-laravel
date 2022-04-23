@extends('layouts.app')

@section('title', 'Friends')

@section('content')

@foreach ($friends as $friend)
<div class="card mb-2" style="width: 15rem;">
  <div class="card-body">
    <a href="/friends/{{ $friend['id'] }}" class="card-title">{{ $friend['nama'] }}</a>
    <h6 class="card-subtitle mt-2 text-muted">{{ $friend['no_tlp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}.</p>
    
    <a href="/friends/{{ $friend['id'] }}/edit" class="btn btn-sm btn-warning" type="submit">Edit Teman</a>

    <form action="/friends/{{ $friend['id'] }}" method="POST">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-sm btn-danger">Delete Data</button>
    </form>
  
  </div>
</div>
 
@endforeach
<div>
  {{ $friends->links() }}
</div>
@endsection