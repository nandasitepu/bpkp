<template>
  <div class="">
    <div class="panel panel-default">
      <div class="panel-heading">

        <div>
          <strong>Kumpulan Berita</strong>
          <ul class="pagination pagination-sm pull-right">
                  <li v-if="pagination.current_page > 1">
                      <a href="#" aria-label="Previous"
                         @click.prevent="changePage(pagination.current_page - 1)">
                          <span aria-hidden="true">«</span>
                      </a>
                  </li>
                  <li v-for="page in pagesNumber"
                      v-bind:class="[ page == isActived ? 'active' : '']">
                      <a href="#"
                         @click.prevent="changePage(page)">{{ page }}</a>
                  </li>
                  <li v-if="pagination.current_page < pagination.last_page">
                      <a href="#" aria-label="Next"
                         @click.prevent="changePage(pagination.current_page + 1)">
                          <span aria-hidden="true">»</span>
                      </a>
                  </li>
              </ul>
        </div>
      </div>

      <div class="panel-body">
          <div class="row">
            <div v-if="loading" class="text-center"><span><i class="fa fa-refresh fa-3x fa-spin"></i></span></div>
            <div id="berita" v-for="p in posts.data">
              <div class="col-md-4">
                <div class="berita-image">
                  <img v-bind:src="'/img/lorem/150x150.jpg'" class="img-thumbnail" alt="Image" width="100%">
                </div>
              </div>
              <div class="col-md-8">
                <div class="berita-nama">
                  {{p.name }}
                </div>
                <div class="berita-info">
                  <span class="label label-info">Ditulis: NS</span>
                  <span class="label label-info">Tgl: {{p.created_at}}</span>
                  <span class="label label-info">Kategori: Berita</span>
                </div>
                <hr>
                <div class="berita-body">
                  <p>
                    {{p.body | Short}}
                  </p>
                </div>
                <hr>
                <div class="berita-footer">
                  <div class="text-right">
                    <a :href="posts +'/'+p.id"><button class="btn btn-sm btn-default btn-sm"><i class="fa fa-fw fa-eye"></i> Show</button></a>
                    <a href="#"><button class="btn btn-sm btn-primary btn-sm"><i class="fa fa-fw fa-edit"></i> Edit</button></a>
                  </div>
                </div>
                <hr>
              </div>

            </div>

          </div>
        </div>
    </div>
  </div>
</template>
<script>
  import axios from 'axios'

  export default {
    data() {
      return {
        posts:[],
        pagination: {
          total: '',
          per_page: 5,
          from: '',
          to: '',
          current_page: 1
        },
        offset: 1,
        loading:false,
        resource_url: 'api/posts',

      }
    },

    computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

    created:function(){
      this.fetchDataPosts(this.pagination.current_page)
    },

    methods:{
      fetchDataPosts(page) {
        var vm = this
        this.loading=true;
        axios.get('/api/posts?page=' + page)
          .then(function(response){
             Vue.set(vm.$data, 'posts', response.data.posts)
             Vue.set(vm.$data, 'pagination', response.data.pagination)
          })
        this.loading=false;
      },

      changePage: function (page) {
          this.pagination.current_page = page;
          this.fetchDataPosts(page);
      }
    },

    filters: {
      Short: function(value) {
      return  value.length > length ?
        value.substring(0, 300) + "..." :
        value
      }
    }
  }
</script>
