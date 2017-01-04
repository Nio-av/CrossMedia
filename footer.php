           
            <div id="sidebar">
                <!-- For Widgets -->
                <?php
                    dynamic_sidebar( 'Footer' );
                ?>
            </div>
            
            
        <div id="footer" class="window"> 
            <div id="banner">
        
                    <img src="<?php echo(get_template_directory_uri()); ?>/Banner.svg">
                    <p>                
                          <script type="text/javascript">
                                 /* bisZurFeier();

                                  function bisZurFeier() {                                                     
                                        jetzt = new Date();
                                        DM25 = new Date("Jun 13, 2015");
                                        msProTag = 24 * 60 * 60 * 1000 ;
                                        DifferenzTime = (DM25.getTime() - jetzt.getTime());
                                        e_daysLeft = DifferenzTime / msProTag;
                                        TageBis = Math.floor(e_daysLeft); //floor = Abrunden 

 
 document.write("Heute " + TageBis + " Tage bis zur Jubiläumsfeier!" );*/                        
                                      
                                      document.write("Danke, dass Sie mit dabei waren!" );                        

                                  /*} */

                          </script>             
                    </p> 
            
            </div><!-- ende banner -->            
            
            

            <nav id="footernav">
                    <?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
            </nav>
            <aside id="sponsor">
                <p>
                Entstanden an der Hochschule Offenburg.
                
                    <a href="//hs-offenburg.de" target="_blank">
                        <img src="<?php echo(get_template_directory_uri()); ?>/HS_Logo_schwarz.svg" alt="HSO"></img>
                    </a>
                </p>
            </aside>
            
        </div><!-- ende footer -->
    </div><!-- vertical-center -->
</div><!-- wrapper -->   
 
<?php wp_footer(); ?> <!-- For PlugIns -->


<?php
    include_once "tracking.php";
?>
</body>
</html>
