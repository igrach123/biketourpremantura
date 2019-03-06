<footer id="footer" class="clearfix">

            <div class="container">
                <h2 class="text-center">Contattaci</h2>

                 <div class="row">
                 
                     <div class="col-xs-12 col-sm-8 col-sm-offset-2  col-md-offset-3 col-md-6" id="contact-container">
                         <h4 class="text-center ">Chiedeteci qualsiasi cosa!</h4>
                         <form class="form-horizontal" role="form" method="post" id="contact-form">
                     
                             <div class="form-group">
                                    
                                 <div class="col-sm-12">
                                     <input type="text" class="form-control" id="name" name="name" placeholder="Vaše ime" value="<?php echo $_POST['name']; ?>">
                                 </div>
                             </div>
                         <div class="form-group">
                           
                             <div class="col-sm-12">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Vaš Email" value="<?php echo $_POST['email']; ?>">
                             </div>
                         </div>
                         <div class="form-group">
                            
                             <div class="col-sm-12">
                                 <textarea class="form-control" id="message" rows="4" placeholder="Vaša poruka" name="message" style="resize: none;"><?php echo $_POST['message']; ?></textarea>
                             </div>
                         </div>

                            <div class="form-group">
                             <label for="human" class="col-sm-2 col-sm-offset-6 control-label">2+3=?</label>
                             <div class="col-sm-4 ">
                             <input type="text" class="form-control" id="human" name="human" placeholder="Your answer">
                             </div>
                         </div>  

                         <div class="form-group">
                             <div class="text-center">
                                 <input id="submit" name="submit" type="submit" value="Send" class="btn-send btn btn-primary btn-md">
                             </div>
                         </div>
                         <p class="antispam hidden">your input here: <input type="text" name="url" id="url" /></p>
                     </form>
                     </div>
                 </div>
                

                <div class="row footer-top clearfix">
                  
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                                    <h4 class=""> <span><i class="fa fa-caret-right"></i></span> CONTATTO</h4>
                                    
                                    <ul> 
                                    <li><h5>R.T.O. - Boris Ivančić </h5></li>   
                                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+385 (0)91 512 36 46"> +385 (0)91 512 36 46</a></li>
                                     <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>  
                                        <script TYPE="text/javascript">
                                        emailE=('bivancic@' + 'yahoo.com')
                                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')            
                                            </script>

                                            <noscript>
                                                     <em>Email address protected by JavaScript.<BR>
                                                         Please enable JavaScript to contact me.</em>
                                            </noscript>
                                     </li>
                                  <li>Zoranićeva 17, Pula</li>
                                  <li> OIB: 46116579192  </li>
                                  <li>MB Obrta: 90645405 </li>   
                                 </ul>                                 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3  footer-content ">
                        <h4 class=""> <span><i class="fa fa-caret-right"></i></span> LINK UTILI</h4>
                       <ul>
                           <li><a href="http://www.vows.at/" target="_blank">www.vows.at</a></li>
                           <li><a href="https://www.continentseven.com/" target="_blank">Continent seven</a></li>
                           <li><a href="https://www.pwaworldtour.com/index.php?id=920" target="_blank">PWA Worldtour</a></li>
                           <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>
                           <li><a href="http://www.hjs.hr/" target="_blank">HJS</a></li>
                           <li><a href="https://www.getmyboat.com/" target="_blank">GetMyBoat</a></li>
                           
                       </ul>   
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-content visible-xs hidden-sm visible-md visible-lg   ">
                            <h4 class=""> <span><i class="fa fa-caret-right"></i></span> METEO</h4>  
                                <ul>
                                    <li><a href="http://meteo.hr/index.php" target="_blank">meteo.hr</a></li>
                                    <li><a href="http://www.arso.gov.si/vreme/napovedi%20in%20podatki/index.html" target="_blank">www.arsov.gov.si</a></li>
                                    <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>

                                        
                                  

                                    
                                </ul>
                           <!--  footer weather modal-->       
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-content visible-xs hidden-sm  visible-md visible-lg ">
                            <h4 class=""> <span><i class="fa fa-caret-right"></i></span> ALLOGGIO</h4>  
                                <ul>
                                    <li><a href="https://www.arenaturist.com/" target="_blank">arenaturist.com</a></li>
                                    <li><a href="http://www.tzom.hr/" target="_blank">tzcom.hr</a></li>
                                    <li><a href="http://medulin.hr/" target="_blank">medulin.hr</a></li>

                                </ul>
                                 
                    </div>
                </div> <!-- end of roow -->
        

                <div class="row footer-top2 visible-sm hidden-md hidden-lg">
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                            <h4 class=""> <span><i class="fa fa-caret-right"></i></span> METEO</h4>  
                                <ul>
                                    <li><a href="http://meteo.hr/index.php" target="_blank">meteo.hr</a></li>
                                    <li><a href="http://www.arso.gov.si/vreme/napovedi%20in%20podatki/index.html" target="_blank">www.arsov.gov.si</a></li>
                                    <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>

                                        
                                  

                                    
                                </ul>
                           <!--  footer weather modal-->       
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                            <h4 class=""> <span><i class="fa fa-caret-right"></i></span> ALLOGGIO</h4>  
                                <ul>
                                    <li><a href="https://www.arenaturist.com/" target="_blank">arenaturist.com</a></li>
                                    <li><a href="http://www.tzom.hr/" target="_blank">tzcom.hr</a></li>
                                    <li><a href="http://medulin.hr/" target="_blank">medulin.hr</a></li>

                                </ul>
                                 
                    </div>
                </div> <!-- footer-top2 -->

                <div class="container-fluid" id="footer-bottom">
                   
                    
                            <div class="footer-bottom-left"><a href="index.php" target="_self"> 
                                    <img src="../img/ws-logo-big-white-font.png" class="img-responsive" alt="ws-logo"></a>
                            </div>
                             <div class="footer-bottom-center">
                                    <p class="text-center">WINDSUFING PREMANTURA - MEDULIN  &copy;  <span class="hidden-sm">2018.</span> </p>
                             </div>
                              <div class="footer-bottom-right">   
                                    <a href="https://www.cro-webdesign.com/" target="_blank" > <p class="text-left hidden-xs izradio">Cro Web Design</p></a>
                             </div>
                                           
                </div>
            </div> <!-- end of container -->
        
    </footer>
        