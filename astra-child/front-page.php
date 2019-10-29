<?php
  /**
  * Template Name: Arla
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'style.css'; ?></style>
    <script><?php include 'js.js'; ?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body onload="load()">
    <nav>
    	<div class="progressbar"></div>
    	<div id="progressbaryellow"></div>
    	<div class="progressnumbers">
    		<div class="progressnumber">
    			0%
    		</div>
    		<div class="progressnumber">
    			25%
    		</div>
    		<div class="progressnumber">
    			50%
    		</div>
    		<div class="progressnumber">
    			75%
    		</div>
    		<div class="progressnumber">
    			100%
    		</div>
    	</div>
    </nav>
<main>
    <section class="questionsection" id="cows">
        <h2 onclick="cheat()">QUESTIONS > Cows</h2>
        <p class="description">Questions about your cows</p>
        <h5><u>Customer Support</u></h5>
        <div class="questions">
            <div class="question" id="question">
                <h3>QUESTION #1</h3>
                <p>How many cows are there in the herd?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done">
                <button class="edit" id="edit" onclick="show(); progressminus();">
                	Click to edit
                </button>
                <div id="input">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question" id="question">
                <h3>QUESTION #2</h3>
                <p>How many sick cows do you have?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done2">
                <button class="edit" id="edit2" onclick="show2(); progressminus();">
                	Click to edit
                </button>
                <div id="input2">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide2(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #3</h3>
                <p>How many cows died in the last quarter of a year?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done3">
                <button class="edit" id="edit3" onclick="show3(); progressminus();">
                	Click to edit
                </button>
                <div id="input3">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide3(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #4</h3>
                <p>How many litres of milk did one cow produce?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done4">
                <button class="edit" id="edit4" onclick="show4(); progressminus();">
                	Click to edit
                </button>
                <div id="input4">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide4(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #5</h3>
                <p>How much time on average your cows spend outside?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done5">
                <button class="edit" id="edit5" onclick="show5(); progressminus();">
                	Click to edit
                </button>
                <div id="input5">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide5(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
        </div>
        <br>
        <br>
        <button class="print">
        	PRINT QUESTIONS
        </button>
    </section> 
    <section class="questionsection" id="energy">
        <h2 onclick="cheat()">QUESTIONS > Energy</h2>
        <p class="description">Questions about your cows</p>
        <h5><u>Customer Support</u></h5>
        <div class="questions">
            <div class="question">
                <h3>QUESTION #1</h3>
                <p>Do you get a grand from the government for energy supply?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done6">
                <button class="edit" id="edit6" onclick="show6(); progressminus();">
                	Click to edit
                </button>
                <div id="input6">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide6(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #2</h3>
                <p>How many kWh of electricity did you use in the last year?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done7">
                <button class="edit" id="edit7" onclick="show7(); progressminus();">
                	Click to edit
                </button>
                <div id="input7">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide7(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #3</h3>
                <p>How much CO2 do you produce per one kWh?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done8">
                <button class="edit" id="edit8" onclick="show8(); progressminus();">
                	Click to edit
                </button>
                <div id="input8">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide8(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #4</h3>
                <p>Do you use solar power energy for your farm?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done9">
                <button class="edit" id="edit9" onclick="show9(); progressminus();">
                	Click to edit
                </button>
                <div id="input9">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide9(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #5</h3>
                <p>Do you use wind power energy for your farm?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done10">
                <button class="edit" id="edit10" onclick="show10(); progressminus();">
                	Click to edit
                </button>
                <div id="input10">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide10(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
        </div>
        <br>
        <br>
        <button class="print">
        	PRINT QUESTIONS
        </button>
    </section> 
    <section class="questionsection" id="food">
        <h2 onclick="cheat()">QUESTIONS > Food</h2>
        <p class="description">Questions about your cows</p>
        <h5><u>Customer Support</u></h5>
        <div class="questions">
            <div class="question" id="question1c">
                <h3>QUESTION #1</h3>
                <p>How much food have your cows consumed?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done11">
                <button class="edit" id="edit11" onclick="show11(); progressminus();">
                	Click to edit
                </button>
                <div id="input11">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide11(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question" id="question1c">
                <h3>QUESTION #2</h3>
                <p>How much feed have you produced yourself?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done12">
                <button class="edit" id="edit12" onclick="show12(); progressminus();">
                	Click to edit
                </button>
                <div id="input12">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide12(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #3</h3>
                <p>How much hay have you bought from other farms?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done13">
                <button class="edit" id="edit13" onclick="show13(); progressminus();">
                	Click to edit
                </button>
                <div id="input13">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide13(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #4</h3>
                <p>How much of special feed you give your cows in winter time?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done14">
                <button class="edit" id="edit14" onclick="show14(); progressminus();">
                	Click to edit
                </button>
                <div id="input14">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide14(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #5</h3>
                <p>How much of vitamins do you put into the feed?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done15">
                <button class="edit" id="edit15" onclick="show15(); progressminus();">
                	Click to edit
                </button>
                <div id="input15">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide15(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
        </div>
        <br>
        <br>
        <button class="print">
        	PRINT QUESTIONS
        </button>
    </section> 
    <section class="questionsection" id="fuel">
        <h2 onclick="cheat()">QUESTIONS > Fuel</h2>
        <p class="description">Questions about your cows</p>
        <h5><u>Customer Support</u></h5>
        <div class="questions">
            <div class="question" id="question1c">
                <h3>QUESTION #1</h3>
                <p>How many litres of diesel did you use the last year?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done16">
                <button class="edit" id="edit16" onclick="show16(); progressminus();">
                	Click to edit
                </button>
                <div id="input16">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide16(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question" id="question1c">
                <h3>QUESTION #2</h3>
                <p>How many litres of diesel does your farm use on average?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done17">
                <button class="edit" id="edit17" onclick="show17(); progressminus();">
                	Click to edit
                </button>
                <div id="input17">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide17(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #3</h3>
                <p>Do you buy fuel from local stations?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done18">
                <button class="edit" id="edit18" onclick="show18(); progressminus();">
                	Click to edit
                </button>
                <div id="input18">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide18(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #4</h3>
                <p>Are you using the “Farmer’s support” programme?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done19">
                <button class="edit" id="edit19" onclick="show19(); progressminus();">
                	Click to edit
                </button>
                <div id="input19">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide19(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
            <div class="question">
                <h3>QUESTION #5</h3>
                <p>How much fuel can you fit in your storage on the farm?</p>
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/done.png" class="done" id="done20">
                <button class="edit" id="edit20" onclick="show20(); progressminus();">
                	Click to edit
                </button>
                <div id="input20">
                <input placeholder="152" type="number">
                <br>
                <button class="save" onclick="hide20(); progress();" id="save">
                    SAVE
                </button>
                </div>
                <hr>
            </div>
        </div>
        <br>
        <br>
        <button class="print">
        	PRINT QUESTIONS
        </button>
    </section>  
    <section class="categorysection">
        <h2>CATEGORIES</h2>
        <div class="categories">
            <div class="category" onclick="cows()">
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/cows_press.png" class="icons" id="cowcatimg">    
            </div>
            <div class="category" onclick="energy()">
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/energy_free.png" class="icons" id="energycatimg">   
            </div>
            <div class="category" onclick="food()">
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/food_free.png" class="icons" id="foodcatimg"> 
            </div>
            <div class="category" onclick="fuel()">
                <img src="https://arla.austeja.dk/wp-content/uploads/2019/10/fuel_free.png" class="icons" id="fuelcatimg"> 
            </div>
        </div>
        <a href="https://arla.austeja.dk/my-farm/">
			<button id="submit" disabled>
				SUBMIT
			</button>
        </a>
    </section>  
</main>
</body>
</html>
