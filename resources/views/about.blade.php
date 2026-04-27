{{--
  Page : À propos / Présentation de l'entreprise
  Vue  : resources/views/pages/about.blade.php
  CSS  : public/css/about.css
--}}

<x-layout title="À propos">
    <div class="about-page">
        <section class="hero">

            <div class="hero-left">
                <nav aria-label="Fil d'Ariane">
                    <ol
                        style="list-style:none; display:flex; align-items:center; gap:8px;
                               font-size:11px; letter-spacing:1.5px; text-transform:uppercase;
                               color:rgba(201,168,76,0.45); margin-bottom:-16px;">
                        <li>
                            <a href="/" style="color:inherit; text-decoration:none; transition:color .2s;"
                                onmouseover="this.style.color='#C9A84C'"
                                onmouseout="this.style.color='rgba(201,168,76,0.45)'">
                                Accueil
                            </a>
                        </li>
                        <li style="opacity:0.35; padding:0 2px;">/</li>
                        <li style="color:rgba(201,168,76,0.7);">À propos</li>
                    </ol>
                </nav>

                {{-- Eyebrow / tag --}}
                <div class="hero-tag">Présentation</div>

                {{-- Titre principal --}}
                <h1>
                    Artisan peintre,<br>
                    <em>formateur &amp; consultant.</em>
                </h1>

                {{-- Sous-titre --}}
                <p class="hero-text">
                    Plus de 20 ans d'expérience terrain au service de vos projets de finition,
                    de formation et d'accompagnement technique. Un savoir-faire acquis sur le terrain,
                    transmis avec passion.
                </p>
                {{-- CTAs --}}
                <div class="hero-ctas">
                    <x-button href="{{ route('quote') }}">Demander un devis</x-button>
                </div>

            </div>

            {{-- Colonne droite : visuelle --}}
            {{-- Remplacez le src par votre vraie photo --}}
            <div class="hero-picture" aria-hidden="true"
                style="background: url('{{ asset('storage/picture.jpeg') }}') center/cover no-repeat;">
            </div>

            </section>



            {{-- ╔══════════════════════════════════════════════════
             ║  INTRO — texte d'accroche + 20 ans
             ╚══════════════════════════════════════════════════ --}}
            <section class="ap-intro ap-reveal">
                <div class="ap-intro__left">
                    <div class="ap-intro__number">20</div>
                    <p class="ap-intro__stat-label">Ans d'expérience terrain</p>
                </div>

                <div class="ap-intro__right">
                    <p class="ap-intro__lead">
                        Artisan passionné, peintre expérimenté et formateur, je mets à votre disposition mon
                        savoir-faire
                        acquis sur le terrain au fil de plus de deux décennies dans le bâtiment.
                    </p>
                    <p class="ap-intro__body">
                        Spécialiste des travaux de finition, j'interviens avec rigueur et précision, que ce soit sur vos
                        murs, vos supports ou vos projets de formation. Chaque chantier est abordé avec le même niveau
                        d'exigence : des matériaux bien choisis, des techniques maîtrisées et un résultat qui dure.
                    </p>
                </div>
            </section>


            {{-- ╔══════════════════════════════════════════════════
             ║  EXPERTISES — fond anthracite, 2 colonnes
             ╚══════════════════════════════════════════════════ --}}
            <section class="ap-expertises">
                <div class="ap-expertises__inner">

                    <div class="ap-section-eyebrow ap-reveal">Mon domaine</div>
                    <h2 class="ap-section-title ap-section-title--light ap-reveal ap-reveal--delay-1">
                        Spécialiste des travaux<br><em>de finition</em>
                    </h2>

                    <div class="ap-expertises__grid">

                        <div class="ap-expertise-group ap-reveal">
                            <div class="ap-expertise-group__icon">🪣</div>
                            <h3 class="ap-expertise-group__title">Travaux de finition</h3>
                            <ul class="ap-expertise-group__list">
                                <li>Préparation des supports</li>
                                <li>Application d'enduits — rebouchage, lissage, ratissage</li>
                                <li>Travaux de peinture intérieure et extérieure</li>
                                <li>Finitions haut de gamme</li>
                            </ul>
                        </div>

                        <div class="ap-expertise-group ap-reveal ap-reveal--delay-1">
                            <div class="ap-expertise-group__icon">🎓</div>
                            <h3 class="ap-expertise-group__title">Formation professionnelle</h3>
                            <ul class="ap-expertise-group__list">
                                <li>Formations concrètes, basées sur la pratique terrain</li>
                                <li>Techniques efficaces et directement applicables</li>
                                <li>Petits groupes pour un suivi personnalisé</li>
                                <li>Sessions en présentiel ou sur chantier</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>


            {{-- ╔══════════════════════════════════════════════════
             ║  ACCOMPAGNEMENT — fond crème, 3 cartes
             ╚══════════════════════════════════════════════════ --}}
            <section class="ap-accompagnement">

                <div class="ap-section-eyebrow ap-reveal">Au-delà du chantier</div>
                <h2 class="ap-section-title ap-section-title--dark ap-reveal ap-reveal--delay-1">
                    J'accompagne également<br><em>trois types de clients</em>
                </h2>

                <div class="ap-cards">

                    <div class="ap-card ap-reveal">
                        <div class="ap-card__icon">🏠</div>
                        <h3 class="ap-card__title">Particuliers</h3>
                        <p class="ap-card__desc">
                            Vous souhaitez rénover votre intérieur sans mauvaises surprises ? Je vous accompagne dans
                            vos
                            projets de rénovation, du diagnostic jusqu'à la réalisation, avec des conseils adaptés à
                            votre
                            situation.
                        </p>
                    </div>

                    <div class="ap-card ap-reveal ap-reveal--delay-1">
                        <div class="ap-card__icon">🔨</div>
                        <h3 class="ap-card__title">Professionnels</h3>
                        <p class="ap-card__desc">
                            Artisans en reconversion ou cherchant à monter en compétences, mes formations vous
                            transmettent
                            les gestes du métier pour améliorer la qualité de vos prestations et votre rentabilité sur
                            chantier.
                        </p>
                    </div>

                    <div class="ap-card ap-reveal ap-reveal--delay-2">
                        <div class="ap-card__icon">🏗️</div>
                        <h3 class="ap-card__title">Entreprises</h3>
                        <p class="ap-card__desc">
                            Vous avez besoin de conseils techniques fiables pour vos équipes ou vos projets ?
                            J'interviens
                            en tant que consultant pour apporter un regard d'expert et des solutions adaptées à vos
                            enjeux
                            terrain.
                        </p>
                    </div>

                </div>
            </section>


            {{-- ╔══════════════════════════════════════════════════
             ║  ENGAGEMENT — citation forte, fond sombre
             ╚══════════════════════════════════════════════════ --}}
            <section class="ap-engagement">
                <div class="ap-engagement__glow"></div>
                <div class="ap-engagement__bar-top"></div>
                <div class="ap-engagement__bar-bottom"></div>

                <div class="ap-engagement__inner ap-reveal">
                    <div class="ap-engagement__tag">Mon engagement</div>
                    <div class="ap-engagement__line"></div>
                    <blockquote class="ap-engagement__quote">
                        Vous garantir un travail de qualité, des conseils précis et des résultats durables,
                        <em>dans le respect des règles de l'art.</em>
                    </blockquote>
                    <a href="/devis" class="ap-btn-primary">
                        <span>Demander un devis gratuit →</span>
                    </a>
                </div>
            </section>


            {{-- ╔══════════════════════════════════════════════════
             ║  CTA FINAL
             ╚══════════════════════════════════════════════════ --}}
            <section class="ap-cta ap-reveal">
                <div class="ap-cta__left">
                    <h3>Prêt à démarrer<br><em>votre projet ?</em></h3>
                    <p>Contactez-moi pour un devis gratuit ou découvrez nos formations disponibles. Réponse sous 24h.
                    </p>
                </div>
                <div class="ap-cta__right">
                    <a href="/devis" class="ap-btn-primary">
                        <span>Demander un devis</span>
                    </a>
                    <a href="/formations" class="ap-btn-ghost">
                        Voir les formations
                    </a>
                </div>
            </section>

    </div>

    @push('scripts')
        {{-- ── Scroll Reveal via IntersectionObserver ── --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const revealEls = document.querySelectorAll('.ap-reveal');
                if (!revealEls.length) return;

                const observer = new IntersectionObserver(
                    function(entries) {
                        entries.forEach(function(entry) {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.12,
                        rootMargin: '0px 0px -40px 0px'
                    }
                );

                revealEls.forEach(function(el) {
                    observer.observe(el);
                });
            });
        </script>
    @endpush

</x-layout>
