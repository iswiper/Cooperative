<?php echo form_open('login_con/login_validation') ?>

<?php echo form_open('Signup_con/register_customer') ?>


 <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
		<h1><a href="#hero">Cooperative</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#services">Services</a></li>
      <li><a href="" class="launch-modal" data-modal-id="modal-login">Login</a></li>
		 <li><a href="<?php echo base_url(); ?>Signup">Register</a></li>
		  

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
  
  
  
  
 <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Cooperative</h1>
      <h2>A website to purchase goods in afforadable price.</h2>
      
	  
    </div>
  </section><!-- #hero -->

  
 <!--==========================
  login modal Section
  ============================-->
  <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">

          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <h1>LOGIN</h1>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
              <form role="form" action="" method="post" class="login-form">
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
                  <input id="username" type="text" Required="" class="form-control input-lg" name="username" placeholder="Username">
                </div>
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-key " aria-hidden="true"></i></span>
                  <input id="password" type="password" Required="" class="form-control input-lg" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" name="login" class="btn btn-primary input-lg form-control"  ="Login">
                </div>
                <?php echo form_close() ?>  
              </form>        
              </div>
              
            </div>
          </div>
        	
        </div><!-- #login modal -->
  

      <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">About Us</h2>
            <p>
              COOPERATIVE is a form of free enterprise that is oriented toward service rather than pecuniary profit that is owned by its customers for their mutual benefit. 
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-handshake-o"></i></div>
                            <b>Cooperate with one another</b>
                            <p class="description">Every member doing their bit, making our cooperative a success by supporting its activities and using its products and services.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-globe"></i></div>
                            <b>Seize the oppurtunity</b>
                            <p class="description">Our co-op gives all members an opportunity to get involved, like campaigning for fair trade.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-group"></i></div>
              <b>Togetherness</b>            
              <p class="description">Together we’re stronger, so members join together to help our co-op achieve even more.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    

     <!--==========================
      Services Section
    ============================--> 
   <section id="services">
      <div class="container">
    <div class="section-header">
       <h3 class="section-title">Services</h3><br >
    </div>

       <div class="row">
          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-archieve"></i></div>
              <h4 class="title"><a href="">POS System</a></h4>
              <p class="description">The COOPERATIVE provides a point-of-sale system that will allow the member to take transactions.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>

              <h4 class="title"><a href="">Sales Management</a></h4>
              <p class="description">The COOPERATIVE provides the information on sales record to improve methods of distribution to reduce cost and to increase profits. Through COOPERATIVE, you can view and analyze sales data to make informed business decisions.</p>
            </div>
          </div>

          <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
            <div class="icon-box wow fadeInUp" >
              <div class="icon"><i class="fa fa-calendar"></i></div>
              <h4 class="title"><a href="">Inventory Management</a></h4>
              <p class="description">The COOPERATIVE provides the information to make more accurate and timely decisions on managing quantities of stocks and determine when and how often to reorder products. You can view, update, add, and delete preferred items. </p>
            </div>
      
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-credit-card"></i></div>
              <h4 class="title"><a href="">Cooperative Advantage Card</a></h4>
              <p class="description">The COOPERATIVE provides points to collect to registered members of the cooperative in every transaction.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    


    

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">Our team is composed of Computer Science Students.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/venjie.jpg'); ?>" alt=""></div>
              <h4>Venjie Mendez</h4>
              <span>Back-end Developer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/neng.jpg'); ?>" alt=""></div>
              <h4>Lyle Angeline Paulo</h4>
              <span>Back-end Developer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/maru.jpg'); ?>" alt=""></div>
              <h4>Mary Rose Apoyon</h4>
              <span>Front-end Developer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/edward.jpg'); ?>" alt=""></div>
              <h4>Edward Vincent Anabo</h4>
              <span>Back-end Developer</span>
              <span>Quality Assurance</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
			
			<div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/ja.jpg'); ?>" alt=""></div>
              <h4>Janine Sabado</h4>
              <span>Front-end Developer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url('assets/Home/img/law.jpg'); ?>" alt=""></div>
              <h4>Michael Lawrence Cruz</h4>
              <span>Front-end Developer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
		  
		  
		  
		  </div>

      </div>
    </section><!-- #team -->

    
  </main>

	                                        
