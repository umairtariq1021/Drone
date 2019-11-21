@extends('layouts.main')
@section('content')

<div class="container-fluid">
  <div class="image-aboutus-banner"style="margin-top:10px">
    
   <h1 class="text-center lg-text">About Us</h1>   
      
</div>
</div>


<div class="container mt-5">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="card" >
             <img class="card-img-top" src="{{URL::asset('images/about/culture.jpg')}}" alt="Card image" style="height:230px">
               <div class="card-body">
               <h4 class="card-title"><strong>Culture</strong></h4>
                  <p class="card-text">Some example text.</p>
   
                                 </div>
                                     </div>
			
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="card" >
             <img class="card-img-top" src="{{URL::asset('images/about/values.jpg')}}" alt="Card image" style="height:230px">
               <div class="card-body">
               <h4 class="card-title"><strong>Values</strong></h4>
                  <p class="card-text">Some example text.</p>
   
                                 </div>
                                     </div>
			
		</div>

		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">

			<div class="card" >
             <img class="card-img-top" src="{{URL::asset('images/about/leadership.jpg')}}" alt="Card image" style="height:230px">
               <div class="card-body">
               <h4 class="card-title"><strong>Leadership</strong></h4>
                  <p class="card-text">Some example text.</p>
   
                                 </div>
                                     </div>
			
		</div>
		
	</div>

 

</div>

<div class="container">

	<h3 class="mt-5"><strong>Statistics that tell our story:</strong></h3>
	
<div class="row">

<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
  	<span><i class="fas fa-download fa-5x" style="padding-left: 90px;"></i></span>
    <h5 class="card-title text-center mt-2"><strong>1 billion+</strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">Over 1 billion images, video clips, and </br><center>music tracks downloaded</center></h6>
    </div>
</div>
</div>

<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <span><i class="fas fa-person fa-5x" style="padding-left: 90px;"></i></span>
    <h5 class="card-title text-center mt-2"><strong>650,000+</strong></h5>
   <h6 class="card-subtitle mb-2 text-muted">Our world-class content comes from
   <center> over 650,000 contributors</center></h6>
    
    
  </div>
</div>
	
</div>
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <span><i class="fas fa-download fa-5x" style="padding-left: 90px;"></i></span>
    <h5 class="card-title text-center mt-2"><strong>250 million+</strong></h5>
   <h6 class="card-subtitle mb-2 text-muted">We’ve got over 250 million images,
   <center> with 200,000 more added every day</center></h6>
  
    
  </div>
</div>
	
</div>
<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <span><i class="fas fa-world fa-5x" style="padding-left: 90px;"></i></span>
    <h5 class="card-title text-center mt-2"><strong>150+ Countries</strong></h5>
    <h6 class="card-subtitle mb-2 text-muted">We have customers in 150+ countries
    <center> and our site is in 21 languages</center></h6>
   
   
  </div>
</div>
	
</div>
	</div>
</div>




 
    
		
			


@endsection


	

