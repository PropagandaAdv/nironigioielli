# Stato migrazione Nironi Gioielli (staging)

Pagine migrate (Elementor, container nativi, header/footer Theme Builder 49/50):
home 51 | chi-siamo 88 | servizi 90 | prodotti 92 | contatti 94 | il-progetto 96 | privacy-policy 98
Escluse (pagine di servizio): homepage, sito-in-costruzione, cookies.
Privacy: la bozza WordPress originale (id 3) e' stata lasciata intatta e spostata su slug privacy-policy-bozza-wordpress.

Menu WP: Menu left/right/footer con voci come link personalizzati agli slug dello staging (sottomenu prodotti -> URL live /prodotto/*, CPT non migrato).
Variabili globali: nironi-oro/nero/bianco/grigio-chiaro, font-titoli (Lexend Zetta), font-testo (Lato). Classi globali: legale-titolo/testo/sottotitolo.

Limiti: SVG non caricabili (convertiti in PNG); nessun plugin SEO (meta in inventario/*.json); widget Menu V3 con colori non collegati alle variabili;
cookie banner Cookiebot e carousel non migrati; LiteSpeed non attivo.
