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
                Décrivez-nous votre chantier ou votre besoin de formation. Nous vous répondons sous 24h avec une
                estimation claire et détaillée, sans engagement.
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
            <p class="form-section-sub">Tous les champs marqués d'un <span style="color:var(--ocre)">*</span> sont
                obligatoires.</p>
            <x-form />
            @if (session('success'))
                <div class="alert alert-success">
                    <span class="alert-icon">✓</span>
                    <span class="alert-message">{{ session("success") }}</span>
                </div>
            @endif
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
                <div class="guarantee-text">
                    <strong>Devis 100% gratuit</strong>
                    Aucun engagement à la réception du devis. Vous êtes libre d'accepter ou non.
                </div>
            </div>
        </div>
    </div>
</x-layout>
