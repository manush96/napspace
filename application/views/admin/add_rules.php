<script type="text/javascript" src="js/visited.js"></script>
<div id="body" class="container-fluid"><div class="col-sm-12">
	<h2 class="text-primary col-sm-offset-5">Add Rule  </h2><br/>
	<form action="admin/new_rule_data" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="form-group col-sm-6" >
			        <label class="control-label col-sm-2" for="PG Name">Rule:</label>
	            <div class="col-sm-6">          
            <input type="text" id="rule_name" class="form-control" name="rule_name" placeholder="Enter Owner Name">
        </div>  
		</div>	


        <div class="form-group col-sm-4">
            <label class="control-label col-sm-6" for="email">Apply Rule to:</label>
            <div class="col-sm-6">          
                <select name="type" class="form-control">
                    <option value="Napspace">Napspace</option>
                    <option value="Owner">Owner</option>
                </select>
            </div>
            
        </div>	
	    
        <div class="form-group col-sm-2">
            <div class="col-sm-12">
                <button class="btn btn-success col-sm-8">
                    <span class="glyphicon glyphicon-ok"></span> Submit
                </button>
            </div>  
        </div>
    	</form>
    </div>
</div>

<div id="user_data_div">
    <div class="container" id="main_table">
        <div class="row bg-info">
            <div class="col-sm-1 head_cell">
                <p class="h3">ID</p>
            </div>
            <div class="col-sm-4 head_cell">
                <p class="h3">Rule</p>
            </div>
            <div class="col-sm-3 head_cell">
                <p class="h3">Type</p>
            </div>
            <div class="col-sm-4 head_cell">
                <p class="h3">Change Status</p>
            </div>
            
        </div>
        <?php foreach ($rules as $row):?>
            <div class="row owner_row" rel="<?= $row['id'];?>">
                <div class="content_grp col-sm-1 lr0pad" rel="<?= 'id@'.$row['id'];?>">
                    <div class="edit_btn_div col-sm-2 lr0pad">
                    </div>
                    <div class="content_div col-sm-10 lr0pad">
                        <p class="h4 content"><?= $row['id'] ?></p>
                    </div>
                </div>      
                <div class="content_grp col-sm-4 lr0pad" rel="<?= 'rule@'.$row['id'];?>">
                    <div class="edit_btn_div col-sm-1 lr0pad">
                    </div>
                    <div class="content_div col-sm-11 lr0pad">
                        <p class="h4 content"><?= $row['rule'] ?></p>
                    </div>
                </div>
                <div class="content_grp col-sm-3 lr0pad" rel="<?= 'type@'.$row['id'];?>">
                    <div class="edit_btn_div col-sm-1 lr0pad">
                    </div>
                    <div class="content_div col-sm-11 lr0pad">
                        <p class="h4 content"><?= $row['type'] ?></p>
                    </div>
                </div>
                <div class="content_grp col-sm-4 lr0pad" rel="<?= 'status@'.$row['id'];?>" style="padding-top: 15px">
                    <div class="content_div col-sm-10 lr0pad">
                        <button class="eliminate_rule btn btn-primary" rel="<?= $row['id'] ?>"> Eliminate Rule</button>
                    </div>
                </div>
                
            </div> 
        <?php endforeach;?>
    </div>
</div>