@extends('base')

@section('content')
<div class="connexion-container">
    <div class="connexion-titre">
        <h1>StageConnect</h1>
        <p>Optimisez votre parcours professionnel avec Stage Connect, votre allié pour trouver les stages qui propulseront votre carrière vers de nouveaux sommets!</p>
    </div>
    <div class="connexion-content">
        <div class="connexion-image" style="text-align: center;">
            <img src="{{ asset('image/stage.png') }}" alt="Description de l'image" style="max-width: 100%; height: auto;">
        </div>
        <div class="connexion-form">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="connexion-section">
                @csrf
                <div class="connexion-field">
                    <label class="label">Nom d'Utilisateur</label>
                    <div class="control">
                        <input class="input" type="email" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="connexion-field">
                    <label class="label">Mot de passe</label>
                    <div class="control">
                        <input class="input" type="password" name="password" required>
                    </div>
                </div>
                <div class="connexion-field" style="margin-top: 20px">
                    <div class="control">
                        <button class="connexion-button is-link" type="submit">Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="connexion-section" style="margin-top: 20px; text-align: center;">
                <p>Avez-vous un compte ? <a href="/inscription" style="color: #db7c1d">Créer un compte</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
