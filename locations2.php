<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/dest.png" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Tanguar Haor</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/dest2.png" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE EVENT PLANNING EXPERIENCE</h5><!--content title-->
                                                <p>
                                                Sitting amongst historic sandstone, the Urban Xchange area is the epitome of elegance for a sophisticated celebration.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an extensive
                                                decoration item list available, AV capabilities for speeches and formalities and
                                                an adjoining lounge for pre or post event entertaining, the area
                                                 is a unique, romantic and stylish choice.
                                                </p>

                                                <p>
                                                Accommodating 65 guests for  conferences and up to 120 for 
                                                parties, this private, heritage space brings character and
                                                charm to any event, with the attached lounge and bar ideal for pre- or
                                                post-event .
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Tanguar Haor</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                           SUNAMGANJ
                            </p>
                            <p class="definition"><!--content body-->
                            Sitting amongst historic sandstone, the area is the epitome of elegance for a sophisticated celebration. you can choose from our award winning Saké Restaurant
                           an elegant menu from The photoshoot arrangement
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/dest3.png" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">BAU WED POINT</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/ananasbar.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>A CORNER OF MYMENSINGH</h5><!--content title-->
                                                <p>
                                                Champagne imbibing, glamorous, smiling 
                                                is the destination ground.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Awarded a Chef’s Hat in the 2014 Sydney Morning Herald Good Food Guide Awards,
                                                we serve up a contemporary twist on the best classic French food for lunch,
                                                dinner and late-night suppers. With a produce-centric menu that takes global
                                                cues and delivers them at affordable prices, you’re in for a feast for your senses.
                                                </p>

                                                <p>
                                                Our dedicated Seafood Bar is a venue highlight, treating you to shucked-to-order oysters
                                                and a daily plateau fruits de mer. Our full brasserie menu is also complemented by
                                                a selection of bar treats, available until 3am. So if you’re a theatre goer or night-dweller 
                                                looking for a late night dining experience, Ananas Bar & Brasserie has you covered.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">BAU DEST POINT</h1>
                            <p class="location">MYMENSINGH</p><!--location secondary content-->
                            <p class="definition">
                            Ananas Bar & Brasserie is the Sydney Sophisticate’s adult playground.
                            This breathtaking venue bring shimmering French glamour to The Rocks.
                            Enjoy champagne and oysters after work and cocktails into the early hours, or indulge in
                            a magnificent French meal in the Brasserie.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/dest4.png" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">THE RAJ BARI</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/argyle.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>FIVE BARS OVER TWO LEVELS, AT ONE VENUE IN THE ROCKS</h5><!--content title-->
                                                <p>
                                                There’s no question that The Rocks is home to some of Sydney’s most intriguing historical stories. And
                                                our landmark venue, The Argyle, has a unique, rich history all of its own.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                If your event is shaping up to be high in numbers, then Gallery’s high-end classic style has room to spare.
                                                Combined with the Reibey Room and Belvedere Bar, there’s space for up to 500 guests – perfect for thriving
                                                cocktail parties, networking or post-conference events.
                                                </p>

                                                <p>
                                                The venue can also be hired for social or corporate functions for groups up to 1800. Event organisers
                                                have the choice between the sandstone courtyard, the Main Bar, Gallery, Reibey Room, Belvedere Bar
                                                or the entire venue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">SHASHI LAUDGE</h1>
                            <p class="location">MYMENSINGH</p>
                            <p class="definition">There’s no question that The Rocks is home to some of Sydney’s most intriguing historical stories.
                                And our landmark venue, The Argyle, has a unique, rich history all of its own. The sandstone walls that house
                                The Argyle had seen some interesting sights well before we all hit the dance floor.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Haluaghat,Mymensingh</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/munich.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE BEST OF BAVARIA AT MELBOURNE’S SOUTH WHARF</h5>
                                                <p>
                                                our newest community space dedicated to bringing people together through creativity and celebration. Inspired by the vibrant energy of a traditional Bavarian bier haus, Dia Center Hall offers a unique party experience where you can revel in the festive atmosphere all year round.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Introducing Dia Center Hall, our newest community hub designed to celebrate and unite the people of Haluaghat. Inspired by the vibrant atmosphere of a traditional Bavarian bier haus, Dia Center Hall offers a unique space where you can drink, dine, and party as if every day were a festival. Our state-of-the-art venue seats over 900 guests and is perfectly situated in the heart of Haluaghat.
                                                </p>
                                                
                                                <p>
                                                we specialize in organizing themed parties that feature beautifully crafted decorations and products, showcasing the creativity and cultural richness of our community. Each event is a colorful, joyful celebration that brings people together in a truly memorable way.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">DIA CENTER HALL</h1>
                            <p class="location">HALUAGHAT</p>
                            <p class="definition">Our state-of-the-art venue comfortably accommodates over 900 guests and is conveniently situated in the heart of Haluaghat, providing easy access for locals and visitors alike. Overlooking the scenic beauty of our town, Dia Center Hall is the perfect place for any event.

At Dia Center Hall, we specialize in organizing themed parties that showcase the rich cultural heritage of our community through beautifully crafted decorations and products. Every event is designed to immerse you in a world of color, creativity, and joy, making each gathering unforgettable.

Join us at Dia Center Hall, where every celebration is a masterpiece, and the spirit of community thrives in every detail.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
