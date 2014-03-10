<?php include("_header.php"); ?>

<script type="text/javascript">
   $(document).ready(function(){
      $('.carousel').carousel({
         interval: 4000,
         cycle: true
      });
   });
</script>

      <!-- Premiere ligne grille -->
      <div class="row">
        <div class="span10 offset1">
		
          <div id="myCarousel" class="carousel slide">
          <!-- les indicateurs -->
          <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item">
			  <center>
                <img src="bootstrap\img\impression-3d-pearl-1_090F200A2001479472.jpg">
				<center>
                <div class="carousel-caption">
				<center>
                  <h4>1er slide</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                </div>
              </div>
              <div class="item">
			  <center>
                <img src="bootstrap\img\chateau-chambord.jpg"  height="200" alt="">
				<center>
                <div class="carousel-caption">
				<center>
                  <h4>2eme slide</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                </div>
              </div>
              <div class="item" height="">
			  <center>
                <img src="bootstrap\img\bobines-filament.jpg"  height="200" alt="">
				<center>
                <div class="carousel-caption">
				<center>
                  <h4>3eme slide</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                </div>
              </div>
            </div>
            <!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
        <!-- <div class="span5 hidden-phone">
          <a href="./DBM Web Design - Bootstrap Responsive Design_files/DBM Web Design - Bootstrap Responsive Design.htm" class="thumbnail">
            <img src="./DBM Web Design - Bootstrap Responsive Design_files/470x380" class="img-rounded">
          </a>
        </div> -->
		
		
		</div>
      </div>

      <!-- Deuxieme ligne grille -->
      <div class="row">
        <div class="span4">
          <h2>Exemple de paragraphe</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p><a class="btn" href="#">En savoir plus <i class="icon-chevron-right"></i></a></p>
        </div>
        <div class="span4">
          <h2>Paragraphe avec image</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ...
            <img src="./DBM Web Design - Bootstrap Responsive Design_files/360x100" class="img-rounded">
          </p>
          <p><a class="btn" href="#">En savoir plus <i class="icon-chevron-right"></i></a></p>
        </div>
        <div class="span4">
          <h2>Adresse</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, ...
          </p>
          <address>
            <strong>Twitter, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">print3r.service@gmail.com</a>
          </address>
          <p><a class="btn" href="#">En savoir plus <i class="icon-chevron-right"></i></a></p>
        </div>
      </div>

      <hr class="bs-docs-separator">
      
      <!-- Troisieme ligne grille -->
      <div class="row">
        <div class="span12">
          <h1>Zone de texte</h1>
          <p>
            ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione 
voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,  ...
          </p>
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam 
libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic 
tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
          </p>
        </div>
      </div>

      <hr class="bs-docs-separator">
<?php include("_footer.php"); ?>