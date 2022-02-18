<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addEmployee.html">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Search</a>
      </li>
    </ul>
    <form action="index.php" method="POST" class="form-inline my-2 my-lg-0">
      <select style="height:40px !important; border-radius:7px;" name="select">
        <option value="matricule">Matricule</option>
        <option value="nom">Nom</option>
        <option value="departemnt">Departement</option>
      </select>
      <input name="search_input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button name="search_btn" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>