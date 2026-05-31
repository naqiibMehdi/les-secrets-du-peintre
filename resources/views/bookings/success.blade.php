{{-- resources/views/bookings/success.blade.php --}}
@php $title = 'Réservation confirmée'; @endphp

<x-layout :title="$title">

    @push('head')
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    @endpush

    <div class="bk-page">

        <div class="bk-hero">
            <div class="bk-hero__bar"></div>
            <div class="bk-hero__inner">
                <div class="bk-hero__tag">Réservation</div>
                <h1 class="bk-hero__title">Tout est <em>confirmé !</em></h1>
                <p class="bk-hero__sub">
                    Merci {{ $booking->prenom }}, votre créneau est réservé. Un email de confirmation vous a été envoyé.
                </p>
            </div>
        </div>

        <div class="bk-wrap" style="max-width:680px;">

            {{-- Carte de confirmation --}}
            <div
                style="background:#fff; border:1px solid var(--border); border-radius:8px;
                overflow:hidden; margin-bottom:20px;">

                {{-- Bandeau succès --}}
                <div
                    style="background:var(--anth); padding:32px 36px; text-align:center;
                  border-bottom:3px solid var(--ocre);">
                    <div
                        style="width:56px; height:56px; background:rgba(201,168,76,0.15); border-radius:50%;
                    margin:0 auto 16px; display:flex; align-items:center; justify-content:center;
                    font-size:1.5rem; line-height:56px; text-align:center;">
                        <i class="fa-solid fa-calendar-check" style="color:var(--ocre); font-size:1.4rem;"></i>
                    </div>
                    <p
                        style="font-family:'Cormorant Garamond',serif; font-size:1.7rem; font-weight:700;
                   color:var(--creme); margin:0 0 8px; line-height:1.1;">
                        Votre séance est réservée
                    </p>
                    <p style="font-size:.85rem; color:rgba(248,245,238,.5);">
                        Un email de confirmation a été envoyé à
                        <strong style="color:rgba(248,245,238,.8);">{{ $booking->email }}</strong>
                    </p>
                </div>

                {{-- Détails du créneau --}}
                <div style="padding:32px 36px;">

                    <p
                        style="font-size:9px; letter-spacing:3px; text-transform:uppercase;
                   color:var(--ocre); font-weight:700; margin-bottom:20px;">
                        Détails de votre réservation
                    </p>

                    <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:28px;">

                        <div
                            style="display:flex; align-items:center; gap:16px; padding:14px 18px;
                      background:var(--creme2); border:1px solid var(--border);
                      border-left:3px solid var(--ocre); border-radius:0 6px 6px 0;">
                            <i class="fa-regular fa-user" style="color:var(--ocre); width:18px; text-align:center;"></i>
                            <div>
                                <span
                                    style="font-size:9px; letter-spacing:1.5px; text-transform:uppercase;
                            color:var(--gris); font-weight:600; display:block; margin-bottom:2px;">Participant</span>
                                <span style="font-size:.9rem; font-weight:600; color:var(--noir);">
                                    {{ $booking->prenom }} {{ $booking->nom }}
                                </span>
                            </div>
                        </div>

                        <div
                            style="display:flex; align-items:center; gap:16px; padding:14px 18px;
                      background:var(--creme2); border:1px solid var(--border);
                      border-left:3px solid var(--ocre); border-radius:0 6px 6px 0;">
                            <i class="fa-regular fa-calendar"
                                style="color:var(--ocre); width:18px; text-align:center;"></i>
                            <div>
                                <span
                                    style="font-size:9px; letter-spacing:1.5px; text-transform:uppercase;
                            color:var(--gris); font-weight:600; display:block; margin-bottom:2px;">Date</span>
                                <span style="font-size:.9rem; font-weight:600; color:var(--noir);">
                                    {{ ucfirst($booking->timeSlot->date->locale('fr')->isoFormat('dddd D MMMM YYYY')) }}
                                </span>
                            </div>
                        </div>

                        <div
                            style="display:flex; align-items:center; gap:16px; padding:14px 18px;
                      background:var(--creme2); border:1px solid var(--border);
                      border-left:3px solid var(--ocre); border-radius:0 6px 6px 0;">
                            <i class="fa-regular fa-clock"
                                style="color:var(--ocre); width:18px; text-align:center;"></i>
                            <div>
                                <span
                                    style="font-size:9px; letter-spacing:1.5px; text-transform:uppercase;
                            color:var(--gris); font-weight:600; display:block; margin-bottom:2px;">Horaire</span>
                                <span style="font-size:.9rem; font-weight:600; color:var(--noir);">
                                    {{ substr($booking->timeSlot->start_time, 0, 5) }}
                                    –
                                    {{ substr($booking->timeSlot->end_time, 0, 5) }}
                                </span>
                            </div>
                        </div>

                        <div
                            style="display:flex; align-items:center; gap:16px; padding:14px 18px;
                      background:var(--creme2); border:1px solid var(--border);
                      border-left:3px solid var(--ocre); border-radius:0 6px 6px 0;">
                            <i class="fa-solid fa-graduation-cap"
                                style="color:var(--ocre); width:18px; text-align:center;"></i>
                            <div>
                                <span
                                    style="font-size:9px; letter-spacing:1.5px; text-transform:uppercase;
                            color:var(--gris); font-weight:600; display:block; margin-bottom:2px;">Formation</span>
                                <span style="font-size:.9rem; font-weight:600; color:var(--noir);">
                                    Enduit de lissage &amp; ratissage
                                </span>
                            </div>
                        </div>

                    </div>

                    {{-- Note annulation --}}
                    <div
                        style="background:rgba(201,168,76,.06); border:1px solid rgba(201,168,76,.2);
                    border-radius:6px; padding:14px 18px; display:flex; gap:12px; align-items:flex-start;">
                        <i class="fa-solid fa-circle-info"
                            style="color:var(--ocre); margin-top:2px; flex-shrink:0;"></i>
                        <p style="font-size:.78rem; color:#666; line-height:1.65; margin:0;">
                            Vous pouvez annuler gratuitement votre réservation via le lien contenu dans l'email de
                            confirmation,
                            jusqu'à la veille de la séance.
                        </p>
                    </div>

                </div>
            </div>

            {{-- CTAs --}}
            <div style="display:flex; gap:14px; flex-wrap:wrap;">
                <a href="/" class="bk-btn-next" style="text-decoration:none;">
                    <span>Retour à l'accueil</span>
                    <span>→</span>
                </a>
                <a href="/formations" class="bk-btn-back" style="text-decoration:none;">
                    Voir les autres formations
                </a>
            </div>

        </div>
    </div>

</x-layout>
