<x-layout title="Accueil">
    @push('head')
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script>
            let flkty = new Flickity(document.querySelector(".main-carousel"), {
                // options
                cellAlign: 'left',
                contain: true,
            });
        </script>
    @endpush

    <section class="hero">
        <div class="hero-left">
            <div class="hero-tag">Expert en peinture &amp; enduits</div>
            <h1>Un metier, une passion, <em>une histoire.</em></h1>
            <p class="hero-text">Artisans peintre de métier et consultant technique, je met mon savoir-faire de vos
                projets.
                Riche d'une solide expérience dans l'artisanat, j'allie créativité, précision et maitrise technique pour
                donner
                vie aux espaces et au surfaces. <br>Entre art, technique et artisanat, chaque projet devient une
                réalisation
                unique, pensée avec exigence et passion.</p>
            <div class="hero-ctas">
                <a href="#" class="btn-ocre">Prendre contact</a>
            </div>
        </div>
        <div class="hero-right">
            <!-- ── STYLE 1 ── -->
            <div class="style-block">
                <div class="services-title">Services</div>
                <div class="links-list">
                    <a href="#" class="s1-link"><span>Service travaux</span><span class="s1-arrow">→</span></a>
                    <a href="#" class="s1-link"><span>Diagnostics travaux</span><span
                            class="s1-arrow">→</span></a>
                    <a href="#" class="s1-link"><span>Accompagnement travaux</span><span
                            class="s1-arrow">→</span></a>
                    <a href="{{ route('enduit') }}" class="s1-link"><span>Formation enduits / peinture</span><span
                            class="s1-arrow">→</span></a>
                    <a href="#" class="s1-link"><span>Formation airless</span><span class="s1-arrow">→</span></a>
                    <a href="#" class="s1-link"><span>Réalisation</span><span class="s1-arrow">→</span></a>
                </div>
            </div>
        </div>
    </section>


    <section class="section-marc">
        <div class="marc-photo-col">
            <div class="marc-photo-frame">
                <div class="marc-photo">👷</div>
            </div>
            <!-- <div class="marc-signature">Alexandre Fatras</div> -->
        </div>
        <div class="marc-text-col">
            <span class="marc-eyebrow">Qui suis-je</span>
            <h2>Alexandre Fatras<br><span>peintre de métier</span> &<br>transmetteur de passion.</h2>
            <p class="marc-intro">
                Après 15 ans passés sur les chantiers les plus exigeants, j'ai décidé de mettre mon expérience
                au service de ceux qui veulent apprendre. Que vous soyez artisan en reconversion, professionnel
                souhaitant
                monter en compétences ou particulier ambitieux, je vous transmet les véritables gestes du métier.
            </p>
        </div>
    </section>

    <section class="section-valeurs">
        <div class="section-header">
            <span class="section-tag">Ce qui nous définit</span>
            <h2>Les valeurs de l'entreprise</h2>
        </div>
        <div class="valeurs-grid">
            <div class="valeur-card">
                {{-- <div class="v-icon">🤝</div> --}}
                <img src="{{ asset('storage/values/valeur-humaine.png') }}" width="100" height="100" />
                <h3>Valeurs humaines</h3>
                <p>L'écoute et la proximité au cœur de notre démarche. Chaque client est accompagné avec bienveillance
                    dans une
                    relation de confiance durable.</p>
            </div>
            <div class="valeur-card">
                {{-- <div class="v-icon">⭐</div> --}}
                <img src="{{ asset('storage/values/valeur-qualite.png') }}" width="100" height="100" />
                <h3>Valeurs de qualité</h3>
                <p>L'excellence du travail bien fait est notre exigence absolue. Matériaux premium, techniques
                    maîtrisées,
                    finitions irréprochables.</p>
            </div>
            <div class="valeur-card">
                {{-- <div class="v-icon">📚</div> --}}
                <img src="{{ asset('storage/values/valeur-responsabilite.png') }}" width="100" height="100" />
                <h3>Transmission du savoir</h3>
                <p>Partager les gestes du métier est notre mission. La compétence se construit avec des bases solides et
                    un
                    formateur impliqué.</p>
            </div>
        </div>
    </section>

    <section class="section-partenaires">
        <div class="section-header">
            <span class="section-tag">Ils nous font confiance</span>
            <h2>Les réalisations</h2>
        </div>
        <!-- <div class="partenaires-row">
      <div class="partner-box">Tollens</div>
      <div class="partner-box">Sikkens</div>
      <div class="partner-box">Graco</div>
      <div class="partner-box">Knauf</div>
      <div class="partner-box">Bostik</div>
    </div> -->
        <div class="main-carousel">
            <div class="carousel-cell">
                <img src="https://cache.marieclaire.fr/data/photo/w2000_ci/5g/appliquer-peinture-au-mur.jpg"
                    alt="Image 1" class="carousel-cell-image">
            </div>
            <div class="carousel-cell">
                <img src="https://www.tarifartisan.fr/wp-content/uploads/travaux-peinture.jpg" alt="Image 2"
                    class="carousel-cell-image">
            </div>
            <div class="carousel-cell">
                <img src="http://www.circ8.fr/wp-content/uploads/2021/05/painting-1024x512.png" alt="Image 3"
                    class="carousel-cell-image">
            </div>
            <div class="carousel-cell">
                <img src="https://www.guide-artisan.fr/img/travaux-peinture-interieure-1025x450-1.jpg" alt="Image 3"
                    class="carousel-cell-image">
            </div>
        </div>
        <div style="display: block; text-align: center; margin-top: 50px">
            <a href="{{ route('quote') }}" class="btn-ocre">Demandez votre devis gratuit</a>
        </div>
    </section>

    <section class="section-avis">
        <div class="section-header">
            <span class="section-tag">Témoignages</span>
            <h2>Ce que disent nos clients</h2>
        </div>
        <div class="avis-grid">
            <div class="avis-card">
                <div class="quote">"</div>
                <p>Formation airless incroyable. En 2 jours j'avais la technique pour travailler proprement. Marc est
                    pédagogue
                    et très disponible.</p>
                <div class="avis-foot">
                    <div class="av-avatar">👷</div>
                    <div>
                        <div class="av-name">Thomas R.</div>
                        <div class="av-role">Artisan peintre, Lyon</div>
                    </div>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
            <div class="avis-card">
                <div class="quote">"</div>
                <p>Le diagnostic travaux m'a évité une erreur coûteuse. En 1h30, j'avais une vision claire de mon
                    chantier et
                    des priorités.</p>
                <div class="avis-foot">
                    <div class="av-avatar">🏠</div>
                    <div>
                        <div class="av-name">Sophie M.</div>
                        <div class="av-role">Particulière, Bordeaux</div>
                    </div>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
            <div class="avis-card">
                <div class="quote">"</div>
                <p>L'accompagnement sur 1 mois est idéal pour les projets complexes. Marc a été présent à chaque étape,
                    toujours
                    de bon conseil.</p>
                <div class="avis-foot">
                    <div class="av-avatar">🔧</div>
                    <div>
                        <div class="av-name">Pierre L.</div>
                        <div class="av-role">Maître d'œuvre, Paris</div>
                    </div>
                    <div class="stars">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-partenaires">
        <div class="section-header">
            <span class="section-tag">Ils nous font confiance</span>
            <h2>Les partenaires</h2>
        </div>
        <div class="partenaires-row">
            <div class="partner-box">Tollens</div>
            <div class="partner-box">Sikkens</div>
            <div class="partner-box">Graco</div>
            <div class="partner-box">Knauf</div>
            <div class="partner-box">Bostik</div>
        </div>
    </section>
</x-layout>
