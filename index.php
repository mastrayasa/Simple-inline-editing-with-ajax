
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Simple inline editing with ajax</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/edit-inline.css">
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 
	 
	 
</head>
<body>   
<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-push-3"> 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">Pesanan Masuk</h4>
				</div>
				<div id="medias-list" class="panel-box-table">
					<table class="table table-hover" style="margin-bottom:0">
						<?php for($i = 1; $i<= 6; $i++ ){ ?>
						<tr> 
							<td class="media-item"> 
								<div class="media">
									<div class="media-left"> 
										<img class="media-object" src="image/Placeholder.jpg" alt="gambar"/> 
									</div>
									<div class="media-body"> 
											<small class="text-muted pull-right"><i class="fa fa-clock-o"></i>1 Jam yang lalu </small>
											<h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
											 
											 
											<div class="toggle-edit" id="media-<?php echo $i; ?>">
												<div class="edit-display text-muted" style="font-size:90%">
													Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. 
												</div>
																	
												<div class="edit-composer">
													<form class="media-form">
														<input name="id" value="<?php echo $i; ?>" type="hidden">
														<p><textarea name="des" rows="4" class="form-control input-sm">Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat. </textarea></p>
														<p>
															<button class="btn-change btn-sm btn btn-default" type="submit">Simpan Perubahan</button>
														</p>
													</form>
												</div>
											</div> 
										<div class="btn-group pull-right">
											<button data-toggle_edit="media-<?php echo $i; ?>" class="btn btn-link btn-xs"><i class="fa fa-pencil"></i> Edit</button>
										</div>											
										 
									</div>
								</div> 
							</td>
						</tr>
						<?php } ?>
					</table>	
				</div>
				<div class="panel-footer text-center">
					www.sibangstudio.com
				</div>
			</div> 
		</div>  	
	</div>			
</div>			
<script src="js/edit-inline.js"></script>
</body>
</html>