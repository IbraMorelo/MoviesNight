<div id="edit-link" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="exampleModalLabel">Link: @{{ edit.name }}</h4>
      		</div>
      		<form v-on:submit.prevent="update(edit.id)" method="POST">
	    	 	<div class="modal-body">
		            <div class="form-group">
		            	<label for="name">Name</label>
		                <input v-model="edit.name" type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
		            </div>
		        </div>
		        <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="submit" class="btn btn-primary">Update</button>
	      		</div>
      		</form>
	    </div>
    </div>
</div>
