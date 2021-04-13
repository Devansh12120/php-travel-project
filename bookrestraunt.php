<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
</head>

<style>
    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 600;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/raleway/v18/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    body {
        background-image: linear-gradient(to left,#f8d302,#ffe75c);
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
        color: #fff;
        letter-spacing: 1px;
    
    }

    .container {
        background-color: #fafafa;
        margin: 200px;
        box-shadow: 10px 15px 20px rgba(0, 0, 0, .1);
        display: grid;
        grid-template-columns: 40% 60%;
    }

    .container-time {
        background-color: rgba(0, 0, 0, .95);
        padding: 50px;
        outline: 3px dashed #cccccc;
        outline-offset: -30px;
        text-align: center;
    }
    .heading {
        font-size: 35px;
        text-transform: uppercase;
    }

    .heading-days {
        color:#998100;
        font-size: 30px;

    }

    .heading-phone {
        font-size: 20px;
    }
    .container-form {
        padding: 20px 0;
        margin: 0 auto;
        color: #000;
    }
    form {
        display: grid;
        grid-row-gap: 20px;
    }
    form p {
        font-weight: 600;
    }
    .form-field {
        display: flex;
        justify-content: space-between;
    }

    input,select {
        pad: 10px 15px;
    }

    .btn {
        background-color: rgba(0, 0, 0, .95);
        color: #fff;
        padding: 10px 20px;
        border: none;
        font-size: 18px;
        border-radius: 100px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        -ms-border-radius: 100px;
        -o-border-radius: 100px;
        box-shadow: 7px 10px 12px rgba(0, 0, 0, .1);
        cursor: pointer;
        transition: all .3s;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        -ms-transition: all .3s;
        -o-transition: all .3s;
    }

    .btn:hover {
        transform: scale(1.03);
        -webkit-transform: scale(1.03);
        -moz-transform: scale(1.03);
        -ms-transform: scale(1.03);
        -o-transform: scale(1.03);
        box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
    }
    .container1{
        margin-left:100px;
        margin-right:100px;
    }
    .text{
        text-align:center;
        color:#fafafa;;
    }
.ms-slides__inner {
    display: flex;
    flex-direction: row;
    position: absolute;
    transform: translate3d(0, 0, 0);
    transition: 1000ms;
}

.ms-slides {
    overflow: hidden;
    position: relative;
}

.ms-slides__next-button, .ms-slides__prev-button {
    display: block;
    width: calc(40px - 8px);
    height: calc(40px - 8px);
    border-radius: 50%;;
    background-color:rgba(255,255,255,0.5);
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    display:flex;
    justify-content: center;
    align-items: center;
    border: 4px solid transparent;
}

.ms-slides__next-button:hover, 
.ms-slides__prev-button:hover {
    border: 4px solid #fff;
}

.ms-slides__next-button {
    right: calc(1em - 4px);
}

.ms-slides__prev-button {
    left: calc(1em - 4px);
}

.ms-slides__next-button::after {
    content: '';
    display: block;
    width: 10px;
    height: 10px;
    border-top: 4px solid #fff;
    border-right: 4px solid #fff;
    transform: translate(-2px, 0) rotate(45deg);
}

.ms-slides__prev-button::after {
    content: '';
    display: block;
    width: 10px;
    height: 10px;
    border-bottom: 4px solid #fff;
    border-left: 4px solid #fff;
    transform: translate(2px, 0) rotate(45deg);
}

.ms-slides__indicators {
    list-style: none;
    position: absolute;
    display: flex;
    margin: 0;
    padding: 0;
    left: 50%;
    bottom: 1em;
    transform: translate(-50%, 0);
}

.ms-slides__indicators > li {
    width: 16px;
    height: 16px;
    margin: 4px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.5);
}


            /* CSS Styles */

            body {
              font-family: Arial, Helvetica, sans-serif;
            }

            .container {
                width: 1200px;
                margin: auto;
            }

            /* Developer Styles */
            #slides {
                width: 1200px;
                height: 400px;
                margin: auto;
            }

            .small-slides {
                width: 300px;
                height: 169px;
                margin: auto;
            }

            .card-row {
                display: flex;
                justify-content: space-between;
            }

            .card-row > div {
                margin: 1em;
                flex: 1;
            }
</style>
<script>
function hbook() {
    var name = document.booking.name;
    var email = document.booking.email;
    var datebooking = document.booking.datebooking;
    var timebooking = document.booking.timebooking;
    if (name.value=="") {
        alert("name is required");
        name.style.border = "3px solid red";
        return false;
    }
    if (email.value=="") {
        alert("email is required");
        email.style.border = "3px solid red";
        return false;
    }
    if (datebooking.value=="") {
        alert("Date of booking is required");
        datebooking.style.border = "3px solid red";
        return false;
    }
    if (timebooking.value=="") {
        alert("Time of booking is required");
        timebooking.style.border = "3px solid red";
        return false;
    }
     else {
        alert("Details submitted successfully");
        return true;
    }
}

</script>
<body>
	<div class="container">
		<div class="container-time">
				<h2 class="heading">Time Open</h2>
				<h3 class="heading-days">Monday-Friday</h3>
				<p>7am - 11am (breakfast)</p>
				<p>11am - 10pm (lunch/dinner)</p>
				<h3 class="heading-days">Saturday and sunday</h3>
				<p>9am - 1am (breakfast)</p>
				<p>1am - 10pm (lunch/dinner)</p>
				<hr>
				<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>
		</div>

		<div class="container-form">
				<form action="#" name="booking" onsubmit="return hbook()" method="POST">
					<h2 class="heading heading-yellow">Reservation Online</h2>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" id="name" placeholder="Your Name">
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" id="email" placeholder="Your email">
					</div>
					<div class="form-field">
						<p>Date</p>
						<input type="date" id="datebooking">
					</div>
					<div class="form-field">
						<p>Time</p>
						<input type="time" id="timebooking">
					</div>
					<div class="form-field">
						<p>How many people?</p>
						<select name="select" id="people">
							<option value="1">1 person</option>
							<option value="2">2 persons</option>
							<option value="3">3 persosn</option>
							<option value="4">4 persons</option>
							<option value="5">5 persons</option>
							<option value="5+">5+ persons</option>
						</select>
					</div>

					<button class="btn">Submit</button>
				</form>
		</div>
	</div>
    <div class="container1">
        <h1>MS Slides Demo</h1>
        
        
        <!-- Big Slideshow -->
        <!-- delay 8 secs transition time 0.4 secs-->
        <div id="slides" class="ms-slides" data-delay="8000" data-transition="400">
          <!-- Define the Slide Show Elements -->
          <div class="ms-slides__inner">
            <?php 
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "data";
                // Create connection
                $connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
                }
                else{
                $query = "SELECT * FROM indian";
                $result = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_array($result)){
                    ?>
                        
                                    <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="">' ?>
                    <?php
                }
                }
                
                ?>  
            
          </div>

          <!-- Show Indicators -->
          <ol class="ms-slides__indicators">
            <!-- slide indicators -->
          </ol>

          <!-- Show Next and Previous Buttons -->
          <a href="#" class="ms-slides__next-button"></a>
          <a href="#" class="ms-slides__prev-button"></a>
        </div>
        <!-- Notes -->
        <div>
          <p><strong>Quizines</strong> A large variety of quizines especially for our loved ones to support satisfaction and to get maximum number of tastes under one roof.</p>
        </div>
        <!-- Big Slideshow -->

        <!-- Row of Small Slideshows -->
        <div class="card-row">

          <div>
            <!-- Slides with no options -->
            <!-- delay 4 secs transition time 2 secs-->
            <div id="slides-2" class="ms-slides small-slides" data-delay="4000" data-transition="2000">
              <div class="ms-slides__inner">
                <img src="images/hellebore-pollen-300-169.jpg" width="300" height="169" alt="hellbore">
                <img src="images/li-pollen-300-169.jpg" width="300" height="169" alt="li pollen">
                <img src="images/pollen-300-169.jpg" width="300" height="169" alt="pollen">
                <img src="images/spores-300-169.jpg" width="300" height="169" alt="spores">
              </div>
            </div>
            <!-- Notes -->
            <div>
              <p><strong>Starters</strong> is considered to be the perfect choice to start with.</p>
            </div>
          </div>

          <div>
            <!-- Slides with indicators -->
            <!-- delay 5 secs transition time 0.8 secs -->
            <div id="slides-3" class="ms-slides small-slides" data-delay="5000" data-transition="800">
              <div class="ms-slides__inner">
                <img src="images/Cactus_flower_pollen-300-169.jpg" width="300" height="169" alt="hellbore">
                <img src="images/toxic-mold-spore-300-169.jpg" width="300" height="169" alt="li pollen">
                <img src="images/yellow-polllen-300-169.jpg" width="300" height="169" alt="pollen">
                <img src="images/zsa-300-169.jpg" width="300" height="169" alt="zsa">
              </div>
              <!-- Show Indicators -->
              <ol class="ms-slides__indicators">
                <!-- slide indicators -->
              </ol>
            </div>
            <!-- Notes -->
            <div>
              <p><strong>Main-course </strong>For all taste and varieties loved by all.</p>
            </div>
          </div>
    
          <div>
            <!-- Slides with Buttons -->
            <!-- Delay time 0 slides only change when the buttons are clickes transition 0.2 secs -->
            <div id="slides-4" class="ms-slides small-slides" data-delay="0" data-transition="2000">
                <div class="ms-slides__inner">
                    <img src="images/p1-300-169.jpg" width="300" height="169" alt="hellbore">
                    <img src="images/p2-300-169.jpg" width="300" height="169" alt="li pollen">
                    <img src="images/p3-300-169.jpg" width="300" height="169" alt="pollen">
                    <img src="images/p4-300-169.jpg" width="300" height="169" alt="spores">
                </div>

                <!-- Show Next and Previous Buttons -->
                <a href="#" class="ms-slides__next-button"></a>
                <a href="#" class="ms-slides__prev-button"></a>
            </div>
            <div>
              <p><strong>Dessert </strong>Every meal ends up with Yumm sweet.</p>
            </div>
          </div>
        </div>
    </div> 
	
</body>
<script>
    
(function() {

const MS_SLIDES = '.ms-slides'
const MS_SLIDES_INNER = '.ms-slides__inner'
const MS_SLIDES_NEXT_BUTTON = '.ms-slides__next-button'
const MS_SLIDES_PREV_BUTTON = '.ms-slides__prev-button'
const MS_SLIDES_INDICATORS = '.ms-slides__indicators'
const BUTTON_COLOR = 'rgba(255,255,255,0.5)'
const BUTTON_COLOR_SELECTED = 'rgba(255,255,255,1.0)'

// ---------------------------------------------------------
// Make Slides 

function makeSlideshow(slides) {
    // const slides = document.getElementById(slidesId)
    const slidesInner = slides.querySelector(MS_SLIDES_INNER)
    const images = slidesInner.querySelectorAll('*')

    // ---------------------------------
    // Setup buttons 

    const nextButton = slides.querySelector(MS_SLIDES_NEXT_BUTTON)
    const prevButton = slides.querySelector(MS_SLIDES_PREV_BUTTON)

    console.log(slides)

    if (nextButton !== null) {
        nextButton.addEventListener('click', function(e) {
            e.preventDefault()
            // clear the interval
            // add a new interval
            nextSlide()
        })
    }

    if (prevButton !== null) {
        prevButton.addEventListener('click', function(e) {
            e.preventDefault()

            prevSlide()
        })
    }

    // ---------------------
    // Setup indicators 

    const indicatorContainer = slides.querySelector(MS_SLIDES_INDICATORS)
    const indicators = []
    if (indicatorContainer !== null) {
        for (let i = 0; i < images.length; i += 1) {
            const li = document.createElement('li') // <li>
            indicatorContainer.appendChild(li)
            indicators.push(li)
        }
        indicators[0].style.backgroundColor = BUTTON_COLOR_SELECTED
    }

    // ---------------------
    // Setup timer 

    let delay = parseInt(slides.dataset.delay)
    let transition = parseInt(slides.dataset.transition)

    if (slides.dataset.delay === null) {
      delay = 3000
    }

    if (slides.dataset.transition === null) {
      transition = 400
    }

    slidesInner.style.transition = `${transition}ms`

    const slidesWidth = slides.clientWidth
    
    let index = 0

    if (!isNaN(delay) && delay > 0) {
      setInterval(nextSlide, delay)
    } 
      
    // clearInterval(interval)

    // ------------------------

    function nextSlide() {
        index += 1
        if (index === images.length) {
            index = 0
        }
        showSlide()
    }

    function prevSlide() {
        index -= 1
        if (index < 0) {
            index = images.length - 1
        }
        showSlide()
    }

    function showSlide() {
        // CSS - transform : translate3d(0, 0, 0);
        slidesInner.style.transform = `translate3d(${index * -slidesWidth}px, 0, 0)`
        // console.log(index * -slidesWidth)
        indicators.forEach(function(el, i) {
            if (i === index) {
                el.style.backgroundColor = BUTTON_COLOR_SELECTED
            } else {
                el.style.backgroundColor = BUTTON_COLOR
            }
        })
    }

} 

const slideshows = document.querySelectorAll(MS_SLIDES)

for (let i = 0; i < slideshows.length; i += 1) {
    makeSlideshow(slideshows[i])
}

})() // IIFE




</script>
</html>