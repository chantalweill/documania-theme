<?php 
/**
 * The Main Navigation
 **/
?>

	<div id="navheight" class="carousel-nav pull-left" style="width:160px;">

		<a href="#" data-to="0" class="alsocollapse">Home</a>
		
		<div class="accordion" id="accordion1"><!--========open accordian =========-->


  			<div class="accordion-group">
    			<div class="accordion-heading">
      				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne"  data-to="1">About</a>
    			</div>
    			<div id="collapseOne" class="accordion-body collapse">
      				<div class="accordion-inner">
        				<a href="#" data-to="2">Jeffrey Tuchman Bio</a>
						<a href="#" data-to="3">Collaborators</a>
						<a href="#" data-to="4">Press</a>
      				</div>
    			</div>
  			</div> <!--========close accordian group=========-->
  		<a href="#" data-to="5" class="alsocollapse">News</a>

		<a href="#" data-to="6" class="alsocollapse">In Production</a>

		
  			<div class="accordion-group">
    			<div class="accordion-heading">
      				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo"  data-to="7">Our Work</a>
    			</div>
    			<div id="collapseTwo" class="accordion-body collapse">
      				<div class="accordion-inner">
        				<a href="#" data-to="8">Film &amp; Television</a>
						<a href="#" data-to="9">Strategic Communications</a>
      				</div>
    			</div>
  			</div><!--========close accordian group=========-->

  			
		</div> <!--========close accordian =========-->



  		<a href="#" data-to="11" class="alsocollapse">Contact Us</a>



		<div class="btn-group lower">
    		<button class="btn">Login Here</button>
    		<button class="btn dropdown-toggle" data-toggle="dropdown">
    			<span class="caret"></span>
    		</button>
    		<ul class="dropdown-menu">
    			<!-- form in here. --> 


				    <form class="form-horizontal">
    					<div class="control-group">
    						<label class="control-label" for="inputEmail">Email</label>
    						<div class="controls">
    							<input type="text" id="inputEmail" placeholder="Email">
    						</div>
    					</div>
    					<div class="control-group">
    						<label class="control-label" for="inputPassword">Password</label>
    						<div class="controls">
    							<input type="password" id="inputPassword" placeholder="Password">
    						</div>
    					</div>
    					<div class="control-group">
    						<div class="controls redcontrols">
    							<label class="checkbox">
    								<input type="checkbox"> Remember me
    							</label>
    							<button type="submit" class="btn">Sign in</button>
    						</div>
    					</div>
    				</form>
				
				
				
    		</ul>
    	</div>


		<div id="colophon"></div>
	</div>
