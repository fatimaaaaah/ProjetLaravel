@extends('base')

@section('content')
<div class="container">
    <div class="titre-ins">
        <h1>StageConnect</h1>
        <p>Optimisez votre parcours professionnel avec Stage Connect, votre allié pour trouver les stages qui propulseront votre carrière vers de nouveaux sommets!</p>
    </div>

    <div class="form-container">
        <form id="inscription-form" action="/inscription" method="post">
            @csrf
            <div class="form-columns">
                <div class="left-section">
                    <label for="matricule">Nom</label>
                    <input type="text" id="matricule" name="matricule" required>
                    <label for="model">Prénom(s)</label>
                    <input type="text" id="model" name="model" required>
                    <label for="brand">Email</label>
                    <input type="email" id="brand" name="brand" required>
                    <label class="label">Mot de passe</label>
                    <div class="control">
                        <input class="input" type="password" name="password" value="{{ old('password') }}">
                    </div>
                    <label class="label">Confirmer Mot de passe</label>
                    <div class="control">
                        <input class="input" type="password" name="password_confirmation">
                    </div>
                </div>

                <div class="right-section">
                    <label for="brand">Classe</label>
                    <input type="text" id="classe" name="classe" required>
                    <label for="motif">École</label>
                    <div class="control">
                        <div class="select">
                            <select name="ecole">
                                <option value=""></option>
                                <option value="ESP">ESP</option>
                                <option value="Rose Dieng Lab">Rose Dieng Lab</option>
                                <option value="DEFAR Sci">DEFAR Sci</option>
                                <option value="Bakeli">Bakeli</option>
                                <option value="Xarala">Xarala</option>
                            </select>
                        </div>
                    </div>
                    <label for="motif">Domaine</label>
                    <div class="control">
                        <div class="select">
                            <select name="domaine">
                                <option value=""></option>
                                <option value="Informatique">Informatique</option>
                                <option value="Réseau Télécom">Réseau Télécom</option>
                                <option value="Mécanique">Mécanique</option>
                                <option value="Electronique">Electronique</option>
                            </select>
                        </div>
                    </div>
                    <label for="motif">Niveau</label>
                    <div class="control">
                        <div class="select">
                            <select name="niveau">
                                <option value=""></option>
                                <option value="Bac + 1">Bac + 1</option>
                                <option value="Bac + 2">Bac + 2</option>
                                <option value="Bac + 3">Bac + 3</option>
                                <option value="Bac + 4">Bac + 4</option>
                                <option value="Bac + 5">Bac + 5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons-container">
                <button type="submit" class="btn confirm">S'inscrire</button>
            </div>
        </form>
    </div>
</div>
@endsection
