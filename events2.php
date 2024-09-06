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
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">FEB</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">21</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/feb.png" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title"> International Mother Language Day</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                           BAU ZERO POINT
                            </p>
                            <p class="definition"><!--event content definition-->
                            Celebrate the diversity of languages with our craft-made language-themed banners and flags, showcasing the beauty of linguistic heritage. Craft intricate bookmarks adorned with quotes in various languages to promote reading and cultural exchange. Decorate venues with handmade calligraphy representing different scripts, fostering a sense of global unity through artistry. Organize craft workshops where participants create multilingual greeting cards, spreading messages of peace and understanding. 
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">MARCH</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">26</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/march.png" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Independence Day</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                           SASHI LAUDGE
                            </p>
                            <p class="definition"><!--event content definition-->
                            Create intricate dioramas portraying pivotal moments from the independence movement, educating and inspiring future generations. Craft patriotic badges and flags using sustainable materials, promoting national pride and unity. Organize art competitions where participants depict scenes of bravery and sacrifice through various craft mediums, fostering a deeper appreciation for history. 
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">APRIL</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">14</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/april.png" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Pohela Boishakh</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                           RAJ BARI,MYMENSINGH
                            </p>
                            <p class="definition"><!--event content definition-->
                            Embrace the Bengali New Year with vibrant craft decorations, such as handmade paper flowers and traditional alpana patterns, adorning streets and homes. Offer intricately designed clay pots and earthenware as gifts, symbolizing prosperity and renewal. 
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
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

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">December</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">16</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/dec.png" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Victory Day</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                           BAU DEST POINT
                            </p>
                            <p class="definition"><!--event content definition-->
                            Commemorate the victory of Bangladesh with craft-made tributes, including sculptures of freedom fighters and iconic historical figures, paying homage to their sacrifices. Craft personalized medals and certificates for veterans and their families, recognizing their contributions to the nation.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view details button (no function implemented)-->
                                View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                       </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
