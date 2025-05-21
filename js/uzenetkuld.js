        document.getElementById('kapcsolatForm').addEventListener('submit', function(e) {
            const nev = document.getElementById('nev').value.trim();
            const email = document.getElementById('email').value.trim();
            const targy = document.getElementById('targy').value.trim();
            const szoveg = document.getElementById('szoveg').value.trim();

            let hiba = [];

            if (nev.length < 8 || nev.length > 20) {
                hiba.push("Név: A névnek 8 és 20 karakter között kell lennie.");
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email) || email.length > 40) {
                hiba.push("Érvénytelen e-mail cím.");
            }

            if (targy.length < 8 || targy.length > 20) {
                hiba.push("Tárgy: A tárgynak 8 és 20 karakter között kell lennie.");
            }

            if (szoveg.length < 20) {
                hiba.push("Üzenet: Az üzenetnek legalább 20 karakter hosszúnak kell lennie.");
            }

            if (hiba.length > 0) {
                e.preventDefault();
                alert(hiba.join("\n")); 
            }
        });