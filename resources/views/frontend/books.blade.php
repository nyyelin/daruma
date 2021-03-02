    @extends('frontend_template')
@section('content')
 <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>{{$journalvideo->name}}</li>
        </ol>
        <h2>{{$journalvideo->name}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section class="blog knowledge">
      <div class="container">

  <div class="row">

       @foreach($addjournalvideos as $addjournalvideo)
    <div class="detailmain col-lg-4 col-12">

  <ul class="cardss">
    <li class="cardss_item">
      <div class="cardb">
        <div class="carddd_image"><img src="{{$addjournalvideo->photo}}" class="img-responsive img-fluid" ></div>
        <div class="cardb_content">
          <h2 class="cardb_title">{{$addjournalvideo->header}}</h2>
          <br>
        <!--   <p class="cardb_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
          <button class="btnn card_btn"><a href ="{{route('detailbooks',$addjournalvideo->id)}}">Read More </a></button>


        </div>
      </div>
    </li>
  
   


  </ul>
</div>
 @endforeach
  </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
  <style type="text/css">

.detailmain{


  margin: 0 auto;
}

.cardb:hover{
 cursor: pointer;
  box-shadow: 4px 12px 30px 4px rgba(0, 0, 0, 0.2);
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}


.carddd_image img {
  height: 250px;
  max-width: 100%;
  vertical-align: middle;
}

.btnn {
  color: black;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btnn:hover {
  background-color: rgba(190, 190, 190, 0.12);
}

.cardss {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
  width: 390px;
}

.cardss_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cardss_item {
    width: 100%;
  }
}

@media (min-width: 56rem) {
  .cardss_item {
    width: 100%;
  }
}

.cardb {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  
  overflow: hidden;
}

.cardb_content {
  padding: 1rem;
  background: white;
}

.cardb_title {
  color: black;
  font-size: 1.1rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.cardb_text {
  color: black;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
  </style>
@endsection