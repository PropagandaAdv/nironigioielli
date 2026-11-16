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

## 16/11/2026 - parti senza widget Woo mancanti
- Plugin ora presenti: Variation Swatches (attivo), WooCommerce Custom Product Addons Free (INSTALLATO MA NON ATTIVO), ACF non installato.
- Creati (tutti in bozza, senza condizioni = disattivati): 227 "Garanzie 2x2 (riutilizzabile)" (sezione, testi [DA CONFERMARE]), 228 popup "Guida alle misure" (segnaposto), 229 "Barra annunci (disattivata)".
- Da fare a mano nell'editor (widget non esposti al connettore): Prezzo, Breadcrumb, Tab dati, Correlati nel template 207; inserire la sezione 227 (Template) nel 207; agganciare il popup 228 al link "Guida alle misure".

## 16/11/2026 - stile shop e verifica
- Template 207: titolo, brand, descrizione breve con font/colori del sito (resta BOZZA, senza prezzo).
- Kit CSS (post 8, pubblicato): avvisi Woo, pulsanti, campi, card prodotto 4:5 con hover, "IVA inclusa" accanto al prezzo prodotto, swatches misure.
- Verifica Playwright: home header trasparente (desk/mobile); carrello, pagamento, account header solido, nessun overflow a 375px. /negozio/ usa ancora il tema (errore JS elementorFrontendConfig).
- Aperto: icona hamburger mobile appare come riquadro scuro; flusso con incisione non testato (addon non attivo).

## 16/11/2026 - template scheda prodotto pubblicato
- Scoperta: il metodo "raw" di elementor_add_widget accetta widget V3 non elencati dal connettore (prezzo, breadcrumb, tab dati, upsell, correlati, rating, meta, template). I V3 non sono spostabili/eliminabili con manage-elements: vanno inseriti gia' al posto giusto (usando container V3 come genitori).
- Nuovo template prodotto 241 "Scheda prodotto Nironi" PUBBLICATO, condizione include/product. Contiene: breadcrumb, galleria | titolo (h1), valutazione, meta/SKU, prezzo (+IVA inclusa via CSS kit), descrizione breve, selettore misure (swatches), aggiungi al carrello, "Prenota una prova in boutique" (-> /contatti/), garanzie 2x2 (227, pubblicato), tab Descrizione/Informazioni aggiuntive/Recensioni, "Completa la tua parure" (upsell + correlati). Il vecchio 207 resta bozza (non usato).
- Kit: colori e tipografia di sistema ora Nironi (antracite/oro, Cormorant/Jost).
- Test: prodotto 223 pubblicato per lo screenshot e rimesso in bozza. Screenshot prodotto-desk/mob in screenshot/scheda-prodotto/.
- Aperto: bottone aggiungi al carrello grigio, tab con stile di default, etichetta brand assente, titolo sezione parure sopra widget vuoti se nessun upsell/correlato, incisione (addon non attivo), archivi/negozio ancora tema.
