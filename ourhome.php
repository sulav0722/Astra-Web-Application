<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="css/plugins.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet"/>
  <title>Astra Developers</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background: linear-gradient(0deg, rgba(13,25,51,1) 0%, rgba(13,25,51,1) 25%, rgba(32,72,128,1) 100%);">
  <a class="navbar-brand ml-5" href="../Summer"><img src="Astra.png" alt="Logo" class="logo" style="width:75px;height:75px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavDropdown">
    <ul class="navbar-nav " style="color: #ac8a4d;">
      <li class="nav-item mx-3">
        <a class="nav-link" href="#">Our Homes<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item mx-3">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown mx-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #0c1c33;">
         
          <a class="dropdown-item nav-link" href="inventory">Inventory</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- <div class="imgcont33" style="width: 100%;">
<img src="abt/Brochure -09.jpg" style="width: 100%;">
<img src="abt/Brochure -10.jpg" style="width: 100%;">
<img src="abt/Brochure -11.jpg" style="width: 100%;">
<img src="abt/Brochure -12.jpg" style="width: 100%;">
<img src="abt/Brochure -13.jpg" style="width: 100%;">
<img src="abt/Brochure -14.jpg" style="width: 100%;">
<img src="abt/Brochure -15.jpg" style="width: 100%;"> -->

    <!-- Restaurant Menu -->
    <section id="menu" class="restaurant-menu menu section-padding bg-img bg-fixed " data-overlay-dark="3" data-background="SS1.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle"><span>EXPLORE OUR LEGACY</span></div>
                    <div class="section-title"><span>Our Homes</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="tabs-icon col-md-10 offset-md-1 text-center">
                            <div class="owl-carousel owl-theme">
                                <div id="tab-1" class="active item">
                                    <h6>Plot 1</h6>
                                </div>
                                <div id="tab-2" class="item">
                                    <h6>Plot 2</h6>
                                </div>
                                <div id="tab-3" class="item">
                                    <h6>Plot 3</h6>
                                </div>
                                <div id="tab-4" class="item">
                                    <h6>Plot 4</h6>
                                </div>
                                <div id="tab-5" class="item">
                                    <h6>Plot 5</h6>
                                </div>
                                <div id="tab-6" class="item">
                                    <h6>Plot 6</h6>
                                </div>
                                <div id="tab-7" class="item">
                                    <h6>Plot 7</h6>
                                </div>
                            </div>
                        </div>
                        <div class="restaurant-menu-content col-md-12">
                            <!-- Starters -->
                            <div id="tab-1-content" class="cont ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 1</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4 
                                            </p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="abt/OurHome/Plot 1-1.jpg" title="Plot 1 Ground" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="abt/OurHome/Plot 1-1.jpg" class="img-fluid mx-auto d-block" alt="Plot 1 Ground"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="abt/OurHome/Plot 1-2.jpg" title="Plot 1 First Floor" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="abt/OurHome/Plot 1-2.jpg" class="img-fluid mx-auto d-block" alt="Plot 1 First Floor"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="abt/OurHome/Plot 1-3.jpg" title="Plot 1 Second Floor" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="abt/OurHome/Plot 1-3.jpg" class="img-fluid mx-auto d-block" alt="Plot 1 Second Floor"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="abt/OurHome/Plot 1-4.jpg" title="Plot 1 Third Floor" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="abt/OurHome/Plot 1-4.jpg" class="img-fluid mx-auto d-block" alt="Plot 1 Third Floor"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="abt/OurHome/Plot 1-5.jpg" title="Plot 1 Terrace" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="abt/OurHome/Plot 1-5.jpg" class="img-fluid mx-auto d-block" alt="Plot 1 Terrace"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mains -->
                            <div id="tab-2-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 2</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                          </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Salads -->
                            <div id="tab-3-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 3</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wine -->
                            <div id="tab-4-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 4</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                          </div>
                                    </div>
                                </div>
                            </div>

                                                        <!-- Wine -->
                              <div id="tab-5-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 5</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                          </div>
                                    </div>
                                </div>
                            </div>
                                                        <!-- Wine -->
                              <div id="tab-6-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 6</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <!-- Wine -->
                              <div id="tab-7-content" class="cont">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="menu-info">
                                            <h5>Plot Number 7</h5>
                                            <p>Land Area: 4 Anna <br>
                                                Buildup Area: 2490 Sq.Ft. <br>
                                                Bedroom: 3 <br>
                                                Bathroom: 4</p>
                                            <section class="news ">
                                              <div class="container">
                                              
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="owl-carousel owl-theme">
                                                              
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" title="Shops" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/qdAoX-3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" title="Delicious" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/elR7Q-4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" title="Interior" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/8oeoB-2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" title="Cuisine" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/oPkXV-5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" title="Building" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/G28bZ-1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" title="Events" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/48nMv-6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" title="Food " class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/1zEw2-8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" title="Decorations" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/2jTf3-9.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                      <div class="item">
                                                          <!-- 3 columns -->
                                                          <div class="gallery-item">
                                                              <a href="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" title="Luxury" class="img-zoom">
                                                                  <div class="gallery-box">
                                                                      <div class="gallery-img"> <img src="https://mayurstay.com/ultimatesynhawk3/images/gallery/galleryimages/hqu5B-70.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                                                  </div>
                                                              </a>
                                                          </div>
                                                      </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section> 
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="abt/Brochure -15.jpg" style="width: 100%;">
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>