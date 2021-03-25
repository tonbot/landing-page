<?php 
//including bootstrap component
include_once "include.php";
?> 


<!-- html starts here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="customCss/index.css">
</head>
<body>
<div class="container-fluid1">
    <div class="con1">
        
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand">Properings</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-dark"><i class="fas fa-align-center"></i></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">TEAM</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    
      
        <div class="new">
             New Way Of Living
       </div>
       <div class="getstarted">
            Get Started
       </div>
    </div>
    <!-- SECTION 2 -->
    <div class="container con11 text-center">
        <div class="row bg-dark shadow ">
            <div class="col-sm-3">
                <p class="label">Location</p>
                <p class="description">Lagos <span class="pl-2"><i class="fas fa-chevron-down"></i></span></p>
            </div>
            <div class="col-sm-3">
                <p class="label">Property type</p>
                <p class="description">Duplex house <span class="pl-2"><i class="fas fa-chevron-down"></i></span></p>
            </div>
            <div class="col-sm-3">
                <p class="label">Max price</p>
                <p class="description">$25000-35000 <span class="pl-2"><i class="fas fa-chevron-down"></i></span></p>
            </div>
            <div class="col-sm-3 search bg-white">
                <i class="fas fa-search"></i>
            </div>
           
        </div>
    </div>
    <!-- SECTION 2 ENDS HERE -->
     
    <!-- SECTION 3 -->
    <div class="container3 " style="margin-left:45px">
        <div class="row">
            <div class="col-sm-6 pl-5 ">
                <img class="img12 shadow" src="img/img1.png " width="100%" height="auto" alt="image1">
            </div>
            <div class="col-sm-6">
                <p class="aboutus">About us</p>
                <p>Lorem ipsum dolor sit amet, consectetur 
                   adipiscing elit. Dolor turpis aliquam urna
                   et, aliquam sed dignissim fermentum urna
                   .Potenti sit sagittis dui netus facilisi. 
                   Lacinia tincidunt ac feugiat sed.
                   Fermentum mattis egestas at sed eu nibh.
                </p>
                <p class="learnmore">
                  Learn More
                </p>
             </div>
        </div>
    </div>
    <!--ENDS HERE 3 -->

    <!-- SECTION 4 -->
    <div class="section4  bg-white" style="margin-left:45px">
       <div class="d-flex bg-white flex-row ml-5">
          <div class="col-sm-4 shadow ml-4">
             <img class="img123" src="img/lekki_villa.png" width="100%"  alt="image1">
              <div>
                   <p class="price">$10,000 <i class="fas fa-heart text-danger"></i></p>
                   <p class="icon"><i class="fas fa-shopping-cart mr-3"> 3 </i><span><i class="fas fa-baby-carriage"> 2 </i></span></p>
              </div>
              <div>
                     <p class="name">Lekki Villa</p>
                     <p class="location">Abuja, Nigeria</p>
              </div>
           </div>

           <div class="col-sm-4 shadow ml-5">
             <img class="img123" src="img/king_palace.png" width="100%"  alt="image1">
              <div>
                   <p class="price">$45,000 <i class="fas fa-heart text-danger"></i></p>
                   <p class="icon"><i class="fas fa-shopping-cart mr-3"> 3 </i><span><i class="fas fa-baby-carriage"> 2 </i></span></p>
              </div>
              <div>
                     <p class="name">King palace</p>
                     <p class="location">Lagos, Nigeria</p>
              </div>
           </div>
           
           <div class="col-sm-4 shadow ml-5">
             <img class="img123" src="img/executive.png" width="100%"  alt="image1">
              <div>
                   <p class="price">$50,000 <i class="fas fa-heart text-danger"></i></p>
                   <p class="icon"><i class="fas fa-shopping-cart mr-3"> 3 </i><span><i class="fas fa-baby-carriage"> 2 </i></span></p>
              </div>
              <div>
                     <p class="name">Executive</p>
                     <p class="location">Abuja, Nigeria</p>
              </div>
           </div>
          </div>
           
       </div>
    </div>
    <!--ENDS HERE 4 -->

    <!-- SECTION 5 -->
    <div class="section5 container text-center">
        <div class="howitworks">
            How it Works
        </div>
        <div class="d-flex flex-row text-center sec5"> 
            <div class="col-sm-3 sec5col shadow ">
                 <i class="fas fa-home fa-3x rounded-circle p-3 shadow"></i>
                <p class="eval">Evaluate your property</p>
                <p class=" evaltext">
                    Evaluation of property is very important for purchase
                </p>
            </div>

            <div class="col-sm-3 sec5col shadow  bg-dark">
                 <i class="fas fa-home fa-3x rounded-circle p-3 shadow bg-white text-dark"></i>
                <p class="eval text-white">Pay for property</p>
                <p class=" evaltext  text-white">
                Pay for your the property of your choice
                </p>
            </div>
      
            <div class="col-sm-3 sec5col shadow ">
                <i class="fas fa-home fa-3x rounded-circle p-3 shadow"></i>
                <p class="eval">Close the deal</p>
                <p class=" evaltext">
                Ger to connect with us let us help you close the deal               
                </p>
            </div>
        </div>

    </div>
     <!--ENDS HERE 5 -->

     <!-- SECTION 6 -->
      <div class=" section6 container text-center">
             <div class="howitworks">
                 Why choose us?
             </div>
             <div class=" row">
             <div class="col-sm-6">
                 <img src="img/video.png" width="100%" heigth="auto">

             </div>
             <div class="col-sm-5 ml-5">
                 <div class=" pl-5 py-3 bg-light mt-3">
                     <div class="text-left ">
                     <p class="" style="font-weight:bold">Property Issurance</p>
                     <p>First you should meet with your agents</p>
                     </div>
                 </div>

                 <div class="pl-5 py-3 bg-dark mt-3 text-white">
                 <div class="text-left ">
                     <p style="font-weight:bold">Tax Advantage</p>
                     <p>First you should meet with your agents</p>
                 </div>
                 </div>

                <div class="pl-5 py-3 mt-3 bg-light" > 
                <div class="text-left ">
                     <p style="font-weight:bold">Lowest commision</p>
                     <p>First you should meet with your agents</p>
                 </div>
                </div>
             </div>
      </div>

      <!--ENDS HERE 6 -->

    

   
</div>

</body>
</html>