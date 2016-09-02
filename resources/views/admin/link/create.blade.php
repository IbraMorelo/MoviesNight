<h3>Create Link</h3>
<form v-on:submit.prevent="create" method="POST">
    <div class="form-group">
	    <label for="name">Name</label>
	    <input v-model="new.name" type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
  	</div>
    <button class="btn btn-default" type="submit">Save</button>
</form>
