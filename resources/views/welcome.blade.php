<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nunito-sans" type="text/css"/>
    <style type="text/css">body{font-family: 'NunitoSansRegular'!important;}</style>
    




    <!-- Styles -->

</head>
<body>

   <div class="content bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-tr">
      <a class="navbar-brand text-white" href="#">AppStarter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end h5" id="navbarNav">
        <ul class="navbar-nav navbar-right">
          <li class="nav-item mr-3">
            <a class="nav-link text-white" href="#features">Features</a>
        </li>
        <li class="nav-item mr-3">
            <a class="nav-link text-white" href="#video">Video Tour</a>
        </li>
        <li class="nav-item mr-3">
            <a class="nav-link text-white" href="#review">Reviews</a>
        </li>
        <li class="nav-item mr-3">
            <a class="nav-link text-white" href="#price">Pricing</a>
        </li>
        <li class="nav-item">
         <a href="#" class="button w-button text-dark lh">GET IT FREE</a>
     </li>
 </ul>
</div>
</nav>
<div class="row m-0 pb-5" >
    <div class="col-md-6 h-auto">
      <img class="mb-5 mt-5 h-75p" src="img/App Icon.png"> <br>
      <label class="text-white mb-5 h1"><b>AppStarter.</b> Best landing page for web and mobile apps</label> <br>
      <a href="#" class="gradient-button w-button mr-3 text-white mb-5">Download Now</a>
      <a href="#" class="button w-button text-dark mb-5">Watch Video</a>
  </div>
  <div class="col-md-6 text-center h-400p">
      <img class="tablet-abs" src="img/Tablet1.png">
  </div>
</div>
</div>

<div class="content text-center sect-2 bg-grey">
  <h1 id="features" class="pt-5">How does it work</h1>
  <div class="row m-0 pb-5 pt-5" data-aos="zoom-in">
     <div class="space"></div>
     <div class="col-md-3 text-center m-4 pt-5 div-box">
        <img src="img/icons/Reload Icon1.png"> <br>
        <label class="pt-3"><b>Sync</b> across all devices</label> 
        <label class="pt-2">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</label>
        <label class="pt-2 mb-5"><a href="#">Watch video</a></label>
    </div>
    <div class="col-md-3 text-center m-4 pt-5 div-box">
     <img src="img/icons/Inbox Icon1.png"> <br>
     <label class="pt-3"><b>All emails</b> in one place</label>
     <label class="pt-2">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</label>
     <label class="pt-2 mb-5"><a href="#">Watch video</a></label>
 </div>
 <div class="col-md-3 text-center m-4 pt-5 div-box">
     <img src="img/icons/Notifications Icon.png"> <br>
     <label class="pt-3"><b>Notifications</b> about sales</label>
     <label class="pt-2">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</label>
     <label class="pt-2 mb-5"><a href="#">Watch video</a></label>
 </div>
</div>
</div>

<div class="content bg-white">
  <div class="row ml-0 mr-0 p-5 text-center" data-aos="zoom-in">
    <div class="col-md-2 pt-2 pb-2"><img src="img/press/wired.png"></div>
    <div class="col-md-2 pt-2 pb-2"><img src="img/press/lifehacker.png"></div>
    <div class="col-md-2 pt-2 pb-2"><img src="img/press/mashable.png"></div>
    <div class="col-md-2 pt-2 pb-2 "><img src="img/press/theverge.png"></div>
    <div class="col-md-2 pt-2 pb-2"><img src="img/press/gizmodo.png"></div>
    <div class="col-md-2 pt-2 pb-2"><img src="img/press/macworld.png"></div>
</div>
</div>

<div class="content text-center bg-grey">
  <div class="row m-0 pb-5 pt-5" >
    <div class="col-md-6 text-left m-auto">
      <div class="sect-4 pb-2 pt-3" onclick="tab1()">
        <img class="mr-3 ml-1 float-left w-25p" src="img/icons/Reload Icon.png">
        <label><b>Sync</b> across all devices</label>
        <p class="ml-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</p>
    </div>

    <div class="sect-4 pb-2 pt-3" onclick="tab2()">
        <img class="mr-3 ml-1 float-left w-25p" src="img/icons/Inbox Icon.png">
        <label><b>All emails</b> in one place</label>
        <p class="ml-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</p>
    </div>
    <div class="sect-4 pb-2 pt-3" onclick="tab3()">
        <img class="mr-3 ml-1 float-left w-25p" src="img/icons/Clock Icon.png">
        <label><b>Track</b> your time</label>
        <p class="ml-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</p>
    </div>
</div>
<div class="col-md-6">
  <img id="pic1" class="tablet pr-box b-r" src="img/Tablet2.png">
</div>
</div>
</div>

<div class="content bg">
  <div class="row m-0 pt-3">
    <div class="col-md-7 text-white m-auto">
      <h3><b>Download</b> to get started</h3>
      This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  
  </div>
  <div class="col-md-5 pt-5 text-center">
      <a href="#" class="gradient-button w-button mr-3 text-white mb-5">Buy for $24</a>
      <a href="#" class="button w-button text-dark mb-5">Try It Free</a>
  </div>
</div>
</div>

<div class="content text-center pb-5 pt-5 bg-grey">
  <div class="row ml-0 mr-0 mt-md-5 mb-md-5 div-box">
    <div class="col-md-6 bg rounded-left t3" data-aos="fade-right">
      <img class="tablet mt-70p" src="img/Tablet3.png">
  </div>
  <div class="col-md-6 pt-5 m-auto" data-aos="fade-right">
      <h2><b>Perfect</b> landing page for your app</h2>
      <label class="p-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </label>
  </div>
  <div class="col-md-6 pt-5 m-auto" data-aos="fade-left">
   <h2><b>Perfect</b> landing page for your app</h2>
   <label class="p-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </label>
</div>
<div class="col-md-6 bg rounded-right t3" data-aos="fade-left">
   <img class="tablet mt-70p" src="img/Tablet4.png">
</div>
</div>
</div>

<div id="video" class="content pt-5 pb-5 bg-v">
  <div class="row ml-0 mr-0 p-5 text-center text-white">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2><b>Watch</b> video tour</h2>
      <label class="">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </label> <br>
      <button class="text-center mt-5 btn-play bg-white rounded-circle border-0"><img src="img/icons/Play Filled Icon.png"></button>
  </div>
  <div class="col-md-3"></div>
</div>
</div>

<div id="review"  class="row ml-0 mr-0">
  <div class="col-md-4 text-left pt-5 content sect-8">
    <img class="mt-5" src="img/icons/Stars.png">
    <h3 class="mt-5 mb-5 pb-5">Customers about AppStarted</h3>
    <div class="revs">
      <label>Read more reviews:</label> <br> <br>
      <img class="mr-3" src="img/icons/Arrow Icon.png"><label>App Store</label> <br>
      <img class="mr-3" src="img/icons/Arrow Icon.png"><label>Google Play</label>
  </div>
</div>
<div class="col-md-8 pr-5 pt-5 pb-5 bg-grey">

    <div class="p-4 mb-5 testim" >
      <img class="mr-md-4 rounded-circle float-left w-50p" src="img/photos/avatar-2.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Elisa Paul</b> - Web Designer</label> <img class="float-right" src="img/icons/Twitter Icon.png">
  </div>

  <div class="p-4 mb-5 text-right testim2" >
      <img class="ml-md-4 rounded-circle float-right w-50p" src="img/photos/avatar-3.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Juan Richards</b> - Photographer</label><img class="float-left" src="img/icons/Twitter Icon.png">
  </div>

  <div class="p-4 testim">
      <img class="mr-md-4 rounded-circle float-left w-50p" src="img/photos/avatar-4.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Marian McGuire</b> - Entepreneur</label> <img class="float-right" src="img/icons/Twitter Icon.png">
  </div>
</div>
</div>

<div id="price"  class="row ml-0 mr-0 bg-grey border-top">
  <div class="col-md-4 pl-5 text-left m-auto" >
    <h2 class="mb-3 mt-3" ><b>Choose</b> your plan</h2>
    <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</p>   
</div>
<div class="col-md-8 p-5 bg-grey">
    <div class="row p-md-5">
      <div class="col-md-6 p-0 text-center text-white bg roundedpr-box">
        <div class="mt-5 lbl-pr"><label class="pt-2 pb-2 m-auto">PROFESSIONAL</label> </div>
        <h1 class="text-center pt-4 pb-4">$ 10</h1>
        <div class="text-left">
          <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Hundreds of elements</label> <br>
          <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Style guide</label> <br>
          <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>160 icons included</label> <br>
          <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Sketch files</label> <br>
          <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Commercial licence</label> <br>
      </div>
      <div class="pl-5 pr-5 pt-3 pb-3"><a href="#" class="w-100 pl-5 pr-5 gradient-button w-button mr-3 text-white mb-5">Buy Now</a></div>
  </div>

  <div class="col-md-6 mt-3 mb-3 text-center p-0 bg-white rounded pr-box">
    <div class="mt-5 lbl-pr"><label class="pt-2 pb-2 m-auto">STARTER</label> </div>
    <h1 class="text-center pt-4 pb-4">FREE</h1>
    <div class="text-left">
      <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Professional</label> <br>
      <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Professional</label> <br>
      <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Professional</label> <br>
      <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Professional</label> <br>
      <img class="mr-2 ml-5" src="img/icons/Success Icon.png"><label>Professional</label> <br>
      <div class="pl-5 pr-5 pt-3 pb-3"><a href="#" class="button w-button text-dark mb-5 btn-f">Get Free</a></div>
  </div>
</div>
</div>
</div>
</div>



<div class="content pb-5 pt-5 bg" >
  <div class="row m-0" >
    <div class="col-md-8 text-white text-center mb-5 m-auto" data-aos="zoom-out-down">
      <h2 class="mt-5"><b>Stay</b> in touch</h2>
      <label class="ml-md-5 mr-md-5 pl-md-5 pr-md-5 mb-5">This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.</label>

      <form class="bg-white m-auto rounded" role="form" >
        <div class="row pl-5 pr-5 pt-5" >
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control input-sm bg-grey" placeholder="First Name">
          </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-sm bg-grey" placeholder="Email Address">
      </div>
  </div>
</div>

<div class="form-group pl-5 pr-5 pb-3">
  <textarea class="form-control bg-grey" placeholder="Message" rows="9"></textarea>
</div>

<div class="text-center">           
  <a href="#" class="gradient-button w-button mr-3 text-white mb-5">Download Now</a>
</div>
</form>

</div>
</div>
</div>





<footer class="page-footer pt-3 pb-3">
  <div class="content text-center" >
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-4 col-md-4 mt-md-0 mb-3 text-md-left text-sm-center">
          <h3>App Starter</h3>   
      </div>
      <div class="col-sm-4 col-md-4 mb-md-0 mb-3 text-center">
          <label>Created by <b>Andrii Romanov</b></label> <br>
          <label>App Starter</label>
      </div>
      <div class="col-sm-4 col-md-4 mb-md-0 mb-3 text-md-right text-sm-center">
          <a href="#"><i class="fab fa-twitter-square h3 text-secondary"></i></a>
          <a href="#"><i class="fab fa-facebook-square h3 text-secondary"></i></a>
          <a href="#"><i class="fab fa-instagram h3 text-secondary"></i></a>
      </div>
  </div>
</div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>




</body>
</html>
