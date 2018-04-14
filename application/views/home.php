<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
<style>
    .bg-img-1 {
        background-image: url(<?php echo base_url('assets/images/slider/1.jpg')?>);
    }
    .bg-img-2 {
        background-image: url(<?php echo base_url('assets/images/slider/2.jpg')?>);
    }
    .bg-img-3 {
        background-image: url(<?php echo base_url('assets/images/slider/3.jpg')?>);
    }
    .bg-img-4 {
        background-image: url(<?php echo base_url('assets/images/slider/4.jpg')?>);
    }
    .bg-img-5 {
        background-image: url(<?php echo base_url('assets/images/slider/5.jpg')?>);
    }
</style>
<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo site_url()?>">Home</a></li>
                    <li><a href="<?php echo site_url() ?>">About</a></li>
                    <li><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                    <li><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->

<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/images/logo.png')?>" alt="NgontraKuy"></a>

        <ul class="pull-right">
            <li><a href="#" data-toggle="modal" data-target="#loginpop">Login</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->
</div>

<div class="">
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                    <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ 20,000,000</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ 20,000,000</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ 20,000,000</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                    <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ 20,000,000</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-5"></div>
                    <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ 20,000,000</cite>
                    </blockquote>
                </div>
            </div>
        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</div>

<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Book your homes here</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <form action="<?php echo site_url('FindHomes')?>" method="post">
                        <input type="text" class="form-control" placeholder="Search of Properties">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 ">
                                <select class="form-control">
                                    <option>Type</option>
                                    <option value="furnished">Furnished</option>
                                    <option value="unfurnished">Unfurnished</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control">
                                    <option>Price</option>
                                    <option value="lo-hi">Lowest - Highest</option>
                                    <option value="hi-lo">Highest - Lowest</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control">
                                    <option>Property</option>
                                    <option value="cluster">Cluster</option>
                                    <option value="complex">Complex</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <input class="btn btn-success" role="button" type="submit" value="Find Now"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="<?php echo site_url('AllHomes')?>" class="pull-right viewall">View All Listing</a>
        <h2>Featured Properties</h2>
        <div id="owl-example" class="owl-carousel">
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/1.jpg')?>" class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/2.jpg')?>" class="img-responsive" alt="properties"/>
                    <div class="status new">New</div>
                </div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/3.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/4.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/1.jpg')?>" class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/2.jpg')?>" class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/3.jpg')?>" class="img-responsive" alt="properties"/>
                    <div class="status new">New</div>
                </div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/4.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/1.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/2.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="<?php echo base_url('assets/images/properties/3.jpg')?>" class="img-responsive" alt="properties"/></div>
                <h4><a href="property-detail.php">Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="property-detail.php">View Details</a>
            </div>
        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <hr style="border: 0.150px solid darkgray;"/>
            <div class="col-md-offset-1 col-md-10 recent-view text-center">
                <h3>About Us</h3>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
            </div>
        </div>
    </div>
</div>

<?php
#include footer file
$this->view('template/footer');
?>