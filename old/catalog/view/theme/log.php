<style>
a {
	color:blue;
}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<?php 
					foreach ($result as $value) {
						echo $value;
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>