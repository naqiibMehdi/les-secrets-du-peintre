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
                    <span class="alert-message">{{ session('success') }}</span>
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
            
            <div class="contact-card">
                <!-- En-tête -->
                <div class="contact-card__header">
                    <p class="contact-card__eyebrow">Nous contacter</p>
                    <p class="contact-card__title">Une question ? Écrivez-nous.</p>
                </div>

                <!-- Téléphone -->
                <a href="tel:+33626929501" class="contact-row">
                    <div class="contact-row__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
                    </div>
                    <div class="contact-row__body">
                        <span class="contact-row__label">Téléphone</span>
                        <span class="contact-row__value">06 26 92 95 01</span>
                    </div>
                    <svg class="contact-row__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                        <line x1="2" y1="8" x2="14" y2="8" />
                        <polyline points="9 3 14 8 9 13" />
                    </svg>
                </a>

                <!-- E-mail -->
                <div class="contact-row">
                    <div class="contact-row__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 128C214 128 128 214 128 320C128 426 214 512 320 512C337.7 512 352 526.3 352 544C352 561.7 337.7 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320L576 352C576 405 533 448 480 448C450.7 448 424.4 434.8 406.8 414.1C384 435.1 353.5 448 320 448C249.3 448 192 390.7 192 320C192 249.3 249.3 192 320 192C347.9 192 373.7 200.9 394.7 216.1C400.4 211.1 407.8 208 416 208C433.7 208 448 222.3 448 240L448 352C448 369.7 462.3 384 480 384C497.7 384 512 369.7 512 352L512 320C512 214 426 128 320 128zM384 320C384 284.7 355.3 256 320 256C284.7 256 256 284.7 256 320C256 355.3 284.7 384 320 384C355.3 384 384 355.3 384 320z"/></svg>
                    </div>
                    <div class="contact-row__body">
                        <span class="contact-row__label">E-mail</span>
                        <span class="contact-row__value">
                            contact@lessecretsdupeintre.fr
                        </span>
                    </div>
                </div>

                <!-- Adresse -->
                <div class="contact-row">
                    <div class="contact-row__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 48C337.7 48 352 62.3 352 80L352 98.3C450.1 112.3 527.7 189.9 541.7 288L560 288C577.7 288 592 302.3 592 320C592 337.7 577.7 352 560 352L541.7 352C527.7 450.1 450.1 527.7 352 541.7L352 560C352 577.7 337.7 592 320 592C302.3 592 288 577.7 288 560L288 541.7C189.9 527.7 112.3 450.1 98.3 352L80 352C62.3 352 48 337.7 48 320C48 302.3 62.3 288 80 288L98.3 288C112.3 189.9 189.9 112.3 288 98.3L288 80C288 62.3 302.3 48 320 48zM160 320C160 408.4 231.6 480 320 480C408.4 480 480 408.4 480 320C480 231.6 408.4 160 320 160C231.6 160 160 231.6 160 320zM320 224C373 224 416 267 416 320C416 373 373 416 320 416C267 416 224 373 224 320C224 267 267 224 320 224z"/></svg>
                    </div>
                    <div class="contact-row__body">
                        <span class="contact-row__label">Adresse</span>
                        <span class="contact-row__value">
                            27000 Evreux
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-layout>
