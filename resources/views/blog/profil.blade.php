@extends('base')

@section('content')
<nav id="navigation">
    <h2>StageConnect</h2>
    <ul class="links">
        <li><a href="/">Acceuil</a></li>
        <li><a href="#">Sondage</a></li>
        <li><a href="/profil">Profil</a></li>
    </ul>
</nav>
<div class="section">
    <p class="title">Profil Utilisateur</p>
</div>
<div class="container-profil">
    <div class="profile-pic-container">
        <img src="/image/user.png" alt="Photo de profil" class="profile-image">
    </div>
    <div class="info-display">
        <div class="info-item">
            <i class="material-icons">person</i>
            <span id="display-nom">Dupont</span>
            <i class="material-icons edit-icon" onclick="editField('nom')">edit</i>
        </div>
        <div class="info-item">
            <i class="material-icons">person_outline</i>
            <span id="display-prenom">Jean</span>
            <i class="material-icons edit-icon" onclick="editField('prenom')">edit</i>
        </div>
        <div class="info-item">
            <i class="material-icons">email</i>
            <span id="display-email">jean.dupont@example.com</span>
            <i class="material-icons edit-icon" onclick="editField('email')">edit</i>
        </div>
        <div class="info-item">
            <i class="material-icons">school</i>
            <span id="display-classe">Classe A</span>
            <i class="material-icons edit-icon" onclick="editField('classe')">edit</i>
        </div>
        <div class="info-item">
            <i class="material-icons">business</i>
            <span id="display-ecole">École XYZ</span>
            <i class="material-icons edit-icon" onclick="editField('ecole')">edit</i>
        </div>
        <div class="info-item">
            <i class="material-icons">grade</i>
            <span id="display-niveau">Niveau 1</span>
            <i class="material-icons edit-icon" onclick="editField('niveau')">edit</i>
        </div>
    </div>
    <div id="message" class="message"></div>
</div>

<!-- Formulaire caché pour modifier les informations -->
<div id="edit-form" class="edit-form hidden">
    <div class="form-container">
        <form id="form-edit" onsubmit="saveChanges(event)">
            <h3>Modifier l'information</h3>
            <input type="hidden" id="edit-field">
            <div class="form-group">
                <label for="edit-value">Nouvelle valeur:</label>
                <input type="text" id="edit-value" class="form-control">
            </div>
            <button type="submit" class="save-button">Sauvegarder</button>
            <button type="button" class="cancel-button" onclick="hideEditForm()">Annuler</button>
        </form>
    </div>
</div>

<script>
    function editField(field) {
    var value = document.getElementById('display-' + field).textContent;
    document.getElementById('edit-field').value = field;
    document.getElementById('edit-value').value = value;
    document.getElementById('edit-form').classList.remove('hidden');
}

function hideEditForm() {
    document.getElementById('edit-form').classList.add('hidden');
}

function saveChanges(event) {
    event.preventDefault();
    var field = document.getElementById('edit-field').value;
    var newValue = document.getElementById('edit-value').value;

    document.getElementById('display-' + field).textContent = newValue;
    document.getElementById('edit-form').classList.add('hidden');

    // Ajoutez ici votre logique pour sauvegarder les changements côté serveur si nécessaire
}

</script>


@endsection
