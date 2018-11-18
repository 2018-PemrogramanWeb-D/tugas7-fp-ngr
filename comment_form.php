<?php 
	echo'<div class="row">
		<div class="col-md-8">
			<div class="comment-form">
					';
						if($_SESSION["loginstatus"] == 1)
						echo'<form method ="POST" >
							<textarea placeholder="What are you doing right now?" name="content-comment"></textarea>
							<button type="submit" class="btn btn-success green" name="submit-comment"> Share</button>
						</form>';
						else echo '<h3>Anda perlu login untuk berkomentar</h3>';
	echo '	
			</div>
		</div>
    </div>';
?>