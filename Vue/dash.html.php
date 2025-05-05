<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Breukh'S Cool</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
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
				<a href="/niveau">
                    <i class='bx bxs-left-top-arrow-circle' ></i>
					<!-- <i class='bx bxs-message-dots' ></i> -->
					<span class="text">Gestion Des Niveaux</span>
				</a>
			</li>
			<li>
				<a href="AjoutAnnee">
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-user-detail'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Nombre Eleve</p>
					</span>
				</li>
				<li>
                    <i class='bx bxs-school' ></i>
					<!-- <i class='bx bxs-group' ></i> -->
					<span class="text">
						<h3>34</h3>
						<p>Nombre Classe</p>
					</span>
				</li>
				<li>
                    <i class='bx bxs-group' ></i>
					<!-- <i class='bx bxs-dollar-circle' ></i> -->
					<span class="text">
						<h3>100</h3>
						<p>Total A.Interne</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Apprenant Interne</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Apprenant</th>
								<th>Date de Naissance</th>
								<th>Numéro</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Mohamed Doucoure</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">24</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Fatou Sylla</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">37</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Moussa Sagna</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">44</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Fadel Ndiaye</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">67</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Lamine Fall</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">99</span></td>
							</tr>
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