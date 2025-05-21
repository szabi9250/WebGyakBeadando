    <div class="forma center">
	<h1>Üzenetküldés</h1>
	<form name="kapcsolat" action="?oldal=kuldes" method="post">
            <div class="kozepre">
            <input class="inputmezo" type="text" id="nev" name="nev" size="20" required minlength = "8" maxlength="20" pattern="[A-Za-z]+"><b>Név (minimum 8, maximum 20 betű):</b>
            </div>
            <div class="kozepre">
            <label><input class="inputmezo" type="email" id="email" name="email" size="20" required maxlength="40"><b>E-mail (kötelező, maximum 40 karakter):</b>
            </div>
			<div class="kozepre">
            <label><input class="inputmezo" type="text" id="targy" name="targy" size="20" minlength = "8" pattern="[A-Za-z]+"><b>Tárgy: (maximum 20 karakter)</b>
            </div>
			<div class="kozepre">
            <textarea class="inputmezo" id="szoveg" name="szoveg" cols="40" rows="10" required minlength="20"></textarea><b>Üzenet (minimum 20 karakter):</b>
            </div>
            <div class="kozepre">
            <input class="inputmezo" id="kuld" type="submit" value="Küld"></input>
            </div>
    </form>
	</div>