<?php include('header.php'); ?>

<style>
.dropcap{
    font-size:20px
}

.center{
    text-align:center
}
</style>

       <section class="main-slider">
            <div class="flexslider">
                <ul class="slides">
                    <li class="lazy" data-src="img/kedasi/about.jpg">
                        <div class="slider-text">
                            <div class="inner">
                               <div class="container text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h1>BOOK A MEETING OR EVENT</h1>
                                        </div>
                                    </div>
                                </div> 
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
                        <h4>Meeting Rooms</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Meeting Rooms</li>
                        </ol><!--breadcrumb-->
                    </div>
                </div>
            </div>
        </section><!--.bread-wrap-->

        <div class="divide40"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="text-align: center;">
                
                    
                </div>
                <div class="col-md-6" style="text-align: center;">
                    <h2>EFFORTLESS MEETING ROOMS. <br>THAT WOW.</h2> 
                    
                </div>

                <div class="col-md-3" style="text-align: center;">
                    
                </div>

            </div>

            <div class="row">

                <div class="col-md-2" style="text-align: center;">
                
                    
                </div>
                <div class="col-md-8" style="text-align: left;">
                    
                    <p>Impress a client, collaborate with your team or host your next business event at any of our locations. With diverse spaces, The Work Lodge provides the right environment for your next brainstorming session, client presentation or team retreat, with zero effort required.</p>
                
                    <p><b>We'll provide</b> the tech, water, coffee, and inspiration. All you need to do is click the links below to reserve a space today. See, effortless!</p>

                    <p>Not ready to book just yet? <a href="mailto:ask@kedasi.co.id"><b>Email</b> ask@kedasi.co.id</a> to find out more.</p>
                </div>

                <div class="col-md-2" style="text-align: center;">
                    
                </div>

            </div>

            <div class="divide40"></div>
            
            <div class="row">
                <div class="col-md-4" style="text-align: center;">
                   <h3>TOMANG</h3>
                   <button type="submit" class="btn btn-theme-bg tomang_button">RESERVE NOW</button>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <h3>TANJUNG DUREN</h3>
                    <button type="submit" class="btn btn-theme-bg tanjung_button">RESERVE NOW</button>
                    
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <h3>THAMRIN</h3>
                    <button type="submit" class="btn btn-theme-bg thamrin_button">RESERVE NOW</button>
                    
                </div>

            </div>

            <div class="divide80"></div>

                <div class="tomang">
                    <?php include('meeting_rooms_tomang.php') ?>
                </div>

                <div class="tanjung">
                    <?php include('meeting_rooms_tanjung.php') ?>
                </div>

                <div class="thamrin">
                    <?php include('meeting_rooms_thamrin.php') ?>
                </div>


        </div>


        
<?php include('footer.php') ?>