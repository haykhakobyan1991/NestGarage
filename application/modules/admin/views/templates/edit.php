
<?
$controller = $this->router->fetch_class();
$page =  $this->router->fetch_method();
$url=base_url().'admin/'.$controller.'/'.$this->uri->segment(3);
?>


<script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/jquery/choosen/chosen.jquery.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/jquery/choosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>assets/jquery/choosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?=base_url()?>assets/jquery/jquery.dragsort-0.5.2.min.js"></script>
<!--<script src="--><?//=base_url()?><!--application/js/base.js"></script>-->
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/ckfinder/ckfinder.js"></script>
<script src="<?=base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>



		<script type='text/javascript'>
			var n = 0;
			var loadText = 'Loading';
			var interval = null;
			function start_load() {
				if(n!=3) {
					$('#loading').append('.');
					n++;
				} else {
					n=0;
					$('#loading').html(loadText);				
				}
			}
			
			function close_message() {
				setTimeout(function(){ $('.success, .error').addClass('d_none'); }, 3000);
			}
			
			function scroll_top(){
				$('html, body').animate({scrollTop:0},700);
			}
			
			function loading(e='start'){
				if (e=='start') {
					$('#submit').addClass('d_none');
					$('#loading, #head_load').removeClass('d_none');
					interval = setInterval('start_load()',1000);
				} else {
					$('#loading').addClass('d_none');
					$('#loading').html(loadText);
					$('#submit').removeClass('d_none');
					$('#head_load').addClass('d_none');
					clearInterval(interval); 
				}
			}
			
			function progressHandlingFunction(e){
				if(e.lengthComputable){
					var percentComplete = e.loaded/e.total*100;
					$('#head_load').css('width', percentComplete+'%');
				}
			}
			
			function beforeSendHandler(e){
				$('.success, .error').addClass('d_none');
				loading();
			}
			
			function completeHandler(e){
				var error = '';
				$('.fe_err').removeClass('fe_err');

				if ($.isArray(e.error.elements)) {

					scroll_top();
					$.each(e.error.elements, function( index ) {

						$.each(e.error.elements[index], function( index, value  ) {
							if(value != '') {
									
								$("input[name='" + index + "']").addClass('fe_err');
								$("select[name='" + index + "']").parent('label').children('div').addClass('fe_err');
								error += value + ' ';
							}					
						});
					});
				} else {
					scroll_top();
					error = e.error;
				}


				
				
				if (e.success == '1') {
					scroll_top();
					$('.error').addClass('d_none');
					$('.success').removeClass('d_none');
					$('.success').html(e.message);
					var url = "<?=$url?>";
					$(location).attr('href',url);
					loading('stop');
					close_message();					
				} else {
					scroll_top();
					$('.success').addClass('d_none');
					$('.error').removeClass('d_none');
					$('.error').html(error);
					loading('stop');
				}
			}
						
			function errorHandler(e){
				scroll_top();
				$('.error').removeClass('d_none');
				$('.error').html(e);
				loading('stop');
			}
		
			$(document).ready(function() {
				$('#submit').click(function() {

					var url = "<?=base_url().'admin/'.$controller?>/<?=$this->uri->segment(3).'_ax'?>";		
					var formData = new FormData($('form')[0]);
						
					$.ajax({
						url: url,  
						type: 'POST',
						dataType: 'json',
						xhr: function() {  
							var myXhr = $.ajaxSettings.xhr();
							if(myXhr.upload){
								myXhr.upload.addEventListener('progress', progressHandlingFunction, false); 						
							}
							return myXhr;
						},
							beforeSend: beforeSendHandler,
							success: completeHandler,					
							error: errorHandler,					
							data: formData,
							cache: false,
							contentType: false,
							processData: false
					});	
				});			
			});
	</script>
