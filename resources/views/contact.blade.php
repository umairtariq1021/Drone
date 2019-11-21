@extends('layouts.main')
@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
  <div class="image-contactus-banner"style="margin-top:10px">
    
   
    
         <h1 class="text-center lg-text">Contact Us</h1>
        
      
</div>


</br>
<div class="container">
<div class="row">
  <div class="col-md-8">
      <form action="" method="">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-danger" type="submit" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4">
    <b>Customer service:</b> <br />
    Phone: +1 129 209 291<br />
    E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
    <br /><br />
    <b>Headquarter:</b><br />
    Shutle Inc, <br />
    Pak Arab Society<br />
    Lahore, Pak<br />
    Phone: +1 145 000 101<br />
    <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />


    <br /><br />
    <b>Hong kong:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    Wan Chai District, Hong Kong<br />
    Phone: +852 129 209 291<br />
    <a href="mailto:hk@mysite.com">hk@mysite.com</a><br />


  </div>
</div>
</div>
</div>
@endsection
