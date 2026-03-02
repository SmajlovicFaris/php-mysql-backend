function validateForm() {
    let ime = document.getElementById("ime").value.trim();
    let prezime = document.getElementById("prezime").value.trim();
    let email = document.getElementById("email").value.trim();

    if (ime.length < 2) {
        alert("Ime mora imati najmanje 2 slova!");
        return false;
    }

    if (prezime.length < 2) {
        alert("Prezime mora imati najmanje 2 slova!");
        return false;
    }

    return true;
}

function confirmDelete() {
    return confirm("Da li ste sigurni da želite obrisati korisnika?");
}