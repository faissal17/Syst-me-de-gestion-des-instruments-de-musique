<?php

require('scripts.php')

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Systme de gestion des instruments de musique</title>
  <link rel="stylesheet" href="styles.css">
  <!-- font awesom -->
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <script src="https://kit.fontawesome.com/19f21012c2.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"/>

</head>
<body>
<style>
body{
  background-image: url(music.jpg);
}
</style>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Music function</h4>
            <p class="text-muted">music is not just a rytheme music is art, is a world where evry one can show his talent, evry one is free,
                evry one is epic in his own way, you can start show your talent by simple things, here where evrything simple creat a hug effect.
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <ul class="list-unstyled">
              <h3 class="text-light">profil</h3>
              <li><a href="#" class="text-white text-decoration-none">Home</a></li>
              <li><a href="#" class="text-white text-decoration-none">setting</a></li>
              <li><a href="#" class="text-white text-decoration-none">help</a></li>
              <li><a href="login.php" class="text-white text-decoration-none">log out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong><i class="fa-solid fa-music"></i> music</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
</header>
<div class="d-flex justify-content-end mt-3">
<button type="button" data-bs-toggle="modal" data-toggle="modal" data-target="#exampleModal" class="btn btn-secondary btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add instruments</button>
</div>

<div class="container-fluid mt-5">
    <div class="row w-100">
       <?php
          getinser();
        ?>
     </div>
</div>


<!-- task modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add instruments</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
              <input type="file" name="img"><br><br>
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" name="title" class="form-control title_tasks"/>
							</div>
							<div class="mb-3">
								<label class="form-label">price</label>
								<input type="number" name="price" class="form-control title_tasks"/>
							</div>
							<div class="mb-3">
								<label class="form-label">quantity</label>
								<input type="number" name="quantity" class="form-control title_tasks"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Date</label>
								<input name="date" type="datetime-local" class="form-control task_datetime"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea name="description" class="form-control description" rows="10"></textarea>
							</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-dismiss="modal">Cancel</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

 <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
  