<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Eleve.css">

	<title>Breukh'S Cool</title>
</head>
<body>
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
				<a href="Modal.html.php">
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
					<h1>Gestion des Eléves</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Gestion des Eléves</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
                <select name="" id="" class="btn-download">
                    <option value="Selection">Selectionnner un option</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire">Secondaire</option>
                    <option value="Lycee">Lycee</option>
                </select>
			</div>

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-user-detail'></i>
					<span class="text">
						<h3>1020</h3>
						<p>Nombre Eleve</p>
					</span>
				</li>
				<li>
                    <i class='bx bxs-school' ></i> -->
					<!-- <i class='bx bxs-group' ></i> -->
					<!-- <span class="text">
						<h3>34</h3>
						<p>Nombre Classe</p>
					</span>
				</li>
				<li>
                    <i class='bx bxs-group' ></i> -->
					<!-- <i class='bx bxs-dollar-circle' ></i> -->
					<!-- <span class="text">
						<h3>100</h3>
						<p>Total A.Interne</p>
					</span>
				</li>
			</ul> -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Apprenant Primaire</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <button class="Ajout">Ajout</button>
					</div>
					<!-- <table>
						<thead>
							<tr>
								<th>Apprenant</th>
								<th>Date de Naissance</th>
								<th>Classe</th>
								<th>Numéro</th>
								<th>Annee Scolaire</th>
								<th  colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Mohamed Doucoure</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">CI A</span></td>
								<td><span class="status completed">200</span></td>
								<td><span class="status completed">2020/2021</span></td>
								<td><button class="status completed">Aff.</button></td>
								<td><button class="status completed">Mod.</button></td>
								<td><button class="status completed">Sup.</button></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Fatou Sylla</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">CI B</span></td>
                                <td><span class="status completed">200</span></td>
								<td><span class="status completed">2020/2021</span></td>
								<td><button class="status completed">Aff.</button></td>
								<td><button class="status completed">Mod.</button></td>
								<td><button class="status completed">Sup.</button></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Moussa Sagna</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">CM2 A</span></td>
                                <td><span class="status completed">200</span></td>
								<td><span class="status completed">2020/2021</span></td>
								<td><button class="status completed">Aff.</button></td>
								<td><button class="status completed">Mod.</button></td>
								<td><button class="status completed">Sup.</button></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Fadel Ndiaye</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">CM2 B</span></td>
                                <td><span class="status completed">200</span></td>
								<td><span class="status completed">2020/2021</span></td>
								<td><button class="status completed">Aff.</button></td>
								<td><button class="status completed">Mod.</button></td>
								<td><button class="status completed">Sup.</button></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Lamine Fall</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">CM2 B</span></td>
                                <td><span class="status completed">200</span></td>
								<td><span class="status completed">2020/2021</span></td>
								<td><button class="status completed">Aff.</button></td>
								<td><button class="status completed">Mod.</button></td>
								<td><button class="status completed">Sup.</button></td>
							</tr>
						</tbody>
					</table> -->
                    <div class="formulaire">
                        <form>
                            <div class="form-group">
                              <label for="nom">Nom :</label>
                              <input type="text" id="nom" name="nom" required>
                            </div>
                        
                            <div class="form-group">
                              <label for="prenom">Prénom :</label>
                              <input type="text" id="prenom" name="prenom" required>
                            </div>
                        
                            <div class="form-group">
                              <label for="date_naissance">Date de naissance :</label>
                              <input type="date" id="date_naissance" name="date_naissance" required>
                            </div>
                        
                            <div class="form-group">
                              <label for="classe">Classe :</label>
                              <input type="text" id="classe" name="classe" required>
                            </div>
                        
                            <div class="form-group">
                              <label for="niveau">Niveau :</label>
                              <select id="niveau" name="niveau" required>
                                <option value="">Sélectionnez un niveau</option>
                                <option value="CP">CP</option>
                                <option value="CE1">CE1</option>
                                <option value="CE2">CE2</option>
                                <option value="CM1">CM1</option>
                                <option value="CM2">CM2</option>
                              </select>
                            </div>
                        
                            <div class="form-group">
                              <label for="annee_scolaire">Année scolaire :</label>
                              <input type="date" id="annee_scolaire" name="annee_scolaire" required>
                            </div>
                        
                            <div class="form-group">
                              <label for="numero">Numéro :</label>
                              <input type="text" id="numero" name="numero" required>
                            </div>
							<div class="form-group">
                              <label for="niveau">Type :</label>
                              <select id="niveau" name="niveau" required>
                                <option value="">Sélectionnez un Type</option>
                                <option value="CP">Interne</option>
                                <option value="CE1">Externe</option>
                              </select>
                            </div>
							<div class="form-group">
								<input type="submit" value="Ajouter">
								<input type="submit" value="Annuler">
							</div>
                          </form>
                    </div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>