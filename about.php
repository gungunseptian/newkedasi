<?php include('header.php'); ?>
<style>
.dropcap{
    font-size:20px
}
</style>
<?php

$data = "[
    {
        'id':1,
        'title':'SHARED OFFICE',    
        'short_description':'Our shared office features a unique design and layout created to give our members a sense of belonging with an open working space.',
        'description':'Our shared office features a unique design and layout created to give our members a sense of belonging with an open working space. We believe on the modern way of working, share a large and varied space with other co-workers will cultivate collaborative atmosphere which increase productivity and creativity'
        'front_img':'img/kedasi/about/shared.jpg'
    },
    {
        'id':2,
        'title':'PRIVATE OFFICE',    
        'short_description':'Our boutique spaces offer comfortable private offices which range in accommodation from teams of 4 person up to 11 people.',
        'description':'Our boutique spaces offer comfortable private offices which range in accommodation from teams of 4 person up to 11 people.  All office memberships come with a plethora of amenities including the benefit of working alongside some of West Jakarta's most unique brands and startups.'
        'front_img':'img/kedasi/about/private.jpg'
    },
]";

?>

       <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li class="lazy" data-src="img/kedasi/about.jpg">
                    <!--<li style="background: url(img/kedasi/about.jpg);background-size:1400px;"> -->
                        <div class="slider-text">
                            <div class="inner">
                                <!-- <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Welcome to narani</h1>
                                            <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Lorem ipsum dolor sit amet, consectetur.</p>
                                            <a href="#" class="btn btn-lg border-white">Learn More</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div> 
                    </li>
                </ul>
            </div>
        </section>

        <section class="bread-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>About us</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>about</li>
                        </ol><!--breadcrumb-->
                    </div>
                </div>
            </div>
        </section><!--.bread-wrap-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">               
                <div class="col-md-6">
                    <h3 class="heading">SHARED OFFICE</h3> 
                    <p class="dropcap">
                        Our shared office features a unique design and layout created to give our members a sense of belonging with an open working space. 

                    </p>
                </div>
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/rsz_img_9346.jpg" style="width:600px"></iframe>
                        </div> 
                </div>
            </div>
            <div class="divide40"></div>
            
            <div class="row">               
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/private.jpg" style="width:500px"></iframe>
                        </div> 
                </div>
                <div class="col-md-6">
                    <h3 class="heading">PRIVATE OFFICE</h3> 
                    <p class="dropcap">
                       Our boutique spaces offer comfortable private offices which range in accommodation from teams of 4 person up to 11 people. 
                    </p>
                    
                </div>
            </div>
            <div class="divide40"></div>

             <div class="row">               
                <div class="col-md-6">
                    <h3 class="heading">MEETING ROOMS</h3> 
                    <p class="dropcap">
                       Our meeting rooms catered up to 8 persons, providing an alternative, funky and relaxing option for brainstorm and team meeting sessions. 
                    </p>
                </div>
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/rsz_img_9369.jpg" style="width:600px"></iframe>
                        </div> 
                </div>
            </div>
            <div class="divide40"></div>

            <div class="row">               
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/outdoor.jpg" style="width:500px"></iframe>
                        </div> 
                </div>
                <div class="col-md-6">
                    <h3 class="heading">Event Space</h3> 
                    <p class="dropcap">
                    Lorem ipsum doler si amet lorem ipsum Lorem ipsum doler si amet lorem ipsum
                    Lorem ipsum doler si amet lorem ipsum Lorem ipsum doler si amet lorem ipsum
                    </p>
                    
                </div>
            </div>
            <div class="divide40"></div>
               
            <div class="row">               
                <div class="col-md-6">
                    <h3 class="heading">Auditorium</h3> 
                    <p class="dropcap">
                    Lorem ipsum doler si amet lorem ipsum Lorem ipsum doler si amet lorem ipsum
                    Lorem ipsum doler si amet lorem ipsum Lorem ipsum doler si amet lorem ipsum
                    </p>
                </div>
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/games.jpg" style="width:600px"></iframe>
                        </div> 
                </div>
            </div>
            <div class="divide40"></div>

            <div class="row">               
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/outdoor.jpg" style="width:500px"></iframe>
                        </div> 
                </div>
                <div class="col-md-6">
                    <h3 class="heading">OUTDOOR LOUNGE</h3> 
                    <p class="dropcap">
                    Our outdoor lounge acts as a natural mixing space. Eat, chat, network in cool and relaxed surroundings. Smoking is allowed only at this area of the building.
                    </p>
                    
                </div>
            </div>
            <div class="divide40"></div>
               
            <div class="row">               
                <div class="col-md-6">
                    <h3 class="heading">GAMES ROOM</h3> 
                    <p class="dropcap">
                    Getting in a quick round of Winning Eleven, or simply taking a power nap will immensely boost your productivity and let off some steam. 
                    </p>
                </div>
                <div class="col-md-6">
                   <div class="embed-responsive embed-responsive-16by9">
                            <img class="lazy" data-src="img/kedasi/about/games.jpg" style="width:600px"></iframe>
                        </div> 
                </div>
            </div>
            <div class="divide40"></div>
 
        </div><!--about container-->
       
        <div class="divide80"></div>
         
        
<?php include('footer.php') ?>