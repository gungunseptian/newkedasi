<?php include('header.php'); ?>
<style>
    ul {
            list-style: none;
    }
    .td-right{
            text-align: right;
    }
    table .fa{
        color:#d36600;
        font-size:24px;
    }
</style>
 <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background: url(img/kedasi/rsz_1rsz_shared.jpg)">
                        <div class="slider-text">
                            <div class="inner">
                               <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Location Thamrin</h1>
<!--                                            <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Lorem ipsum dolor sit amet, consectetur.</p>
                                            <a href="#" class="btn btn-lg border-white">Learn More</a>-->
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </li>
                </ul>
            </div>
        </section>

        

        <div class="divide80"></div>
        <div class="container">

            <div class="row">  
                <div class="col-md-12" style="text-align:center">
                    <h3>KEDASI | THAMRIN</h3>
                    <h4>
Graha Niaga Thamrin Level 6 <br>Jalan KH. Mas Mansyur<br>Jakarta Pusat 10230</h4>
                </div>
            </div>

        </div>

        <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background: url(img/kedasi/about/meeting.jpg)">
                        <div class="slider-text">
                            <div class="inner">
                                 <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Premium, VIP Office Suites Available</h1>
                                            <p>For the discerning Entrepreneur that needs a 'little extra'</p>
                                            <!-- <a href="#" class="btn btn-lg border-white">Learn More</a> -->
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </li>
                    
                </ul>
            </div>
        </section>

        <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background: url(img/kedasi/rsz_1rsz_shared.jpg)">
                        <div class="slider-text">
                            <div class="inner">
                                 <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Coworking Memberships starting at $39/mo</h1>
                                           <a href="packages-tomang" class="btn btn-lg border-white">CHECK OUT OUR PRIVATE OFFICES</a> 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </li>
                    
                </ul>
            </div>
        </section>


        <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background: url(img/kedasi/rsz_1rsz_shared.jpg)">
                        <div class="slider-text">
                            <div class="inner">
                                 <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Meeting Rooms for rent by the hour or day</h1>
                                           <a href="meeting-rooms" class="btn btn-lg border-white">BOOK A MEETING ROOM</a> 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </li>
                    
                </ul>
            </div>
        </section>


        <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background: url(img/kedasi/about/meeting.jpg)">
                        <div class="slider-text">
                            <div class="inner">
                                 <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>Beautiful Event Space</h1>
                                            <a href="events-venue" class="btn btn-lg border-white">LEARN MORE ABOUT HOSTING AN EVENT</a> 
                                            </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </li>
                    
                </ul>
            </div>
        </section>

        <div class="divide40"></div>

       
        <!-- maps -->
        <div class="row">               
                <div class="col-md-12">
                    <div id="map-canvas" style="width:100%;height: 400px;"></div> 
                </div>
         </div>

     

   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyCaX83GuVBwH6xI8czhg75WfB-u0O-avLk"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(-6.1969955,106.8069608);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>KEDASI Co-Working Space</strong></p><p>Graha Niaga Thamrin Level 6 <br>Jalan KH. Mas Mansyur<br>Jakarta Pusat 10230</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
<?php include('footer.php') ?>