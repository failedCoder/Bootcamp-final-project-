@extends('backend.home')

@section('content')



 <br>

<ul class="list-group">
    @if ($flash=session('message'))
    <div class="alert alert-success" role="alert" id="success-alert">
      {{ $flash }}
    </div>    
    @endif
    
 		
  <table class="table table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">Ime</th>
      <th scope="col">Email</th>
      <th scope="col">Poruka</th>
      <th scope="col">Vrijeme</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($messages as $message)
    <tr>
      <th scope="row" class="align-middle">{{ $message->name }}</th>
      <td class="align-middle">{{ $message->email }} kn</td>
      <td class="align-middle">{{ $message->message }}</td>
     
      
      <td class="align-middle">
        <form method="POST" action="/home/poruke/{{$message->id}}" 
          onclick="return confirm('JESTE LI SIGURNI DA ŽELITE OBRISATI OVU PORUKU?')">
            {{ csrf_field() }}
           <input type="hidden" name="_method" value="DELETE">
           <input type="submit" name="delete" class="btn btn-outline-danger" value="Obriši poruku">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</ul>

<div class="d-flex justify-content-center">
 {{ $messages->links() }}
</div>
@endsection