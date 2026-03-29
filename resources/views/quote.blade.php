<x-layout title="Demande de devis">
<section class="devis-hero">
    <div class="hero-deco">
        <div class="hero-dot"></div>
        <div class="hero-dot"></div>
    </div>
    <div class="hero-lines"></div>

    <div class="hero-inner">
        <div class="hero-eyebrow">Demande de devis</div>
        <h1 class="hero-title">
        Votre projet,<br><em>notre expertise.</em>
        </h1>
        <p class="hero-subtitle">
        Décrivez-nous votre chantier ou votre besoin de formation. Nous vous répondons sous 24h avec une estimation claire et détaillée, sans engagement.
        </p>
        <div class="hero-badges">
        <span class="badge">Réponse sous 24h</span>
        <span class="badge">Devis gratuit</span>
        <span class="badge">Sans engagement</span>
        </div>
    </div>
</section>

<!-- ══════════ CORPS ══════════ -->
<div class="devis-body">

  <!-- FORMULAIRE -->
  <div class="form-card">
    <h2 class="form-section-title">Votre demande</h2>
    <p class="form-section-sub">Tous les champs marqués d'un <span style="color:var(--ocre)">*</span> sont obligatoires.</p>

    <form action="#" method="post" novalidate>

      <!-- Identité -->
      <div class="form-divider"><span>Vos coordonnées</span></div>

      <div class="fields-row">
        <div class="field-group">
          <label for="prenom">Prénom <span class="label-req">*</span></label>
          <div class="field-wrap">
            <span class="field-icon">👤</span>
            <input type="text" id="prenom" name="prenom" placeholder="Jean" required/>
          </div>
        </div>
        <div class="field-group">
          <label for="nom">Nom <span class="label-req">*</span></label>
          <div class="field-wrap">
            <span class="field-icon">👤</span>
            <input type="text" id="nom" name="nom" placeholder="Dupont" required/>
          </div>
        </div>
        <div class="field-group">
          <label for="email">Adresse e-mail <span class="label-req">*</span></label>
          <div class="field-wrap">
            <span class="field-icon">✉️</span>
            <input type="email" id="email" name="email" placeholder="jean.dupont@email.fr" required/>
          </div>
        </div>
        <div class="field-group">
          <label for="tel">Téléphone <span class="label-req">*</span></label>
          <div class="field-wrap">
            <span class="phone-prefix">🇫🇷 +33</span>
            <input type="tel" id="tel" name="tel" class="phone-input" placeholder="6 12 34 56 78" required/>
          </div>
        </div>
      </div>

      <!-- Catégories -->
      <div class="form-divider"><span>Votre besoin</span></div>

      <div class="field-group">
        <label>Catégorie(s) concernée(s) <span class="label-req">*</span></label>
        <div style="margin-bottom:6px; font-size:0.75rem; color:var(--gris);">Sélectionnez une ou plusieurs options</div>
        <div class="categories-grid">
          <div class="cat-item">
            <input type="checkbox" id="cat-travaux" name="categories[]" value="travaux"/>
            <label class="cat-label" for="cat-travaux">
              <div class="cat-check"></div>
              Service travaux
            </label>
          </div>
          <div class="cat-item">
            <input type="checkbox" id="cat-airless" name="categories[]" value="airless"/>
            <label class="cat-label" for="cat-airless">
              <div class="cat-check"></div>
              Formation airless
            </label>
          </div>
          <div class="cat-item">
            <input type="checkbox" id="cat-enduits" name="categories[]" value="enduits"/>
            <label class="cat-label" for="cat-enduits">
              <div class="cat-check"></div>
              Formation enduits peinture
            </label>
          </div>
          <div class="cat-item">
            <input type="checkbox" id="cat-diag" name="categories[]" value="diagnostic"/>
            <label class="cat-label" for="cat-diag">
              <div class="cat-check"></div>
              Diagnostics travaux
            </label>
          </div>
          <div class="cat-item">
            <input type="checkbox" id="cat-accomp" name="categories[]" value="accompagnement"/>
            <label class="cat-label" for="cat-accomp">
              <div class="cat-check"></div>
              Accompagnement travaux
            </label>
          </div>
          <div class="cat-item">
            <input type="checkbox" id="cat-real" name="categories[]" value="realisation"/>
            <label class="cat-label" for="cat-real">
              <div class="cat-check"></div>
              Réalisation
            </label>
          </div>
        </div>
      </div>

      <!-- Message -->
      <div class="form-divider"><span>Détails du projet</span></div>

      <div class="fields-row">
        <div class="field-group full">
          <label for="message">Description du projet <span class="label-req">*</span></label>
          <div class="textarea-wrap">
            <textarea id="message" name="message" placeholder="Décrivez votre projet, la surface approximative, vos contraintes, vos délais souhaités…" maxlength="1000" oninput="document.getElementById('count').textContent=this.value.length" required></textarea>
            <span class="char-count"><span id="count">0</span> / 1000</span>
          </div>
        </div>
      </div>

      <!-- RGPD + submit -->
      <div style="margin-top:28px; display:flex; align-items:flex-start; gap:12px;">
        <input type="checkbox" id="rgpd" name="rgpd" style="width:18px; min-width:18px; height:18px; padding:0; margin-top:2px; accent-color:var(--ocre);" required/>
        <label for="rgpd" style="font-size:0.78rem; color:var(--gris); line-height:1.6; text-transform:none; letter-spacing:0; font-weight:400; cursor:pointer;">
          J'accepte que mes données soient traitées dans le cadre de cette demande, conformément à la <a href="#" style="color:var(--ocre); text-decoration:none;">politique de confidentialité</a>. <span style="color:var(--ocre);">*</span>
        </label>
      </div>

      <div class="submit-row">
        <p class="submit-note">
          <strong>Vos données sont protégées.</strong> Elles ne sont jamais revendues et sont utilisées uniquement pour traiter votre demande.
        </p>
        <button type="submit" class="btn-submit">
          <span>Envoyer ma demande</span>
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="2" y1="8" x2="14" y2="8"/>
            <polyline points="9 3 14 8 9 13"/>
          </svg>
        </button>
      </div>
    </form>
  </div>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="process-card">
      <p class="process-title">Comment ça se passe ?</p>
      <div class="process-step">
        <div class="step-num">1</div>
        <div class="step-text">
          <strong>Envoi du formulaire</strong>
          <span>Décrivez votre projet en quelques lignes.</span>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">2</div>
        <div class="step-text">
          <strong>Prise de contact</strong>
          <span>Marc vous rappelle sous 24h pour affiner le besoin.</span>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">3</div>
        <div class="step-text">
          <strong>Devis détaillé</strong>
          <span>Vous recevez un devis clair, sans surprise.</span>
        </div>
      </div>
      <div class="process-step">
        <div class="step-num">4</div>
        <div class="step-text">
          <strong>Démarrage</strong>
          <span>On planifie ensemble la date d'intervention ou de formation.</span>
        </div>
      </div>
    </div>

    <div class="guarantee-card">
      <div class="guarantee-icon">🛡️</div>
      <div class="guarantee-text">
        <strong>Devis 100% gratuit</strong>
        Aucun engagement à la réception du devis. Vous êtes libre d'accepter ou non.
      </div>
    </div>
  </div>
</div>
</x-layout>