
 
  <div class="bodywrapper">    
    <div class="centercontent">
    
        <div class="pageheader">
            <ul class="hornav">
                <strong><?php uchaguzi::info_tabs($page_id); ?></strong>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
            <div class="two_third last profile_wrapper">
                <div id="profile" class="subcontent">
                   
                    <div class="contenttitle2">
                        <h3><strong><?php echo Kohana::lang('uchaguzi.header_title'); ?></strong></h3>
                    </div><!--contenttitle-->
                    
                    <div class="profile_about">
                        <?php 
            echo htmlspecialchars_decode($page_description);
            Event::run('ushahidi_action.page_extra', $page_id);
            ?>
                    </div><!--profile about-->
          
                    <br clear="all" />
                    
                </div<!--subcontent-->   
                
                <br /><br />
            </div><!--two_third-->
            
            <br /><br />
            
        </div><!--contentwrapper-->
                
    </div><!-- centercontent -->
    
    </div><!--body wrapper-->