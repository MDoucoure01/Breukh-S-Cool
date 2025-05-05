
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Niveau.css">

	<title>Breukh'S Cool</title>
</head>
<body>
<div class="contener">
		<div class="cont">
			<input type="text" name="modifi">
			<div class="boutons">
				<form action="post">
					<input type="hidden" name="libelle" value="" id="idyear">
					<input type="submit" value="Modifier" name="mod" class="Modifier">
					<input type="submit" value="Anuller" class="Anuller">
				</form>
			</div>
		</div>
	</div>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="dash.html.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Breukh'S Cool</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dash.html.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="AjoutEleve">
                    <i class='bx bxs-user-detail'></i>
					<!-- <i class='bx bxs-shopping-bag-alt' ></i> -->
					<span class="text">Gestion Eléves</span>
				</a>
			</li>
			<li>
				<a href="classe.html.php">
                    <i class='bx bxs-school' ></i>
					<!-- <i class='bx bxs-doughnut-chart' ></i> -->
					<span class="text">Gestion Des Classes</span>
				</a>
			</li>
			<li>
				<a href="niveau.html.php">
                    <i class='bx bxs-left-top-arrow-circle' ></i>
					<!-- <i class='bx bxs-message-dots' ></i> -->
					<span class="text">Gestion Des Niveaux</span>
				</a>
			</li>
			<li>
				<a href="Anne.html.php">
                    <i class='bx bxs-graduation' ></i>
					<!-- <i class='bx bxs-group' ></i> -->
					<span class="text">Gestion Annee Scolaire</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Mon Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
                    <i class='bx bxs-log-out' ></i>
					<!-- <i class='bx bx-horizontal-left' ></i> -->
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Gestion des Niveaux</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Gestion des Niveaux</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Annee Scolaire</h3>
						<form action="" method="post" class="block">
							<input type="text" class="entree" name="libelle" placeholder="aaaa/AAAA">
							<button class="Ajout" name="ok">Ajout</button>
  						</form>
					</div>
					<?php
					var_dump ($data);
					?>
					<table>
						<thead>
							<tr>
								<th>libelle</th>
								<th>Status</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							
							<?php foreach($data as $key => $ligne): ?>
							<tr>
								<td><?php echo $ligne['libelle']; ?></td>
								<td><?php echo $ligne['status']; ?></td>
								<td>
									<form method="post" action="">
										<input type="hidden" name="<?php echo $ligne['libelle']; ?>" value="aff">
										<button type="submit" class="status completed AjoutModifSUpp" name="afficher">Aff.</button>
									</form>
								</td>
								<td>

									<input type="hidden" name="libelle" value="<?php echo $ligne['libelle']; ?>">
									<button type="submit" class="status completed AjoutModifSUpp modification" name="Modifier">Modif.</button>
								</td>
								<td>
									<input type="hidden" name="libelle" value="<?php echo $ligne['libelle']; ?>">
									<button type="submit" class="status completed AjoutModifSUpp" name="supprimer">Sup.</button>
								</td>
							</tr>
							<?php endforeach; ?>
							<?php
							if (isset($_POST['Modifier'])) {
								var_dump($_POST['libelle']);
							}
							?>
						</tbody>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>