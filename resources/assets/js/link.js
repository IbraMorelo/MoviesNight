new Vue({

	http: {
	    root: '/root',
	    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
  	},

	el: '#links-controller',

	data: {
		new: {
			name: '',		
		},

		edit:{
			id: '',
			name: ''
		},
	},

	methods: {
		getLinks(){
			this.$http.get('/admin/api/links').then((response) => {
				this.$set('links', response.json());
			});
		},

		create(){
			var link = this.new
			this.$http.post('/admin/api/links', link).then((response) => {
				this.new = { name:'' }
				this.getLinks()
			}, (msj) => {
				
			});
		},

		read(id) {
      $('#edit-link').modal({
        backdrop: 'static',
        keyboard: false,
      })
			this.$http.get('/admin/api/links/' + id).then((response)=>{
				this.edit.id = response.json().id
				this.edit.name = response.json().name
			});
		},

		update(id){
			var link = this.edit
			this.$http.patch('/admin/api/links/' + id, link).then((response) => {
				this.edit = { id: '', name: '' }
        $('#edit-link').modal('hide')
				this.getLinks()
			}, (msj) => {
				
			});
		},

		delete(id){
			var ConfirmBox = confirm("Are you sure, you want to delete this Link?")
			if(ConfirmBox){
				this.$http.delete('/admin/api/links/' + id)
				this.getLinks()
			} 
		}

	},

	ready(){
		this.getLinks();
	}
});