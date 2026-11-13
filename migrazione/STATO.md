# Stato migrazione Nironi Gioielli (staging)

Pagine migrate (Elementor, container nativi, header/footer Theme Builder 49/50):
home 51 | chi-siamo 88 | servizi 90 | prodotti 92 | contatti 94 | il-progetto 96 | privacy-policy 98
Escluse (pagine di servizio): homepage, sito-in-costruzione, cookies.
Privacy: la bozza WordPress originale (id 3) e' stata lasciata intatta e spostata su slug privacy-policy-bozza-wordpress.

Menu WP: Menu left/right/footer con voci come link personalizzati agli slug dello staging (sottomenu prodotti -> URL live /prodotto/*, CPT non migrato).
Variabili globali: nironi-oro/nero/bianco/grigio-chiaro, font-titoli (Lexend Zetta), font-testo (Lato). Classi globali: legale-titolo/testo/sottotitolo.

Limiti: SVG non caricabili (convertiti in PNG); nessun plugin SEO (meta in inventario/*.json); widget Menu V3 con colori non collegati alle variabili;
cookie banner Cookiebot e carousel non migrati; LiteSpeed non attivo.

## Fase restyling + e-commerce (12/11/2026)
Backup UpdraftPlus prima dei lavori: id 20b4e3e7d2321835. Design: Cormorant Garamond (titoli) + Jost (testi), classi globali nl-*, variabili nironi-*.
Pagine: home 51, chi-siamo 88, servizi 90, prodotti 92 (directory brand), contatti 94, il-progetto 96, privacy 98, spedizioni 170, resi 172, termini 174 (segnaposto), carrello 121, pagamento 122, mio-account 123.
Header 49 (logo sx, menu centro, CTA "Contattaci" dx, icona carrello), footer 50 (colonna Acquisti + "Powered by Propaganda Adv").
WooCommerce: brand nativi (Brand Demo 1/2), attributi Genere/Materiale/Taglia, 7 prodotti DEMO in bozza. Documenti cliente in ecommerce/.
Aperti: impostazioni WooCommerce non scrivibili dal connettore (prezzi IVA inclusa, coming soon, pagamenti), utente Shop Manager, filtri, template Elementor archivio/prodotto singolo, test flusso acquisto.

## Test flusso e-commerce (12/11/2026, negozio Live)
Percorso: /prodotti/ -> brand-demo-1 -> prodotto -> aggiungi al carrello -> carrello -> pagamento. OK fino al pagamento.
Blocchi: (1) nessun metodo di pagamento attivo (checkout: "Non sono disponibili metodi di pagamento") -> ordine non completato;
(2) pagine brand e prodotto singolo usano il template del tema (header/footer Twenty Twenty-Five, non quelli Elementor) e danno l'errore JS "elementorFrontendConfig is not defined".
Prodotto di prova 144 pubblicato solo per il test e rimesso in bozza. Nessun ordine creato. Screenshot in migrazione/screenshot/test-flusso/.

## Fase scheda prodotto / header-footer (13/11/2026)
- Header 49: trasparente sulla home in cima, solido #383838 dopo scroll (CSS kit post 8, animation-timeline: scroll), sticky. Verificato desktop/tablet/mobile (screenshot in screenshot/scheda-prodotto/header-*-top.png). Icone Cerca e Carrello presenti.
- Attributi globali creati: Misura (4), Metallo (5), Pietra (6), Caratura (7), Colore/Purezza (8), Produzione (9). Termini Misura 12/14/16 (id 36-38).
- Prodotto variabile di prova: id 223 (bozza), 3 varianti (224-226) a prezzo 100 di prova.
- NON fatti (connettore instabile/senza widget): template Single Product definitivo, popup misure, barra annunci, plugin swatches/incisione/wishlist, restyle archivi/carrello. Vedi report.
