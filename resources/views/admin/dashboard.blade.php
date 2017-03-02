@extends('main')

@section('stylesheets')
<meta id="_token" value="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/dashboard.css" media="screen" title="no title">
@endsection

@section('scripts')
<script src="js/vue.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                          </span>Content</a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                          <table class="table">
                              <tr>
                                  <td>
                                      <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                                      <span class="badge">42</span>
                                  </td>
                              </tr>
                          </table>
                      </div>
                  </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9" id="dashboard">
            <div class="well">
              <nav v-bind:class="active" v-on:click.prevent>
                <a href="#" class="home" v-on:click="makeActive('home')">Home</a>
                <a href="#" class="projects" v-on:click="makeActive('projects')">Projects</a>
                <a href="#" class="services" v-on:click="makeActive('services')">Services</a>
                <a href="#" class="contact" v-on:click="makeActive('contact')">Contact</a>
              </nav>

            </div>
            <div>
              <p>You chose <b>@{{active}}</b></p>
              <br />
              <ul>
                <li v-for="post in posts">
                  @{{ post }}
                </li>
              </ul>
            </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="offer offer-danger">
           <div class="shape">
             <div class="shape-text">
               <span class="glyphicon glyphicon glyphicon-eye-open"></span>
             </div>
           </div>
           <div class="offer-content">
             <h3 class="lead">
             Danger : <label class="label label-danger">323</label>
             </h3>
             <p>
                Oranı:
               <br>
                           <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                        60%
                           </div>
                      </div>
             </p>
           </div>
          </div>
        </div>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
       <div class="offer offer-success">
         <div class="shape">
           <div class="shape-text">
             <span class="glyphicon glyphicon glyphicon-th"></span>
           </div>
         </div>
         <div class="offer-content">
           <h3 class="lead">
              success : <label class="label label-success"> 323</label>
           </h3>
           <p>
             Ortalama Oranı :
             <br>
                         <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                      60%
                         </div>
                    </div>
           </p>
         </div>
       </div>
     </div>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
       <div class="offer offer-radius offer-primary">
         <div class="shape">
           <div class="shape-text">
             <span class="glyphicon  glyphicon-user"></span>
           </div>
         </div>
         <div class="offer-content">
           <h3 class="lead">
              primary : <label class="label label-primary"> 323</label>
           </h3>
           <p>
             Ortalama Oranı:
             <br>
                         <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                      60%
                         </div>
                    </div>
           </p>
         </div>
       </div>
     </div>
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
       <div class="offer offer-info">
         <div class="shape">
           <div class="shape-text">
             <span class="glyphicon  glyphicon-home"></span>
           </div>
         </div>
         <div class="offer-content">
           <h3 class="lead">
             İnfo : <label class="label label-info"> 323</label>
           </h3>
           <p>
             Kullanma Oranı:
             <br>
                         <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                      60%
                         </div>
                    </div>
           </p>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
