<template>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <h4 class="text-right"><span class="label label-success">Aplikasi </span>&nbsp; // &nbsp;<i class="fa fa-fw fa-desktop"></i> </h4>
          <hr>
          <div class="text-center">
              <div class="panel-body" style="margin:5px">

                <div class="col-md-2">
                    <small><b> Surat:</b></small>
                    <a href="#"> 
                        <button class="btn btn-default fa fa-envelope-o fa-2x"></button>
                    </a>

                </div>

                <div class="col-md-2">
                    <small><b> ST:</b></small>
                    <a :href="'/tugas/st'">
                        <button class="btn btn-default fa fa-archive fa-2x"></button>
                    </a>
                </div>
                <div class="col-md-2">
                    <small><b> ND:</b></small>
                    <button class="btn btn-default fa fa-file-archive-o fa-2x"></button>
                </div>
                <div class="col-md-2">
                    <small><b>Post:</b></small>
                    <button class="btn btn-default fa fa-newspaper-o fa-2x"></button>
                </div>
                <div class="col-md-2">
                    <small><b>Pustaka:</b></small>
                    <button class="btn btn-default fa fa-book fa-2x"></button>
                </div>

                <div class="col-md-2">
                    <small><b>Data:</b></small>
                    <button class="btn btn-default fa fa-bar-chart fa-2x"></button>
                </div>
              </div>
          </div>

          <hr>
          <div class="panel panel-default text-center">
              <div class="panel-body">
                  <div class="row text-center">
                      <div class="col-md-3">
                        <a href="/app/spip">
                            <img src="/img/app/spip.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3" >
                        <a href="/app/apip">
                            <img src="/img/app/apip.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                     
                      <div class="col-md-3">
                        <a href="/app/fcp">
                            <img src="/img/app/fcp.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                         <a href="/app/pkpd">
                             <img src="/img/app/pkpd.png" alt="" class="pad img-thumbnail">
                         </a>            
                      </div>
                      
                  </div>
               
              </div>
          </div>
          <hr>
          <div class="panel panel-default text-center">
              <div class="panel-body">
                  <div class="row text-center">
                      
                      <div class="col-md-3">
                        <a href="/app/simda">
                         <img src="/img/app/simda.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                       <a href="/app/sia">
                        <img src="/img/app/sia.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="/app/siskeudes">
                            <img src="/img/app/siskeudes.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      
                      <div class="col-md-3">
                        <a href="/app/sidupak">
                            <img src="/img/app/sidupak.png" alt="" class="pad img-thumbnail">
                        </a>
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

  }

</script>
