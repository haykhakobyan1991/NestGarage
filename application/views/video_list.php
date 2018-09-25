
<div id="content_sec">
    	<!-- Column 1 -->
        <div class="col1">
            <div class="allvideos_heading">
            	<h3>Սերիալներ</h3>
                <p></p>
            </div>
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="whitesec_search">
                <div class="smallsearch">
                	<input type="text" value="" id="searchBox3" name="s" class="bar" />
            		<a href="#" class="buttonone"><span>Փնտրել</span></a>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
                <!-- Video Listing -->
                <ul class="display">
                <?foreach ($result AS $row) {?>     
                	<li>
                    	<a href="<?=(isset($row['image']) ?  base_url().'video_list/'.$row['alias'] : base_url().'video/'.$row['alias'])?>" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img style="width: 155px;  height: 113px;" src="
                    		<?=(isset($row['image']) ? base_url().'uploads/menu/big/'.$row['image'] : base_url().'uploads/thumbs/'.$row['photo'])?>
                    		" alt="" /></a>
                        <div class="bigsec"> 
                        	<h4><a href="<?=(isset($row['image']) ?  base_url().'video_list/'.$row['alias'] : base_url().'video/'.$row['alias'])?>" class="colr"><?=$row['title']?></a></h4>
                            <div class="clear"></div>
                            <p class="txt">
                            	<?=$row['text']?>
                            </p>
                            <div class="clear"></div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="<?=(isset($row['image']) ?  base_url().'video_list/'.$row['alias'] : base_url().'video/'.$row['alias'])?>" class="colr"><?=$row['title']?></a></h6>
                            <div class="clear"></div>
                        </div>
                    </li>
                <?}?>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col2">
        </div>
    </div>