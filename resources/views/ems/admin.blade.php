@extends('layouts.app')

@section('content')
<div class="container">
<h1>Events</h1>
</div>
@if(count($events)>0)
    @foreach ($events as $event )
    <div class="container">
        <div class="well list-group-item">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="form-group row">            
                       <div class="col-md-2" >
                       <img style="width:100%" src="/storage/cover_images/{{$event->promoImage}}">
                         </div>
                      <div class=" row-md-6">
                            <h3>{{$event->eventName}}</h3>
                             <h6>{{$event->eventLocation}}</h6>  
                          <div><small>Posted on {{$event->created_at}}</small></div>
                           
                        <form action="{{route('ems.destroy', array($event->event_id))}}"method = "POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm p-1">Delete</button>

                        </form>

                          </div>   
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>  
    @endforeach
    
@else

        <p>No Events found</p>
@endif

@endsection
