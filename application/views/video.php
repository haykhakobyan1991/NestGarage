 <style>
    span.like.check {
        color: green;
    }
    
    span.dislike.check {
        color: red;
    }
 </style>
 
 <script>
    $(document).on('click', '.likedilike li span', function(){
        var data = $(this).data('id');    
        var alias = '<?=$this->uri->segment(2);?>'; 
        var check = 0; 
        
        if(!$(this).hasClass('check')){
            var check = 1;
            $(this).addClass('check');
            
            if($(this).hasClass('like')) {
                var id = $('.dislike').data("id") + 1;       
                console.log(id);       
                $('.dislike').data('id', id); 
                console.log(id);
            } else if($(this).hasClass('dislike')) {
                var id = $('.like').data("id") - 1;       
                console.log(id);     
                $('.like').data('id', id); 
                console.log(id);
            }   
               
          
            
        } else {
             var check = -1;
             $(this).removeClass('check');
             
             if($(this).hasClass('like')) {
                var id = $('.dislike').data("id") - 1;       
                console.log(id);       
                $('.dislike').data('id', id); 
                console.log(id);
             } else if($(this).hasClass('dislike')) {
                 var id = $('.like').data("id") + 1;       
                console.log(id);     
                $('.like').data('id', id); 
                console.log(id);
             }  
                 
             
        }
        
    
        
        $.post( "<?=base_url()?>Main/like_ax", { data: data, alias: alias, check: check }, function( result ) {
            if(data == 1) {
                $( ".like" ).html( result );
            } else if(data == -1) {
                 $( ".dislike" ).html( result );
            }
        });
        
    });
    
</script>

<div id="content_sec">
    	<!-- Column 1 -->
        <div class="col1">
            <!-- Video Heading -->
            <div class="allvideos_heading">
            	<h1><?=$title?></h1>
                <p class="txt"></p>
            </div>
            <div class="clear"></div>
            <!-- Video Detail -->
            <div class="videodetail">
            	<!-- Short Detail -->
                <div class="shortdetail">
                    <div class="videodate"><?=$date?></div>
                    <div class="videoviews"><p><?=$count?> դիտում</p></div>
                </div>
                <div class="clear"></div>
                <!-- Big Video -->
                <div class="videobig">
                	<?
                    if($video_id != '' and $iframe_link == '') {
                    	echo '<div style="">'.$this->show_video($video_id, NULL, '675', '438').'</div>';
                    } elseif($iframe_link != '' and $video_id == '') {
                    	echo '<div style="">
                    	        <video width="675" height="438" poster="'.base_url().'uploads/original/'.$photo.'" controls=""  name="media">
                    	            <source src="'.$iframe_link.'" type="video/mp4">
                    	        </video>
                    	      </div>';
                    } elseif($iframe_link != '' and $video_id != '') {
                    	echo '<div style="">'.$this->show_video(NULL, $iframe_link, '675', '438').'</div>';
                    }
                    ?>
                </div>
                <div class="clear"></div>
                <!-- Video tabs -->
                <div class="videotabs">
                	<div class="tabbuttons">
                        <ul class="likedilike">
                            <li><span data-id="1" class="like"> <?=$like?></span></li>
                            <li><span data-id="-1" class="dislike"> <?=$dislike?></span></li>
                        </ul>
                        <ul class="tablinksselected">
                            <li><a href="#"><span class="sharebtn">Տարածել</span></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="tabcont">
                        	<?
                            if($video_id != '' and $iframe_link == '') {
                            	echo '<input type="text" value="https://www.youtube.com/watch?v='.$video_id.'" name="s" class="chain" />';
                            } elseif($iframe_link != '' and $video_id == '') {
                            	echo '<input type="text" value="'.$iframe_link.'" name="s" class="chain" />';
                            } elseif($iframe_link != '' and $video_id != '') {
                            	echo '<input type="text" value="'.$iframe_link.'" name="s" class="chain" />';
                            }
                            ?>
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- Comments -->
                <div class="comments">
                   
                	<h2 class="heading">0 մեկնաբանություն</h2>
 
                    <textarea name="comment" cols="" rows=""></textarea>
                    
                    
                    <ul class="textareasubmission">
                        <li><a href="#" class="post">Մեկնաբանել</a></li>
                    </ul>
                    <ul class="commentslist">
   
                    </ul>
                </div>
                <div class="clear"></div>
                
            </div>
        </div>
        <!-- Column 2 -->
        <!--<div class="col2">-->
        	<!-- Tabs -->
        <!--    <div class="tabs">-->
        <!--    	<div class="tab_menu_container">-->
        <!--            <ul id="tab_menu">  -->
        <!--                <li><a class="current" rel="tab_sidebar_recent">Recent</a></li>-->
        <!--                <li><a class="" rel="tab_sidebar_comments">Comments</a></li>-->
        <!--                <li><a class="" rel="tab_sidebar_tags">Tags</a></li>-->
        <!--            </ul>-->
        <!--            <div class="clear"></div>-->
        <!--        </div>-->
                
        <!--        <div class="tab_container">-->
        <!--            <div class="tab_container_in">-->
                        <!-- Recent --> 
        <!--                <div style="display: none;" id="tab_sidebar_recent" class="tab_sidebar_list">					-->
        <!--                	<ul class="videolist">-->
        <!--                    	<li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video7.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video8.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>			-->
        <!--                </div> -->
                        <!-- END -->
                        <!-- Top Rated -->
        <!--                <div style="display: none;" id="tab_sidebar_comments" class="tab_sidebar_list">  -->
        <!--                    <ul class="videolist">-->
        <!--                    	<li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video8.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video7.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div> -->
                        <!-- END -->
                        <!-- Most Commented -->
        <!--                <div style="display: none;" id="tab_sidebar_tags" class="tab_sidebar_list"> -->
        <!--                    <ul class="videolist">-->
        <!--                    	<li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                    		<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video5.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">Brian</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video7.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                        	<div class="thumb">-->
        <!--                            	<a href="#"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video8.gif" alt="" /></a>-->
        <!--                            </div>-->
        <!--                            <div class="desc">-->
        <!--                            	<h5><a class="colr title" href="detail.html">Lorem ipsum dolor sit</a></h5>-->
        <!--                                <p class="viewscount">2,061,785 Views</p>-->
        <!--                                <p class="postedby">Posted By: <a href="#">RayWilliams</a></p>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
                        <!-- END -->
        <!--                <div class="clear"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="clear"></div>-->
        <!--    </div>-->
        <!--    <div class="clear"></div>-->
            <!-- Top Searches -->
        <!--    <div class="topsearches">-->
        <!--    	<h5>Top Searches</h5>-->
        <!--        <ul>-->
        <!--        	<li><a href="#" class="colr">Anne Roumanoff</a></li>-->
        <!--            <li><a href="#" class="colr">Caméra caché</a></li>-->
        <!--            <li><a href="#" class="colr">Cauet</a></li>-->
        <!--            <li><a href="#" class="colr">Eric et Ramzy</a></li>-->
        <!--            <li><a href="#" class="colr">Florence</a></li>-->
        <!--            <li><a href="#" class="colr">Foresti</a></li>-->
        <!--            <li><a href="#" class="colr">Franck Dubosc</a></li>-->
        <!--            <li><a href="#" class="colr">Francois</a></li>-->
        <!--            <li><a href="#" class="colr">Damiens</a></li>-->
        <!--            <li><a href="#" class="colr">Anthony</a></li>-->
        <!--            <li><a href="#" class="colr">Kavanagh</a></li>-->
        <!--            <li><a href="#" class="colr">Jamel</a></li>-->
        <!--            <li><a href="#" class="colr">Debbouze</a></li>-->
        <!--            <li><a href="#" class="colr">Laurent</a></li>-->
        <!--            <li><a href="#" class="colr">Ruquier</a></li>-->
        <!--            <li><a href="#" class="colr">Les Nuls</a></li>-->
        <!--            <li><a href="#" class="colr">Michaël Youn</a></li>-->
        <!--            <li><a href="#" class="colr">Omar et Fred</a></li>-->
        <!--            <li><a href="#" class="colr">Patrick Timsit</a></li>-->
        <!--            <li><a href="#" class="colr">Rémi Gaillard</a></li>-->
        <!--            <li><a href="#" class="colr">Gad ElMaleh</a></li>-->
        <!--            <li><a href="#" class="colr">Stéphane Guillon</a></li>-->
        <!--            <li><a href="#" class="colr">TF1 Replay</a></li>-->
        <!--            <li><a href="#" class="colr">chatroulette</a></li>-->
        <!--        </ul>-->
        <!--        <a href="#" class="buttonone"><span>Most Viewed Videos</span></a>-->
        <!--        <a href="#" class="buttonone"><span>Recent Videos</span></a>-->
        <!--    </div>-->
        	<!-- Advertisment -->
        <!--	<div class="adv">-->
        <!--    	<a href="#"><img src="images/adv1.gif" alt="" /></a>-->
        <!--    </div>-->
        <!--    <div class="clear"></div>-->
        <!--</div>-->
    </div>