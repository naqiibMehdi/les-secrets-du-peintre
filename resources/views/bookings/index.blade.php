{{-- resources/views/bookings/index.blade.php --}}
@php $title = 'Réserver ma formation'; @endphp

<x-layout :title="$title">

    @push('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    @endpush

    <div class="bk-page">

        {{-- ── HERO MINI ── --}}
        <div class="bk-hero">
            <div class="bk-hero__bar"></div>
            <div class="bk-hero__inner">
                <nav class="bk-breadcrumb" aria-label="Fil d'Ariane">
                    <a href="/">Accueil</a> <span>/</span>
                    <a href="/formations">Formations</a> <span>/</span>
                    <a href="/formations/enduit">Enduit de lissage</a> <span>/</span>
                    <span class="bk-breadcrumb__current">Réservation</span>
                </nav>
                <div class="bk-hero__tag">Formation — Enduit de lissage & ratissage</div>
                <h1 class="bk-hero__title">Réserver <em>ma séance</em></h1>
                <p class="bk-hero__sub">Choisissez votre créneau et confirmez votre inscription en 3 étapes.</p>
            </div>
        </div>

        {{-- ── STEPPER ── --}}
        <div class="bk-wrap">

            {{-- Indicateur d'étapes --}}
            <div class="bk-stepper" id="stepperNav" aria-label="Étapes de réservation">
                <div class="bk-step bk-step--active" data-step="1">
                    <div class="bk-step__circle">
                        <span class="bk-step__num">1</span>
                        <i class="fa-solid fa-check bk-step__check"></i>
                    </div>
                    <span class="bk-step__label">Vos coordonnées</span>
                </div>
                <div class="bk-step__line"></div>
                <div class="bk-step" data-step="2">
                    <div class="bk-step__circle">
                        <span class="bk-step__num">2</span>
                        <i class="fa-solid fa-check bk-step__check"></i>
                    </div>
                    <span class="bk-step__label">Votre créneau</span>
                </div>
                <div class="bk-step__line"></div>
                <div class="bk-step" data-step="3">
                    <div class="bk-step__circle">
                        <span class="bk-step__num">3</span>
                        <i class="fa-solid fa-check bk-step__check"></i>
                    </div>
                    <span class="bk-step__label">Confirmation</span>
                </div>
            </div>

            {{-- FORMULAIRE --}}
            <form id="bookingForm" action="{{ route('bookings.store') }}" method="POST" novalidate>
                @csrf

                {{-- Champ caché pour le créneau sélectionné --}}
                <input type="hidden" name="time_slot_id" id="selectedSlotId" />

                {{-- ════════════════════════════════
           ÉTAPE 1 — Coordonnées
      ════════════════════════════════ --}}
                <div class="bk-panel" id="panel1">

                    <div class="bk-panel__header">
                        <div class="bk-panel__eyebrow">Étape 1 sur 3</div>
                        <h2 class="bk-panel__title">Vos coordonnées</h2>
                        <p class="bk-panel__sub">Ces informations nous permettront de vous envoyer la confirmation de
                            réservation.</p>
                    </div>

                    <div class="bk-fields">

                        <div class="bk-field-row">
                            <div class="bk-field">
                                <label for="prenom" class="bk-label">Prénom <span class="bk-req">*</span></label>
                                <div class="bk-input-wrap">
                                    <i class="fa-regular fa-user bk-input-icon"></i>
                                    <input type="text" id="prenom" name="prenom"
                                        class="bk-input @error('prenom') bk-input--error @enderror" placeholder="Jean"
                                        value="{{ old('prenom') }}" required autocomplete="given-name" />
                                </div>
                                @error('prenom')
                                    <span class="bk-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="bk-field">
                                <label for="nom" class="bk-label">Nom <span class="bk-req">*</span></label>
                                <div class="bk-input-wrap">
                                    <i class="fa-regular fa-user bk-input-icon"></i>
                                    <input type="text" id="nom" name="nom"
                                        class="bk-input @error('nom') bk-input--error @enderror" placeholder="Dupont"
                                        value="{{ old('nom') }}" required autocomplete="family-name" />
                                </div>
                                @error('nom')
                                    <span class="bk-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="bk-field-row">
                            <div class="bk-field">
                                <label for="email" class="bk-label">Adresse e-mail <span
                                        class="bk-req">*</span></label>
                                <div class="bk-input-wrap">
                                    <i class="fa-regular fa-envelope bk-input-icon"></i>
                                    <input type="email" id="email" name="email"
                                        class="bk-input @error('email') bk-input--error @enderror"
                                        placeholder="jean.dupont@email.fr" value="{{ old('email') }}" required
                                        autocomplete="email" />
                                </div>
                                @error('email')
                                    <span class="bk-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="bk-field">
                                <label for="telephone" class="bk-label">Téléphone</label>
                                <div class="bk-input-wrap">
                                    <i class="fa-solid fa-phone bk-input-icon"></i>
                                    <input type="tel" id="telephone" name="telephone" class="bk-input"
                                        placeholder="06 12 34 56 78" value="{{ old('telephone') }}"
                                        autocomplete="tel" />
                                </div>
                            </div>
                        </div>

                        <div class="bk-field bk-field--full">
                            <label for="notes" class="bk-label">Message / Questions (optionnel)</label>
                            <div class="bk-input-wrap">
                                <textarea id="notes" name="notes" class="bk-textarea"
                                    placeholder="Décrivez votre projet ou posez vos questions…" maxlength="1000">{{ old('notes') }}</textarea>
                                <span class="bk-char-count"><span id="notesCount">0</span> / 1000</span>
                            </div>
                        </div>

                    </div>{{-- /bk-fields --}}

                    <div class="bk-panel__footer">
                        <div class="bk-panel__note">
                            <i class="fa-solid fa-shield-halved"></i>
                            Vos données sont protégées et ne seront jamais revendues.
                        </div>
                        <button type="button" class="bk-btn-next" id="nextToStep2">
                            Choisir mon créneau
                            <span>→</span>
                        </button>
                    </div>

                </div>{{-- /panel1 --}}


                {{-- ════════════════════════════════
           ÉTAPE 2 — Calendrier + créneaux
      ════════════════════════════════ --}}
                <div class="bk-panel bk-panel--hidden" id="panel2">

                    <div class="bk-panel__header">
                        <div class="bk-panel__eyebrow">Étape 2 sur 3</div>
                        <h2 class="bk-panel__title">Votre créneau</h2>
                        <p class="bk-panel__sub">Sélectionnez une date disponible puis choisissez un horaire.</p>
                    </div>

                    <div class="bk-calendar-layout">

                        {{-- Calendrier Flatpickr --}}
                        <div class="bk-calendar-col">
                            <div class="bk-calendar-label">
                                <i class="fa-regular fa-calendar"></i>
                                Choisissez une date
                            </div>
                            <div id="calendarInline"></div>
                            <p class="bk-calendar-hint">
                                <i class="fa-solid fa-circle-info"></i>
                                Seuls les jours disponibles sont sélectionnables.
                            </p>
                        </div>

                        {{-- Créneaux horaires --}}
                        <div class="bk-slots-col">
                            <div class="bk-calendar-label">
                                <i class="fa-regular fa-clock"></i>
                                Choisissez un horaire
                            </div>

                            {{-- État : aucune date sélectionnée --}}
                            <div class="bk-slots-empty" id="slotsEmpty">
                                <i class="fa-regular fa-calendar-xmark"></i>
                                <p>Sélectionnez une date<br>pour voir les créneaux disponibles.</p>
                            </div>

                            {{-- État : chargement --}}
                            <div class="bk-panel--hidden" id="slotsLoading">
                                <i class="fa-solid fa-spinner fa-spin"></i>
                                <p>Chargement des créneaux…</p>
                            </div>

                            {{-- Liste des créneaux --}}
                            <div class="bk-slots-list bk-panel--hidden" id="slotsList"></div>

                            {{-- Erreur sélection --}}
                            @error('time_slot_id')
                                <span class="bk-error" style="margin-top:12px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>{{-- /bk-calendar-layout --}}

                    <div class="bk-panel__footer">
                        <button type="button" class="bk-btn-back" id="backToStep1">
                            ← Retour
                        </button>
                        <button type="button" class="bk-btn-next bk-btn-next--disabled" id="nextToStep3" disabled>
                            Voir le récapitulatif
                            <span>→</span>
                        </button>
                    </div>

                </div>{{-- /panel2 --}}


                {{-- ════════════════════════════════
           ÉTAPE 3 — Récapitulatif
      ════════════════════════════════ --}}
                <div class="bk-panel bk-panel--hidden" id="panel3">

                    <div class="bk-panel__header">
                        <div class="bk-panel__eyebrow">Étape 3 sur 3</div>
                        <h2 class="bk-panel__title">Récapitulatif</h2>
                        <p class="bk-panel__sub">Vérifiez vos informations avant de confirmer votre réservation.</p>
                    </div>

                    {{-- Résumé de la réservation --}}
                    <div class="bk-recap">

                        <div class="bk-recap__section">
                            <div class="bk-recap__label">
                                <i class="fa-regular fa-user"></i>
                                Vos coordonnées
                            </div>
                            <div class="bk-recap__grid">
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Prénom</span>
                                    <span class="bk-recap__val" id="recapPrenom">—</span>
                                </div>
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Nom</span>
                                    <span class="bk-recap__val" id="recapNom">—</span>
                                </div>
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">E-mail</span>
                                    <span class="bk-recap__val" id="recapEmail">—</span>
                                </div>
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Téléphone</span>
                                    <span class="bk-recap__val" id="recapTel">—</span>
                                </div>
                            </div>
                        </div>

                        <div class="bk-recap__section">
                            <div class="bk-recap__label">
                                <i class="fa-regular fa-calendar-check"></i>
                                Votre créneau
                            </div>
                            <div class="bk-recap__grid">
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Formation</span>
                                    <span class="bk-recap__val">Enduit de lissage &amp; ratissage</span>
                                </div>
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Date</span>
                                    <span class="bk-recap__val" id="recapDate">—</span>
                                </div>
                                <div class="bk-recap__item">
                                    <span class="bk-recap__key">Horaire</span>
                                    <span class="bk-recap__val" id="recapSlot">—</span>
                                </div>
                            </div>
                        </div>

                    </div>{{-- /bk-recap --}}

                    {{-- Checkbox RGPD --}}
                    <div class="bk-rgpd">
                        <input type="checkbox" id="rgpd" name="rgpd" class="bk-checkbox" required />
                        <label for="rgpd" class="bk-rgpd__label">
                            J'accepte que mes données soient traitées dans le cadre de cette réservation, conformément à
                            la
                            <a href="/politique-confidentialite">politique de confidentialité</a>. <span
                                class="bk-req">*</span>
                        </label>
                    </div>

                    <div class="bk-panel__footer">
                        <button type="button" class="bk-btn-back" id="backToStep2">
                            ← Retour
                        </button>
                        <button type="submit" class="bk-btn-submit" id="submitBtn">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>Confirmer ma réservation</span>
                        </button>
                    </div>

                </div>{{-- /panel3 --}}

            </form>

        </div>{{-- /bk-wrap --}}
    </div>{{-- /bk-page --}}

    {{-- ── SCRIPTS ── --}}
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                /* ── État global ── */
                const state = {
                    currentStep: 1,
                    availableDates: [],
                    selectedDate: null,
                    selectedSlotId: null,
                    selectedSlotLabel: null,
                };

                /* ── Éléments DOM ── */
                const panels = [null, document.getElementById('panel1'), document.getElementById('panel2'), document
                    .getElementById('panel3')
                ];
                const steps = document.querySelectorAll('.bk-step');
                const form = document.getElementById('bookingForm');
                const textarea = document.getElementById('notes');

                /* ── Compteur de caractères textarea ── */
                if (textarea) {
                    textarea.addEventListener('input', () => {
                        document.getElementById('notesCount').textContent = textarea.value.length;
                    });
                }

                /* ══════════════════════════════════════
                   Navigation entre étapes
                ══════════════════════════════════════ */
                function goToStep(n) {
                    panels[state.currentStep].classList.add('bk-panel--hidden');
                    panels[state.currentStep].classList.remove('bk-panel--exit');

                    state.currentStep = n;
                    panels[n].classList.remove('bk-panel--hidden');
                    panels[n].classList.add('bk-panel--enter');
                    setTimeout(() => panels[n].classList.remove('bk-panel--enter'), 400);

                    // Mise à jour du stepper
                    steps.forEach((s, i) => {
                        s.classList.remove('bk-step--active', 'bk-step--done');
                        if (i + 1 < n) s.classList.add('bk-step--done');
                        if (i + 1 === n) s.classList.add('bk-step--active');
                    });

                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }

                /* ══════════════════════════════════════
                   Validation étape 1
                ══════════════════════════════════════ */
                function validateStep1() {
                    const prenom = document.getElementById('prenom').value.trim();
                    const nom = document.getElementById('nom').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

                    let ok = true;
                    [
                        ['prenom', prenom],
                        ['nom', nom]
                    ].forEach(([id, val]) => {
                        const el = document.getElementById(id);
                        const err = el.parentElement.parentElement.querySelector('.bk-error-js');
                        if (!val) {
                            el.classList.add('bk-input--error');
                            if (!err) {
                                const e = document.createElement('span');
                                e.className = 'bk-error bk-error-js';
                                e.textContent = 'Ce champ est requis.';
                                el.parentElement.parentElement.appendChild(e);
                            }
                            ok = false;
                        } else {
                            el.classList.remove('bk-input--error');
                            if (err) err.remove();
                        }
                    });

                    const emailEl = document.getElementById('email');
                    const emailErr = emailEl.parentElement.parentElement.querySelector('.bk-error-js');
                    if (!emailOk) {
                        emailEl.classList.add('bk-input--error');
                        if (!emailErr) {
                            const e = document.createElement('span');
                            e.className = 'bk-error bk-error-js';
                            e.textContent = !email ? 'Ce champ est requis.' : 'Adresse e-mail invalide.';
                            emailEl.parentElement.parentElement.appendChild(e);
                        }
                        ok = false;
                    } else {
                        emailEl.classList.remove('bk-input--error');
                        if (emailErr) emailErr.remove();
                    }

                    return ok;
                }

                document.getElementById('nextToStep2').addEventListener('click', () => {
                    if (validateStep1()) goToStep(2);
                });

                document.getElementById('backToStep1').addEventListener('click', () => goToStep(1));
                document.getElementById('backToStep2').addEventListener('click', () => goToStep(2));

                /* ══════════════════════════════════════
                   Chargement des dates disponibles
                ══════════════════════════════════════ */
                fetch('{{ route('bookings.available-dates') }}')
                    .then(r => r.json())
                    .then(dates => {
                        state.availableDates = dates;
                        initFlatpickr(dates);
                    })
                    .catch(() => console.error('Impossible de charger les dates disponibles.'));

                /* ══════════════════════════════════════
                   Flatpickr — calendrier inline
                ══════════════════════════════════════ */
                function initFlatpickr(enabledDates) {
                    flatpickr('#calendarInline', {
                        locale: 'fr',
                        inline: true,
                        minDate: 'today',
                        enable: enabledDates,
                        dateFormat: 'Y-m-d',
                        disableMobile: true,
                        onChange: function(selectedDates, dateStr) {
                            state.selectedDate = dateStr;
                            state.selectedSlotId = null;
                            state.selectedSlotLabel = null;
                            document.getElementById('selectedSlotId').value = '';
                            document.getElementById('nextToStep3').disabled = true;
                            document.getElementById('nextToStep3').classList.add('bk-btn-next--disabled');
                            loadSlots(dateStr);
                        },
                    });
                }

                /* ══════════════════════════════════════
                   Chargement des créneaux AJAX
                ══════════════════════════════════════ */
                function loadSlots(date) {
                    document.getElementById('slotsEmpty').classList.add('bk-panel--hidden');
                    document.getElementById('slotsEmpty').classList.remove('bk-slots-empty');

                    document.getElementById('slotsLoading').classList.add('bk-slots-loading');
                    document.getElementById('slotsLoading').classList.remove('bk-panel--hidden');
                    
                    document.getElementById('slotsList').classList.add('bk-panel--hidden');

                    fetch(`{{ route('bookings.slots-for-date') }}?date=${date}`)
                        .then(r => r.json())
                        .then(slots => {
                            document.getElementById('slotsLoading').classList.add('bk-panel--hidden');
                            const list = document.getElementById('slotsList');

                            if (!slots.length) {
                                list.innerHTML =
                                    '<p class="bk-slots-none">Aucun créneau disponible pour cette date.</p>';
                                list.classList.remove('bk-panel--hidden');
                                return;
                            }

                            list.innerHTML = slots.map(s => `
          <button type="button" class="bk-slot" data-id="${s.id}" data-label="${s.label}">
            <i class="fa-regular fa-clock"></i>
            <span>${s.label}</span>
          </button>
        `).join('');

                            document.getElementById('slotsLoading').classList.remove('bk-slots-loading');

                            list.classList.remove('bk-panel--hidden');

                            // Gestion de la sélection d'un créneau
                            list.querySelectorAll('.bk-slot').forEach(btn => {
                                btn.addEventListener('click', () => {
                                    list.querySelectorAll('.bk-slot').forEach(b => b.classList
                                        .remove('bk-slot--selected'));
                                    btn.classList.add('bk-slot--selected');
                                    state.selectedSlotId = btn.dataset.id;
                                    state.selectedSlotLabel = btn.dataset.label;
                                    document.getElementById('selectedSlotId').value = btn.dataset
                                        .id;
                                    document.getElementById('nextToStep3').disabled = false;
                                    document.getElementById('nextToStep3').classList.remove(
                                        'bk-btn-next--disabled');
                                });
                            });
                        })
                        .catch(() => {
                            document.getElementById('slotsLoading').classList.add('bk-panel--hidden');
                            document.getElementById('slotsEmpty').classList.remove('bk-panel--hidden');
                        });
                }

                /* ══════════════════════════════════════
                   Passage étape 3 — remplissage du récap
                ══════════════════════════════════════ */
                document.getElementById('nextToStep3').addEventListener('click', () => {
                    if (!state.selectedSlotId) return;

                    // Formater la date en français
                    const [y, m, d] = state.selectedDate.split('-');
                    const dateObj = new Date(y, m - 1, d);
                    const dateStr = dateObj.toLocaleDateString('fr-FR', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    });

                    document.getElementById('recapPrenom').textContent = document.getElementById('prenom')
                        .value;
                    document.getElementById('recapNom').textContent = document.getElementById('nom').value;
                    document.getElementById('recapEmail').textContent = document.getElementById('email').value;
                    document.getElementById('recapTel').textContent = document.getElementById('telephone')
                        .value || '—';
                    document.getElementById('recapDate').textContent = dateStr.charAt(0).toUpperCase() + dateStr
                        .slice(1);
                    document.getElementById('recapSlot').textContent = state.selectedSlotLabel;

                    goToStep(3);
                });

                /* ══════════════════════════════════════
                   Soumission du formulaire
                ══════════════════════════════════════ */
                form.addEventListener('submit', function(e) {
                    const rgpd = document.getElementById('rgpd');
                    if (!rgpd.checked) {
                        e.preventDefault();
                        rgpd.closest('.bk-rgpd').classList.add('bk-rgpd--error');
                        return;
                    }
                    // Afficher le loader sur le bouton
                    const btn = document.getElementById('submitBtn');
                    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span>Envoi en cours…</span>';
                    btn.disabled = true;
                });

                /* Si Laravel renvoie des erreurs de validation, revenir à l'étape 1 */
                @if ($errors->any())
                    goToStep(1);
                @endif

            });
        </script>
    @endpush

</x-layout>
