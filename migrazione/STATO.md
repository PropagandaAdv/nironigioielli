# Stato migrazione Nironi Gioielli (staging)

Scelte: escluse le pagine di servizio (homepage, sito-in-costruzione, cookies). Da migrare: home, chi-siamo, servizi, prodotti, contatti, il-progetto, privacy-policy (slug gia' presente sullo staging: da decidere).

Fatto: permalink /%postname%/, variabili globali (nironi-oro/nero/bianco/grigio-chiaro, font-titoli Lexend Zetta, font-testo Lato),
media home (ID in media_map.json), menu WP (Menu left/right/footer, voci come custom link), header (ID 49), footer (ID 50),
homepage (ID 51, slug home, impostata come pagina iniziale). Staging gia' noindex (blog_public=0).

Limiti noti: logo e ornamenti SVG non caricabili (svg_not_allowed); nessun plugin SEO (meta title/description non scrivibili);
LiteSpeed non attivo; menu dei prodotti puntano al live (/prodotto/* e' un CPT non migrato); widget Menu V3 non collegato alle variabili globali.
