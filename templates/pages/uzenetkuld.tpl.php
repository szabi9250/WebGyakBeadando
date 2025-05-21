    <div class="forma">
	<h1>Üzenetküldés</h1>
	<br/>
	<form name="kapcsolat" action="?oldal=kuldes" method="post">
            <div class="kozepre">
            <input class="inputmezo form-control" type="text" id="nev" name="nev" size="20" required minlength ="8" maxlength="20"><b>Név (minimum 8, maximum 20 betű)</b>
			<br/><br/>
            <input class="inputmezo form-control" type="email" id="email" name="email" size="20" required maxlength="40"><b>E-mail (kötelező, maximum 40 karakter)</b>
            <br/><br/>
			<input class="inputmezo form-control" type="text" id="targy" name="targy" size="20" minlength ="8"><b>Tárgy: (maximum 20 karakter)</b>
            <br/><br/>
			<textarea class="inputmezo form-control" id="szoveg" name="szoveg" cols="40" rows="10" required minlength="20"></textarea><b>Üzenet (minimum 20 karakter)</b>
			<br/><br/>
            <input class="gomb form-control" id="kuld" type="submit" value="Küld">
            </div>
    </form>
	</div>