<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> AMOR - GIVE RATING </title>
        <link rel="stylesheet" type="text/css" href="feedback.css">
    </head>
    <body>
        <div class="container">
            <div class="star-widget">
                <div class="rate">
                    <p class="left" style="float: left;">15/10/20 </p>
                    <p class="right">B5379</p> <!-- plat nommor kurir -->
                    <hr/>
                    <header>Rate the driver?</header>
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text"></label>

                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text"></label>

                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text"></label>

                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text"></label>

                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text"></label>
                    <form action="#">
                    <div class="textarea">
                        <textarea cols="40" rows="2" placeholder="Type here.."></textarea>
                    </div>
                    <div class="btn">
                        <button class="button" type="button"><p style="text-align:center">Cancel</p></button>
                        <!-- <button type="submit"><a href="tracking.html">Cancel</a></button> -->
                        <a href="home.php" class="button button1" onClick="alert('Thank for rating us!')">Post</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
