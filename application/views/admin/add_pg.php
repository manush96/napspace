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
			        <label class="control-label col-sm-2" for="Type">Type:</label>
	            <div class="col-sm-4">
	            <select class="form-control" name="type">
	            	<option value="Paying guest">Paying Guest</option>
	            	<option value="Backpacker">Backpacker</option>
	            	<option value="Apartments">Apartments</option>
	            </select>          
        </div>
        
    </div>	
    <div class="form-group">
			        <label class="control-label col-sm-2" for="PG Name">PG Description:</label>
	            <div class="col-sm-4">          
            <textarea id="PG Name" class="form-control" name="description" rows="10" cols="20"
           placeholder="Enter PG Name"></textarea>
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
				<label class="control-label col-sm-2" for="City">City:</label>
			         <div class="col-sm-4">          
		            	<input type="text" id="City" class="form-control" name="city" placeholder="Enter City">
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
					<h4> <strong>Rules From Napspace:</strong></h4>
			    	<?php foreach ($rules as $row):?>
	    		    <?php	
	    		    	if($row['type']=='Napspace')
	    		    	{	
	    		    ?>		    	    		

				    <div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="<?=$row['rule']?>">
					<?=$row['rule']?></label>
					</div>
							 
				<?php } ?>
				<?php	endforeach;?>

				  	</div>
				  	<div class="col-sm-offset-2 col-sm-4">
				  	<h4> <strong>Rules From Napspace:</strong></h4>
				<?php foreach ($rules as $row):?>
	    		<?php	
    		    	if($row['type']=='Owner')
    		    	{	
    		    ?>    
		    	    		
	    		    <div class="checkbox">
					<label><input type="checkbox" name="rules[]" value="<?=$row['rule']?>">
					<?=$row['rule']?></label>
					</div>					    		
							 
				<?php } ?>
				<?php	endforeach;?>
					</div>
    </div>
			</p>
		</div>
		<button type="button" class="accordion">Amenities</button>
		<div class="panel">
			<p>	  
				<div class="form-group">
			    	<div class="col-sm-4">
			    	<?php foreach ($amenities as $row):?>
	    		    <?php	
	    		    	if($row['id']<18)
	    		    	{	
	    		    ?>    
		    	    		

				    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="<?=$row['id']?>"> <?=$row['name']?> </label>
							</div>
							 
				<?php } ?>
				<?php	endforeach;?>
				  	</div>
				  	<div class="col-sm-offset-2 col-sm-4">
				  	<?php foreach ($amenities as $row):?>
	    		    <?php	
	    		    	if($row['id']>=18)
	    		    	{	
	    		    ?>    
		    	    		

				    		<div class="checkbox">
							<label><input type="checkbox" name="amenities[]" value="<?=$row['id']?>"> <?=$row['name']?> </label>
							</div>
							 
				<?php } ?>
				<?php	endforeach;?>
					</div>
				
	</div>
		    </p>
		        
		</div>
			<button type="button" class="accordion">Room Sharing & Price info</button>
				<div class="panel">
			<p>
			<div class="form-group">
					        <label class="control-label col-sm-2" for="Room sharing &amp; Rates">Enter number of rooms:</label>
			            <div class="col-sm-4">          
		            <input type="text" id="rooms" class="form-control" name="rooms" placeholder="Enter number of rooms">		            
		        </div>
		        <button type="button" id="room_generate" class="col-sm-offset-2 col-sm-4 btn btn-primary">Add</button>
		        
		    </div>
		    <div class="form-group" id="add_divs">
		    	

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
	$("#room_generate").on('click',function(){

		$("#add_divs").empty();
		var room=$("#rooms").val();
		if(room>0)
		{

		}
		for(var i=0;i<room;i++)
		{
			$("#add_divs").append(" <div class='col-sm-12'> <div class='col-sm-1'>Room No. "+(i+1)+"</div> <div class='col-sm-3 '> <input type='text' id='total_beds' class='form-control' name='total_beds[]' placeholder='Enter Total Number of Beds'> </div> <div class='col-sm-offset-1 col-sm-3 '> <input type='text' id='vacant_beds' class='form-control' name='vacant_beds[]' placeholder='Enter number of Vacant Rooms'> </div> <div class='col-sm-offset-1 col-sm-3 '> <input type='text' id='price_sharing' class='form-control' name='room_price_sharing[]' placeholder='Enter Price Sharing of Room'> </div> </div><br><br>")
		}
	});
});
</script>