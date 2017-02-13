
// Creating a new Vue instance and pass in an options object.
var menu = new Vue({

	// A DOM element to mount our view model.
	el: '#dashboard',

        // This is the model.
	// Define properties and give them initial values.
	data: {
		active: 'home',
    posts:[],
    pagination: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
    offset: 4,
    formErrors:{},
    formErrorsUpdate:{},
    newItem : {'title':'','description':''},
    fillItem : {'title':'','description':'','id':''}
	},

	// Functions we will be using.
	methods: {
		makeActive: function(item){
			// When a model is changed, the view will be automatically updated.
			this.active = item;
		},

    getPosts: function() {
      this.$http.get('api/posts?page='+page).then((response) => {
        this.$set('posts', response.data.data.data);
        this.$set('pagination', response.data.pagination);
      });
    },

    ready : function(){
    		this.getPosts(this.pagination.current_page);
    },
	}
});
