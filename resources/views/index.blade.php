@extends('layouts.app')
@section('content')
  
  
        <header id="header">
        <ul class="nav-menu pl-3">
          <li class="menu-active"><a href="#intro">Home</a></li>          
          <li><a href="#speakers">Events</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
          @guest
                            <li class="nav-item float-right pr-3">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item float-right">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown float-lg-right pr-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
  </header><!-- #header -->
  
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Churchill Show<br><span>Live</span> and untamed</h1>
      <p class="mb-4 pb-0">8-12 December,Sarova White Sands, Mombasa </p>
      <a href="https://www.youtube.com/watch?v=cE3DYHi2v7E" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#speakers" class="about-btn scrollto">Available Events</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2> Available Events</h2>
          <p>Here are some of the available churchill show and churchill raw events</p>
          
<div class="container">

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
                            <button type="button" class="btn btn-success btn-sm p-1" data-toggle="modal" data-target="#buy-ticket-modal">Book</button>
                              <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button
                        
                            
                          </div>   
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>  
                    </form>
     @endforeach 
     @else

        <p>No Events found</p>
 @endif 

        </div>
      </div>

    </section>


    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Buy tickets for our Latest event at</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">sh1000</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Free Parking</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Mini Bar</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Access to Uber Eats</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Free Soft Drinks</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
         
          <!-- Pro Tier -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">Sh2500</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>VIP Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Free Parking</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Mini Bar</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to Uber Eats</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Free Soft Drinks</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Book Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
              <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
                @csrf
                

                        
                   
                <div class="form-group">
                  <input id="username" type="text" class="form-control" name="username" placeholder="Your Name">
                </div>
                  <div class="form-group">
                  <input id="email"type="text" class="form-control" name="email" placeholder="Your Email">
                </div>
                
                <div class="form-group">
                  <select id="ticket-type" name="vipSeats" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option id="regularSeats" value="Regular-access">Regular Access</option>
                    <option id="vipSeats" value="VIP-access">VIP Access</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="your-name" placeholder="How many tickets are you booking today" min="1" max="5">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Book Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LaughIndusries Kenya</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://geoffreyoliaro.github.io">geoffrey.O</a>
      </div>
    </div>
  </footer><!-- #footer -->
  @endsection