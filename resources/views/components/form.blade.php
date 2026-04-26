<form action="/quote" method="POST">
    <!-- Identité -->
    <div class="form-divider"><span>Vos coordonnées</span></div>
    @csrf
    <div class="fields-row">
        <div class="field-group">
            <label for="prenom">Prénom <span class="label-req">*</span></label>
            <div class="field-wrap">
                <input type="text" id="prenom" name="first_name" placeholder="Jean"
                    value="{{ old('first_name') }}" />
            </div>
            @error('first_name')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
        <div class="field-group">
            <label for="nom">Nom <span class="label-req">*</span></label>
            <div class="field-wrap">
                <input type="text" id="nom" name="last_name" placeholder="Dupont"
                    value="{{ old('last_name') }}" />
            </div>
            @error('last_name')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
        <div class="field-group">
            <label for="email">Adresse e-mail <span class="label-req">*</span></label>
            <div class="field-wrap">
                <input type="email" id="email" name="email" placeholder="jean.dupont@email.fr"
                    value="{{ old('email') }}" />
            </div>
            @error('email')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
        <div class="field-group">
            <label for="tel">Téléphone <span class="label-req">*</span></label>
            <div class="field-wrap">
                <span class="phone-prefix">🇫🇷 +33</span>
                <input type="tel" id="tel" name="phone" class="phone-input" placeholder="6 12 34 56 78"
                    value="{{ old('phone') }}" />
            </div>
            @error('phone')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <!-- Catégories -->
    <div class="form-divider"><span>Votre besoin</span></div>

    <div class="field-group">
        <label>Catégorie(s) concernée(s) <span class="label-req">*</span></label>
        <div style="margin-bottom:6px; font-size:0.75rem; color:var(--gris);">Sélectionnez une ou plusieurs options
        </div>
        <div class="categories-grid">
            <div class="cat-item">
                <input type="checkbox" id="cat-travaux" name="categories[]" value="travaux" />
                <label class="cat-label" for="cat-travaux">
                    <div class="cat-check"></div>
                    Service travaux
                </label>
            </div>
            <div class="cat-item">
                <input type="checkbox" id="cat-airless" name="categories[]" value="airless" />
                <label class="cat-label" for="cat-airless">
                    <div class="cat-check"></div>
                    Formation airless
                </label>
            </div>
            <div class="cat-item">
                <input type="checkbox" id="cat-enduits" name="categories[]" value="enduits" />
                <label class="cat-label" for="cat-enduits">
                    <div class="cat-check"></div>
                    Formation enduits peinture
                </label>
            </div>
            <div class="cat-item">
                <input type="checkbox" id="cat-diag" name="categories[]" value="diagnostic" />
                <label class="cat-label" for="cat-diag">
                    <div class="cat-check"></div>
                    Diagnostics travaux
                </label>
            </div>
            <div class="cat-item">
                <input type="checkbox" id="cat-accomp" name="categories[]" value="accompagnement" />
                <label class="cat-label" for="cat-accomp">
                    <div class="cat-check"></div>
                    Accompagnement travaux
                </label>
            </div>
            <div class="cat-item">
                <input type="checkbox" id="cat-real" name="categories[]" value="realisation" />
                <label class="cat-label" for="cat-real">
                    <div class="cat-check"></div>
                    Réalisation
                </label>
            </div>
            @error('categories')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <!-- Message -->
    <div class="form-divider"><span>Détails du projet</span></div>

    <div class="fields-row">
        <div class="field-group full">
            <label for="message">Description du projet <span class="label-req">*</span></label>
            <div class="textarea-wrap">
                <textarea id="message" name="message"
                    placeholder="Décrivez votre projet, la surface approximative, vos contraintes, vos délais souhaités…"
                    maxlength="1000" oninput="document.getElementById('count').textContent=this.value.length"></textarea>
                <span class="char-count"><span id="count">0</span> / 1000</span>
            </div>
            @error('message')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <!-- RGPD + submit -->
    {{-- <div style="margin-top:28px; display:flex; align-items:flex-start; gap:12px;">
        <input type="checkbox" id="rgpd" name="rgpd" style="width:18px; min-width:18px; height:18px; padding:0; margin-top:2px; accent-color:var(--ocre);" required/>
        <label for="rgpd" style="font-size:0.78rem; color:var(--gris); line-height:1.6; text-transform:none; letter-spacing:0; font-weight:400; cursor:pointer;">
          J'accepte que mes données soient traitées dans le cadre de cette demande, conformément à la <a href="#" style="color:var(--ocre); text-decoration:none;">politique de confidentialité</a>. <span style="color:var(--ocre);">*</span>
        </label>
      </div> --}}

    <div class="submit-row">
        <p class="submit-note">
            <strong>Vos données sont protégées.</strong> Elles ne sont jamais revendues et sont utilisées uniquement
            pour traiter votre demande.
        </p>
        <button type="submit" class="btn-submit">
            <span>Envoyer ma demande</span>
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="2" y1="8" x2="14" y2="8" />
                <polyline points="9 3 14 8 9 13" />
            </svg>
        </button>
    </div>
</form>
