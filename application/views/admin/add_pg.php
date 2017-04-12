<style type="text/css">

.white
{
color: white;
}
button.accordion {
background-color: #eee;
color: #444;
cursor: pointer;
padding: 18px;
width: 100%;
border: none;
text-align: left;
outline: none;
font-size: 15px;
transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
background-color: #ddd;
}

button.accordion:after {
content: '\02795';
font-size: 13px;
color: #777;
float: right;
margin-left: 5px;
}

button.accordion.active:after {
content: "\2796";
}

div.panel {
padding: 0 18px;
background-color: white;
max-height: 0;
overflow: hidden;
transition: 0.6s ease-in-out;
opacity: 0;
}

div.panel.show {
opacity: 1;
max-height: 500px;  
}
</style>
<div id="body" class="container-fluid"><div class="col-sm-12">
	<h2 class="text-primary col-sm-offset-5">Add PG</h2><br/>
	<form action="admin/new_pg_data" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" id="pg_form">
		<button type="button" class="accordion">Basic Info</button>
		<div class="panel">
		<p>
	        <div class="form-group">
			    <label class="control-label col-sm-2" for="PG Name">PG Name:</label>
	            <div class="col-sm-4">          
		            <input type="text" id="temp" class="form-control" name="PG Name" placeholder="Enter PG Name">
		        </div>  
			</div>	

			<div class="form-group">
				<label class="control-label col-sm-2" for="Address">Address:</label>
		        <div class="col-sm-4">          
		            <input type="text" id="Address" class="form-control" name="address" placeholder="Enter Full Address here!!!">
		        </div>  
			</div>	


	        <div class="form-group">
	            <label class="control-label col-sm-2" for="email">Contact No:</label>
	            <div class="col-sm-4">          
	                <input type="text" id="contact" class="form-control" name="contact" placeholder="Enter Contact Number">
	            </div>
	            
	        </div>	
	        <div class="form-group">
				        <label class="control-label col-sm-2" for="Gender">Gender:</label>
			    	    <div class="col-sm-4">
			    					<div class="radio">
							<label><input type="radio" name="gender" value="Male">Male</label>
						</div>
									<div class="radio">
							<label><input type="radio" name="gender" value="Female">Female</label>
						</div>
					     
		        </div>
		        
	    	</div>
	
		  	<div class="form-group">
					        <label class="control-label col-sm-2" for="area">Area:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="Area" class="form-control" name="area" placeholder="Enter Area">
		        </div>
		        </div>
		        <div class="form-group">
					<label class="control-label col-sm-2" for="latitude">Latitude:</label>
			        <div class="col-sm-4">          
		            	<input type="text" id="latitude" class="form-control" name="latitude" placeholder="Enter Latitude">
		        	</div>
		        </div>

		        <div class="form-group">
					<label class="control-label col-sm-2" for="longitude">Longitude:</label>
			        <div class="col-sm-4">          
		            	<input type="text" id="longitude" class="form-control" name="longitude" placeholder="Enter Longitude">
		        	</div>
		        </div>
    	</p>
		    </div>
		<button type="button" class="accordion">Rules & Regulations</button>
		<div class="panel">
		  	<p>	  
				<div class="form-group">
			    	    <div class="col-sm-4">
			    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="Smoking is not allowed in paying guest.">Smoking is not allowed in paying guest.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="Alcohol or any other toxic substance not allowed in paying guest.">Alcohol or any other toxic substance not allowed in paying guest.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="Non-veg food is not allowed in paying guest.">Non-veg food is not allowed in paying guest.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="1 month notice period.">1 month notice period.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="Ac electricity bill different.">Ac electricity bill different.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="No boys are allowed in paying guest.">No boys are allowed in paying guest.</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="rules[]" value="No girls are allowed in paying guest">No girls are allowed in paying guest</label>
						</div>
					     
		        </div>
		        
		    	</div>
			</p>
		</div>
		<button type="button" class="accordion">Amenities</button>
		<div class="panel">
			<p>	  
				<div class="form-group">
					        
			    	    <div class="col-sm-4">
			    		    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="1">24 Hours Security</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="2">Air Conditioner</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="3">Bed & Pillow</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="4">Breakfast</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="5">CCTV</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="6">Common Area</label>
						</div>
									<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="7">Cooking</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="8">CupBoard</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="9">Dinner</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="10">Geyser</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="11">Laundry</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="12">Lift</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="13">Lunch</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="14">Medical Treatment</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="15">Parking</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="16">Penthouse</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="17">R/O</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="18">Reading Space</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="19">Refigerator</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="20">TV</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="21">Tea</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="22">Terrace Garden</label>
						</div>
						    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="23">Wifi</label>
						</div>
					 </div>    
		        </div>
		    </p>
		        
		</div>
			<button type="button" class="accordion">Room Sharing & Price info</button>
				<div class="panel">
			<p>
			<div class="form-group">
					        <label class="control-label col-sm-2" for="Room sharing &amp; Rates">Room sharing &amp; Rates:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="Room sharing &amp; Rates" class="form-control" name="room_price" placeholder="Enter Room sharing &amp; Rates">
		        </div>
		        
		    </div>	<div class="form-group">
					        <label class="control-label col-sm-2" for="Number of vacant rooms">Number of vacant beds:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="Number of vacant rooms" class="form-control" name="vacant_beds" placeholder="Enter Number of vacant beds">
		        </div>
		        
		    </div>	<div class="form-group">
					        <label class="control-label col-sm-2" for="City">City:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="City" class="form-control" name="city" placeholder="Enter City">
		        </div>
		        
		    </div>	<div class="form-group">
					        <label class="control-label col-sm-2" for="Price From">Price From:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="Price From" class="form-control" name="price_from" placeholder="Enter Price From">
		        </div>
		        
		    </div>	<div class="form-group">
					        <label class="control-label col-sm-2" for="Price To">Price To:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="Price To" class="form-control" name="price_to" placeholder="Enter Price To">
		        </div>
		        
		    </div>	<div class="form-group">
					        <label class="control-label col-sm-2" for="Type">Type:</label>
			            <div class="col-sm-4">
			            <select class="form-control" name="type">
			            	<option value="Premium">Premium</option>
			            	<option value="Executive">Executive</option>
			            	<option value="Backpacker">Backpacker</option>
			            </select>          
		        </div>
		        
		    </div>	
		    </p> 
		</div>	
			<button type="button" class="accordion">Add Images</button>
				<div class="panel">
			<p>
		        <div class="form-group has-feedback" style="">
		            <label class="control-label col-sm-2" for="file">Images:</label>  
		            <div class="col-sm-10 file_div">
		                <button type="button" class="form-control btn btn-primary file_trigger">
		                	<span class="file_text">Upload Images </span>
		                	<span class="glyphicon glyphicon-picture"></span>
		                </button>
		                <input type="file" class="file" name="image[]" accept="image/*" multiple style="display: none">
		            </div>
		            
		        </div>	 </p>
		        </div>

		        <div class="clearfix"></div><br>
		        <div class="form-group">
		            <div class="col-sm-offset-3 col-sm-8">
		                <button class="btn btn-success col-sm-7">
		                    <span class="glyphicon glyphicon-ok"></span> Submit
		                </button>
		            </div>  
		        </div>
   	</form>
   </div>
</div>
<script type="text/javascript">
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].onclick = function(){
	        this.classList.toggle("active");
	        this.nextElementSibling.classList.toggle("show"); 
	  }
	}
$(document).ready(function()
{
	$(".file_trigger").click(function()
	{
		$(this).parents(".file_div").find(".file").trigger('click');
	});
	$(".file").change(function()
	{
		var files = $(this).prop("files");
		var names = $.map(files, function(val) { return val.name; });
		$(this).parents(".file_div").find(".file_trigger").find(".file_text").text(names);
	});
	$("#pg_form").submit(function(e)
	{
		alert($("#temp").val());
	});
});
</script>