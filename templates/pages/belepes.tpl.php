	<div class="forma center">
	<form action = "?oldal=belep" method = "post">
      <fieldset>
        <h1>Bejelentkezés:</h1>
        <br>
        <input type="text" class="inputmezo form-control" name="felhasznalo" placeholder="Felhasználó" required><br><br>
        <input type="password" class="inputmezo form-control" name="jelszo" placeholder="Jelszó" required><br><br>
        <input type="submit" class="gomb form-control" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Regisztrálja magát, ha még nem felhasználó!</h3>
	<br></br>
    <form action = "?oldal=regisztral" method = "post">
      <fieldset>
        <h1>Regisztráció:</h1>
        <br>
        <input type="text" class="inputmezo form-control" name="vezeteknev" placeholder="Vezetéknév" required><br><br>
        <input type="text"  class="inputmezo form-control" name="utonev" placeholder="Utónév" required><br><br>
        <input type="text"  class="inputmezo form-control" name="felhasznalo" placeholder="Felhasználónév" required><br><br>
        <input type="password"  class="inputmezo form-control" name="jelszo" placeholder="Jelszó" required><br><br>
        <input type="submit" class="gomb form-control" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
	</div>
