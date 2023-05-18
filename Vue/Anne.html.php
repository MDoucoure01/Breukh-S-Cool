<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Anne.css">

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
				<!-- <select name="" id="" class="btn-download">
                    <option value="Selection">Selectionnner un option</option>
                    <option value="Primaire">Primaire</option>
                    <option value="Secondaire">Secondaire</option>
                    <option value="Lycee">Lycee</option>
                </select> -->
			</div>

			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Primaire</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
                        <button class="Ajout">Ajout</button>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nom</th>
								<th>Nombre de classe</th>
								<!-- <th colspan="2">Enum</th> -->
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Primaire</p>
								</td>
								<td>7</td>
								<!-- <td><span class="status completed">CI A</span></td>
								<td><span class="status completed">CI B</span></td> -->
							</tr>
							<tr>
								<td>
									<p>Secondaire</p>
								</td>
								<td>6</td>
								<!-- <td><span class="status completed">CI A</span></td>
								<td><span class="status completed">CI B</span></td> -->
							</tr>
							<tr>
								<td>
									<p>Secondaire Superieur</p>
								</td>
								<td>3</td>
								<!-- <td><span class="status completed">CI A</span></td>
								<td><span class="status completed">CI B</span></td> -->
							</tr>
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>