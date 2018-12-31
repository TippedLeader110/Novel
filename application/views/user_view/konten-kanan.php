<div class="col-md-4 col-xs-4 col-sm-4">
	<div class="container title-field">
        <center><h4> <b>Popular</b> </h4></center>
    </div>
    <div class="container konten-kanan">
        <ul class="list-unstyled">
            <li>
                <div class="row list-item">
                <table border="0">
                	<tr>
                		<td style="max-height: 70px;">
                			<a href="#">
                				<div class="novel-list-bg"> <!-- kotak tempat img -->
                        		<a href="#"> <!-- link konten -->
                            		<center>
                            			<!-- tumbnail konten -->
                            			<img src="<?php base_url() ?> source/img/book.png" class="novel-list-img">
                            		</center>
                        		</a>                    
                   			 </div>
                			</a>                			
                		</td>
                		<td>
                			<div  class="novel-list-judul">
                			<a href="#" class="title-konten" style="text-decoration: none;">
                        		<h6>Novel Title 1 with long text (lalalalalalalalalalala)</h6>                        		
                			</a>                    		
                    		</div>
                		</td>
                	</tr>
                </table>                                      
                </div>
            </li>
            <li>
                <div class="row list-item">
                <table border="0">
                	<tr>
                		<td style="max-height: 70px;">
                			<a href="#">
                				<div class="novel-list-bg"> <!-- kotak tempat img -->
                        		<a href="#"> <!-- link konten -->
                            		<center>
                            			<!-- tumbnail konten -->
                            			<img src="<?php base_url() ?> source/img/book.png" class="novel-list-img">
                            		</center>
                        		</a>                    
                   			 </div>
                			</a>                			
                		</td>
                		<td>
                			<div  class="novel-list-judul">
                			<a href="#" class="title-konten" style="text-decoration: none;">
                        		<h6>Novel Title 2 </h6>                        		
                			</a>                    		
                    		</div>
                		</td>
                	</tr>
                </table>                                      
                </div>
            </li>
            <li>
                <div class="row list-item">
                <table border="0">
                	<tr>
                		<td style="max-height: 70px;">
                			<a href="#">
                				<div class="novel-list-bg"> <!-- kotak tempat img -->
                        		<a href="#"> <!-- link konten -->
                            		<center>
                            			<!-- tumbnail konten -->
                            			<img src="<?php base_url() ?> source/img/book.png" class="novel-list-img">
                            		</center>
                        		</a>                    
                   			 </div>
                			</a>                			
                		</td>
                		<td>
                			<div  class="novel-list-judul">
                			<a href="#" class="title-konten" style="text-decoration: none;">
                        		<h6>Novel Title 3 </h6>                        		
                			</a>                    		
                    		</div>
                		</td>
                	</tr>
                </table>                                      
                </div>
            </li>
            <li>
                <div class="row list-item">
                <table border="0">
                	<tr>
                		<td style="max-height: 70px;">
                			<a href="#">
                				<div class="novel-list-bg"> <!-- kotak tempat img -->
                        		<a href="#"> <!-- link konten -->
                            		<center>
                            			<!-- tumbnail konten -->
                            			<img src="<?php base_url() ?> source/img/book.png" class="novel-list-img">
                            		</center>
                        		</a>                    
                   			 </div>
                			</a>                			
                		</td>
                		<td>
                			<div  class="novel-list-judul">
                			<a href="#" class="title-konten" style="text-decoration: none;">
                        		<h6>Novel Title 4 </h6>                        		
                			</a>                    		
                    		</div>
                		</td>
                	</tr>
                </table>                                      
                </div>
            </li>
        </ul>
    </div>
</div>


<!-- ----------------------------BAYHAQI AREA JANGAN EDIT------------------------------- -->

<?php if ($this->session->flashdata('swel')!=''): ?>
<script type="text/javascript">
    let timerInterval
        Swal({
          title: 'Sukses!',
          html: 'Berhasil login.',
          type: 'success',
          timer: 1500,
          onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              Swal.getContent().querySelector('strong')
                .textContent = Swal.getTimerLeft()
            }, 100)
          },
          onClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.timer
          ) {
            console.log('I was closed by the timer')
          }
        })
</script>
<?php endif ?>