   <div class="forma">
	<h1>Üzenetküldés</h1>
	<br/>
	<form name="kapcsolat" id ="kapcsolatForm" action="?oldal=kuldes" method="post">
            <div class="kozepre">
            <input class="inputmezo form-control" type="text" id="nev" name="nev" size="20" placeholder="Név"><b>Név (minimum 8, maximum 20 betű)</b>
			<br/><br/>
            <input class="inputmezo form-control" type="email" id="email" name="email" size="20" placeholder="Email cím"><b>E-mail (kötelező, maximum 40 karakter)</b>
            <br/><br/>
			<input class="inputmezo form-control" type="text" id="targy" name="targy" placeholder="Tárgy"><b>Tárgy: (maximum 20 karakter)</b>
            <br/><br/>
			<textarea class="inputmezo form-control" id="szoveg" name="szoveg" cols="40" rows="10" placeholder="Üzenet"></textarea><b>Üzenet (minimum 20 karakter)</b>
			<br/><br/>
            <input class="gomb form-control" id="kuld" type="submit" value="Küld">
            </div>
    </form>
 <script src="js/uzenetkuld.js"></script>
	</div>