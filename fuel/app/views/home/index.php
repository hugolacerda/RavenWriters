<div class="container">

       <section class="jumbotron">
         <h1>Literature Spotlight: Author Name</h1>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>

            <a href="#"><small>Author's Name <cite title="Source Title">Novel Name: Chapter 1</cite></small></a>
            <p><?= Html::anchor('article', 'Read This &raquo;', array('class' => "btn btn-lg btn-primary pull-right" , 'role' => "button")) ?></p>
        <!--  <p><a class="btn btn-lg btn-primary pull-right" href="#" role="button">Read This &raquo;</a></p> -->
       </section>

       <section class="row">

        <aside class="col-md-4">

          <div class="well">

            <p class="lead">Trending Tags</p>
            <hr>
             <div id="tagsinput_tagsinput" class="tagsinput" style="height: 100%;border: none;background:transparent;">
            <span class="tag"><h4>Poetry&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Prose&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Haiku&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Lyrical&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Non-Fiction&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Essays&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Commentary&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
                <span class="tag"><h4>Reviews&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Fiction&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Sci-Fi&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Fantasy&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
            <span class="tag"><h4>Horror&nbsp;&nbsp;</h4><a class="tagsinput-search-link"></a></span>
          
            <!-- <div class="tagsinput-add-container" id="tagsinput_addTag"><div class="tagsinput-add"></div><input id="tagsinput_tag" value="" data-default="" style="color: rgb(102, 102, 102); width: 7px;"></div> --></div>

          </div>

        </aside>

        <aside class="col-md-8 well" style=" width: 765px; ">
            <p class="lead">Recent Uploads</p>
            
            <hr>
             <div class="page-header">
                 <h2>Article Title | <small>Novel Name</small></h2>
                 <p class="lead">in Genre | <b>by Author</b> </p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit magna in mi accumsan viverra. Phasellus ligula dolor, viverra vel magna in, dignissim gravida orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla convallis tincidunt sapien quis euismod. Integer non risus at mi tincidunt blandit tristique in neque...</p>
              <p><a class="btn btn-default pull-right" href="#" role="button">Read This &raquo;</a></p>
        
              
              <p><?= Html::anchor('browse', 'Brose Other Stories', array('class' => "btn btn-primary" , 'role' => "button")) ?></p>
            


             <div class="page-header">
                 <h2>Article Title | <small>Novel Name</small></h2>
                 <p class="lead">in Genre | <b>by Author</b> </p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit magna in mi accumsan viverra. Phasellus ligula dolor, viverra vel magna in, dignissim gravida orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla convallis tincidunt sapien quis euismod. Integer non risus at mi tincidunt blandit tristique in neque...</p>
              <p><a class="btn btn-default pull-right" href="#" role="button">Read This &raquo;</a></p>
        
              <p><a href="#" class="btn btn-primary" role="button">Browse Other Stories</a></p>

        </aside>

       </section>
  </div>