<!DOCTYPE html>
<html lang="fr" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="x-apple-disable-message-reformatting"/>
  <title>Confirmation de votre demande de devis</title>
  <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    /* Reset email clients */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
    body { margin: 0 !important; padding: 0 !important; background-color: #F0EDE4; width: 100% !important; }

    /* Liens */
    a { color: #C9A84C; text-decoration: none; }
    a:hover { text-decoration: underline; }

    /* Responsive */
    @media only screen and (max-width: 620px) {
      .email-wrapper  { width: 100% !important; }
      .email-content  { padding: 24px 20px !important; }
      .hero-pad       { padding: 40px 24px !important; }
      .field-row td   { display: block !important; width: 100% !important; padding-right: 0 !important; padding-bottom: 12px !important; }
      .footer-pad     { padding: 32px 20px !important; }
      .btn-td         { display: block !important; text-align: center !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background-color:#F0EDE4;">

{{-- ╔══════════════════════════════════════════════╗
     ║  WRAPPER PRINCIPAL                           ║
     ╚══════════════════════════════════════════════╝ --}}
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#F0EDE4;">
  <tr>
    <td align="center" style="padding: 40px 16px;">

      {{-- ── Carte principale ── --}}
      <table role="presentation" class="email-wrapper" width="600" cellpadding="0" cellspacing="0" border="0"
             style="max-width:600px; width:100%; background-color:#ffffff; border-radius:8px; overflow:hidden;
                    box-shadow: 0 4px 32px rgba(0,0,0,0.10);">

        {{-- ╔══════════════════════════════════════════
             ║  HEADER — fond anthracite + barre ocre
             ╚══════════════════════════════════════════ --}}
        <tr>
          <td class="hero-pad" bgcolor="#14181d"
              style="background-color:#14181d; padding: 52px 48px 44px; text-align:center; position:relative;">

            {{-- Barre dorée en haut --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:32px;">
              <tr>
                <td style="height:3px; background: linear-gradient(90deg, #14181d 0%, #C9A84C 30%, #E8C97A 50%, #C9A84C 70%, #14181d 100%); border-radius:2px;"></td>
              </tr>
            </table>

            {{-- Logo / Nom de marque --}}
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center">
              <tr>
                <td align="center"
                    style="width:52px; height:52px; background-color:#C9A84C; border-radius:6px;
                           font-family:'Georgia', serif; font-size:22px; font-weight:700;
                           color:#14181d; text-align:center; vertical-align:middle; line-height:52px;">
                  AP
                </td>
                <td style="width:14px;"></td>
                <td valign="middle">
                  <p style="font-family:'Georgia', 'Times New Roman', serif; font-size:20px; font-weight:700;
                             color:#F8F5EE; margin:0; line-height:1.1;">
                    Les secrets du peintre
                  </p>
                  <p style="font-family:Arial, sans-serif; font-size:10px; font-weight:400;
                             color:rgba(201,168,76,0.7); letter-spacing:3px; text-transform:uppercase;
                             margin:4px 0 0; line-height:1;">
                    Formations &amp; Réalisations
                  </p>
                </td>
              </tr>
            </table>

            {{-- Titre principal --}}
            <p style="font-family:'Georgia', 'Times New Roman', serif; font-size:34px; font-weight:700;
                       color:#F8F5EE; margin: 36px 0 12px; line-height:1.1; text-align:center;">
              Demande de devis<br>
              <em style="color:#C9A84C; font-style:italic;">bien reçue !</em>
            </p>
            <p style="font-family:Arial, sans-serif; font-size:14px; color:rgba(248,245,238,0.55);
                       line-height:1.7; margin:0; text-align:center; max-width:400px; margin-left:auto; margin-right:auto;">
              Bonjour <strong style="color:rgba(248,245,238,0.85);">{{ str()->ucfirst($prenom) }} {{ str()->upper($nom) }}</strong>,
              nous avons bien reçu votre demande et vous répondrons sous <strong style="color:#C9A84C;">24h</strong>.
            </p>

          </td>
        </tr>

        {{-- ╔══════════════════════════════════════════
             ║  CORPS — récapitulatif
             ╚══════════════════════════════════════════ --}}
        <tr>
          <td class="email-content" style="padding: 48px 48px 40px; background-color:#ffffff;">

            {{-- Section label --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:28px;">
              <tr>
                <td style="border-bottom: 1px solid #E8E4DA; padding-bottom:14px;">
                  <p style="font-family:Arial, sans-serif; font-size:10px; font-weight:700;
                             letter-spacing:3.5px; text-transform:uppercase; color:#C9A84C; margin:0;">
                    Récapitulatif de votre demande
                  </p>
                </td>
              </tr>
            </table>

            {{-- ── Grille des champs ── --}}

            {{-- Nom + Prénom --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:12px;" class="field-row">
              <tr>
                <td class="field-row" width="50%" valign="top" style="padding-right:10px; padding-bottom:12px;">
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                                 border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                                 padding:14px 16px;">
                        <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                                   letter-spacing:2px; text-transform:uppercase; color:#14181d;
                                   margin:0 0 5px;">Prénom</p>
                        <p style="font-family:'Georgia',serif; font-size:15px; color:#111111;
                                   font-weight:600; margin:0;">
                          {{ str()->ucfirst($prenom) }}
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
                <td class="field-row" width="50%" valign="top" style="padding-bottom:12px;">
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                                 border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                                 padding:14px 16px;">
                        <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                                   letter-spacing:2px; text-transform:uppercase; color:#14181d;
                                   margin:0 0 5px;">Nom</p>
                        <p style="font-family:'Georgia',serif; font-size:15px; color:#111111;
                                   font-weight:600; margin:0;">
                          {{ str()->upper($nom) }}
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- Email + Téléphone --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:12px;" class="field-row">
              <tr>
                <td class="field-row" width="50%" valign="top" style="padding-right:10px; padding-bottom:12px;">
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                                 border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                                 padding:14px 16px;">
                        <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                                   letter-spacing:2px; text-transform:uppercase; color:#14181d;
                                   margin:0 0 5px;">E-mail</p>
                        <p style="font-family:Arial,sans-serif; font-size:13.5px; color:#C9A84C;
                                   font-weight:500; margin:0; word-break:break-all;">
                          <a href="mailto:{{ $email_client }}" style="color:#C9A84C; text-decoration:none;">
                            {{ $email_client }}
                          </a>
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
                <td class="field-row" width="50%" valign="top" style="padding-bottom:12px;">
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                                 border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                                 padding:14px 16px;">
                        <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                                   letter-spacing:2px; text-transform:uppercase; color:#14181d;
                                   margin:0 0 5px;">Téléphone</p>
                        <p style="font-family:'Georgia',serif; font-size:15px; color:#111111;
                                   font-weight:600; margin:0;">
                          +33{{ $telephone ?? '—' }}
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- Ville + Budget --}}
            {{-- @if(!empty($ville) || !empty($budget))
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:12px;" class="field-row">
              <tr>
                @if(!empty($ville))
                <td class="field-row" width="50%" valign="top" style="padding-right:10px; padding-bottom:12px;">
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                                 border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                                 padding:14px 16px;">
                        <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                                   letter-spacing:2px; text-transform:uppercase; color:#14181d;
                                   margin:0 0 5px;">Ville / Code postal</p>
                        <p style="font-family:'Georgia',serif; font-size:15px; color:#111111;
                                   font-weight:600; margin:0;">
                          {{ $ville }}
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
                @endif
              </tr>
            </table>
            @endif --}}

            {{-- Catégories sélectionnées --}}
            @if(!empty($categories) && count($categories) > 0)
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:12px;">
              <tr>
                <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                           border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                           padding:16px 18px;">
                  <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                             letter-spacing:2px; text-transform:uppercase; color:#14181d;
                             margin:0 0 12px;">
                    Catégorie(s) sélectionnée(s)
                  </p>
                  <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      {{-- Badges catégories --}}
                      <td>
                        @php
                          $labels = [
                            'travaux'        => 'Service travaux',
                            'airless'        => 'Formation airless',
                            'enduits'        => 'Formation enduits peinture',
                            'diagnostic'     => 'Diagnostics travaux',
                            'accompagnement' => 'Accompagnement travaux',
                            'realisation'    => 'Réalisation',
                          ];
                        @endphp
                        @foreach($categories as $cat)
                          <table role="presentation" cellpadding="0" cellspacing="0" border="0"
                                 style="display:inline-table; margin:0 8px 8px 0;">
                            <tr>
                              <td style="background-color:rgba(201,168,76,0.12);
                                         border:1px solid rgba(201,168,76,0.35);
                                         border-radius:100px; padding:6px 14px;">
                                <p style="font-family:Arial,sans-serif; font-size:12px;
                                           font-weight:600; color:#8B6914; margin:0; white-space:nowrap;">
                                  {{ $labels[$cat] ?? ucfirst($cat) }}
                                </p>
                              </td>
                            </tr>
                          </table>
                        @endforeach
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            @endif

            {{-- Message / Description --}}
            @if(!empty($message_client))
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:12px;">
              <tr>
                <td style="background-color:#F8F5EE; border:1px solid #E8E4DA;
                           border-left:3px solid #C9A84C; border-radius:0 6px 6px 0;
                           padding:16px 18px;">
                  <p style="font-family:Arial,sans-serif; font-size:9.5px; font-weight:700;
                             letter-spacing:2px; text-transform:uppercase; color:#14181d;
                             margin:0 0 10px;">Description du projet</p>
                  <p style="font-family:Arial,sans-serif; font-size:14px; color:#555555;
                             line-height:1.75; margin:0; font-style:italic;">
                    "{{ $message_client }}"
                  </p>
                </td>
              </tr>
            </table>
            @endif

            {{-- ── Séparateur ── --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin: 36px 0 32px;">
              <tr>
                <td style="height:1px; background-color:#E8E4DA;"></td>
              </tr>
            </table>

            {{-- ── Message de réassurance ── --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:36px;">
              <tr>
                <td bgcolor="#14181d" style="background-color:#14181d; border-radius:6px; padding:28px 28px;">
                  <p style="font-family:'Georgia','Times New Roman',serif; font-size:17px;
                             font-weight:700; color:#F8F5EE; margin:0 0 10px; line-height:1.2;">
                    Et maintenant ?
                  </p>
                  {{-- Étapes --}}
                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                    @php
                      $steps = [
                        ['num' => '1', 'title' => 'Votre demande est enregistrée', 'desc' => 'Nous avons bien reçu toutes vos informations.'],
                        ['num' => '2', 'title' => 'Marc vous rappelle sous 24h', 'desc' => 'Pour affiner votre besoin et répondre à vos questions.'],
                        ['num' => '3', 'title' => 'Vous recevez un devis détaillé', 'desc' => 'Clair, sans surprise, et sans engagement de votre part.'],
                      ];
                    @endphp
                    @foreach($steps as $step)
                    <tr>
                      <td style="padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.06);">
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td valign="top"
                                style="width:32px; height:32px; background-color:rgba(201,168,76,0.12);
                                       border-radius:50%; text-align:center; line-height:32px;
                                       font-family:Arial,sans-serif; font-size:12px; font-weight:700;
                                       color:#C9A84C; min-width:32px;">
                              {{ $step['num'] }}
                            </td>
                            <td style="width:14px;"></td>
                            <td valign="middle">
                              <p style="font-family:Arial,sans-serif; font-size:13px; font-weight:600;
                                         color:#F8F5EE; margin:0 0 2px;">{{ $step['title'] }}</p>
                              <p style="font-family:Arial,sans-serif; font-size:12px;
                                         color:rgba(248,245,238,0.45); margin:0; line-height:1.5;">
                                {{ $step['desc'] }}
                              </p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                </td>
              </tr>
            </table>

            {{-- ── Bouton CTA ── --}}
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center"
                   style="margin: 0 auto;">
              <tr>
                <td class="btn-td" align="center"
                    style="background-color:#C9A84C; border-radius:3px;">
                  <a href="{{ config('app.url') }}"
                     style="display:inline-block; padding:16px 40px;
                            font-family:Arial,sans-serif; font-size:11px; font-weight:700;
                            letter-spacing:2.5px; text-transform:uppercase;
                            color:#111111; text-decoration:none; white-space:nowrap;">
                    Visiter notre site →
                  </a>
                </td>
              </tr>
            </table>

          </td>
        </tr>

        {{-- ╔══════════════════════════════════════════
             ║  FOOTER EMAIL
             ╚══════════════════════════════════════════ --}}
        <tr>
          <td class="footer-pad" bgcolor="#14181d"
              style="background-color:#14181d; padding:36px 48px; text-align:center;">

            {{-- Ligne dorée --}}
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="margin-bottom:24px;">
              <tr>
                <td style="height:1px; background:linear-gradient(90deg, #14181d 0%, rgba(201,168,76,0.4) 50%, #14181d 100%);"></td>
              </tr>
            </table>

            {{-- Réseaux sociaux --}}
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center"
                   style="margin-bottom:20px;">
              <tr>
                <td style="padding:0 6px;">
                  <a href="#" style="display:inline-block; width:34px; height:34px; background-color:#1e2329;
                                      border:1px solid rgba(255,255,255,0.08); border-radius:4px;
                                      text-align:center; line-height:34px; font-size:15px;
                                      text-decoration:none;">📘</a>
                </td>
                <td style="padding:0 6px;">
                  <a href="#" style="display:inline-block; width:34px; height:34px; background-color:#1e2329;
                                      border:1px solid rgba(255,255,255,0.08); border-radius:4px;
                                      text-align:center; line-height:34px; font-size:15px;
                                      text-decoration:none;">📸</a>
                </td>
                <td style="padding:0 6px;">
                  <a href="#" style="display:inline-block; width:34px; height:34px; background-color:#1e2329;
                                      border:1px solid rgba(255,255,255,0.08); border-radius:4px;
                                      text-align:center; line-height:34px; font-size:15px;
                                      text-decoration:none;">💼</a>
                </td>
              </tr>
            </table>

            {{-- Coordonnées --}}
            <p style="font-family:Arial,sans-serif; font-size:12px; color:rgba(248,245,238,0.35);
                       line-height:1.8; margin:0 0 16px;">
              📍 Île-de-France &nbsp;·&nbsp;
              📞 01 23 45 67 89 &nbsp;·&nbsp;
              <a href="mailto:contact@lessecretsdupeintre.fr"
                 style="color:rgba(201,168,76,0.6); text-decoration:none;">
                contact@lessecretsdupeintre.fr
              </a>
            </p>

            {{-- Copyright + liens légaux --}}
            <p style="font-family:Arial,sans-serif; font-size:11px; color:rgba(248,245,238,0.2);
                       line-height:1.8; margin:0;">
              © {{ date('Y') }} Les Secrets du Peintre — Tous droits réservés
              &nbsp;|&nbsp;
              <a href="{{ config('app.url') }}/mentions-legales"
                 style="color:rgba(248,245,238,0.2); text-decoration:none;">Mentions légales</a>
              &nbsp;|&nbsp;
              <a href="{{ config('app.url') }}/politique-confidentialite"
                 style="color:rgba(248,245,238,0.2); text-decoration:none;">Confidentialité</a>
            </p>

            {{-- Désabonnement transactionnel --}}
            <p style="font-family:Arial,sans-serif; font-size:10px; color:rgba(248,245,238,0.15);
                       line-height:1.6; margin:16px 0 0;">
              Cet e-mail a été envoyé automatiquement suite à votre demande sur notre site.<br>
              Si vous n'êtes pas à l'origine de cette demande,
              <a href="{{ config('app.url') }}/contact"
                 style="color:rgba(201,168,76,0.4); text-decoration:none;">contactez-nous</a>.
            </p>

          </td>
        </tr>

      </table>
      {{-- /carte principale --}}

    </td>
  </tr>
</table>

</body>
</html>