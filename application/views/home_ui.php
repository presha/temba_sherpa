<div id="content">
        <div id="profile" class="clearfix">
          <div class="box-center clearfix">
            <div class="maindata">
              <div class="item clearfix">
                <div class="firsto"><span>Name</span></div>
                <div class="secondto">Temba Tsheri Sherpa</div>
              </div>
              <div class="item clearfix">
                <div class="firsto"><span>Date of Birth</span></div>
                <div class="secondto">May 5, 1987</div>
              </div>
              <div class="item clearfix">
                <div class="firsto"><span>Profession</span></div>
                <div class="secondto">Mountain Climbing</div>
              </div>
			  <div class="item clearfix">
                <div class="firsto"><span><abbr title="click to see my detail portfolio"><a href="#">More About Me</a></abbr></span></div>
              </div>
            </div>
            <div class="quote shadow">
              <h3>About me</h3>
              <div id="scroll-about">
                <h4>Travelling is My Passon</h4>
                <p> World's Highest Mountain, 8 of theWorld's 14 Highest Peaks 35% of the land covered byforest, 20% is protected as National Parks60 Ethnic Groups, 92 Spoken
      LanguagesOver 3000 Temples, 1200</p>
                <p> World's Highest Mountain, 8 of theWorld's 14 Highest Peaks 35% of the land covered byforest, 20% is protected as National Parks60 Ethnic Groups, 92 Spoken
      LanguagesOver 3000 Temples, 1200</p>
                <h4>Travelling is My Passon</h4>
                <p>World's Highest Mountain, 8 of theWorld's 14 Highest Peaks 35% of the land covered byforest, 20% is protected as National Parks60 Ethnic Groups, 92 Spoken
      LanguagesOver 3000 Temples, 1200.</p>
              </div>
            </div>
          </div>
          <div class="box-right clearfix">
            <div class="flexslider"><!-- Slider -->
              <div class="tape"></div>
              <ul class="slides">
                <li> <img src="<?php echo base_url(); ?>media/images/gallery/picture1.jpg" alt="" /> </li>
                <li> <img src="<?php echo base_url(); ?>media/images/gallery/picture2.jpg" alt="" /> </li>
                <li> <img src="<?php echo base_url(); ?>media/images/gallery/picture3.jpg" alt="" /> </li>
              </ul>
            </div>
            <!-- /Slider -->
            <ul class="linkdata shadow">
              <li><a class="fancybox" href="#inline1"><i class="icon-envelope"></i><span>Send Me a Email</span></a></li>
              <li><a href="#"><i class="icon-user"></i><span>Enter My Blog</span></a></li>
              <li><a href="#"><i class="icon-desktop"></i><span>Visit my Website</span></a></li>
              <li><a href="#"><i class="icon-star"></i><span>Bookmark</span></a></li>
            </ul>
         <div id="inline1" style="width:400px;display: none;">
          <aside class="aboutus_aside">
                <fieldset><legend>Mail me</legend>
                    <?php echo form_open('ui/add_comment') ?>
                        <label for="name">Name : </label><br>
                        <input type="text" name="name" placeholder="e.g:  your name" required="required" class="name" size="25"/> <br><br>
                        <label for="email">Email : </label><br>
                        <input type="email" required="required" name="email" placeholder="e.g:  xyz@xyz.com" class="email"  size="25"/><br>      <br>
                        <label for="subject" >Subject : </label><br>
                        <input type="text" name="subject" placeholder="e.g:  subject" required="required" class="subject"  size="25"/><br>     <br>
                        <label for="comment" >Comment : </label><br>
                        <textarea cols="20" rows="7" name="comment" maxlength="300" required="required" placeholder="e.g:  leave a comment"></textarea><br><br>
                        <input type="submit" value="Send mail" class="btn" name="submit" >
                    </form>
                </fieldset>
            </aside>
         </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- /Content --> 