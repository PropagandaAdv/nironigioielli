# Completare i template Elementor di prodotto e brand

Due bozze pronte, NON pubblicate e senza condizioni: il sito continua a usare i template standard di WooCommerce finché non le completi.
- **Prodotto singolo (scheletro)**: ID 207 - https://nironigioielli.propagandaadv.com/wp-admin/post.php?post=207&action=elementor
- **Archivio brand (scheletro)**: ID 208 - https://nironigioielli.propagandaadv.com/wp-admin/post.php?post=208&action=elementor

## Prodotto singolo (207)
Contiene: galleria, marchio, titolo, descrizione breve, "Aggiungi al carrello", descrizione completa.
Da fare nell'editor:
1. Sostituisci il riquadro giallo "Prezzo" con il widget **Prezzo prodotto** (WooCommerce), sotto il titolo.
2. Sostituisci il riquadro "Prodotti correlati" con un **Loop Grid** (o il widget Prodotti correlati) sorgente "Prodotti correlati".
3. Compila o elimina il riquadro "Rassicurazioni" (testi da validare con il cliente).
4. In **Pubblica → Aggiungi condizione**: Includi → *Singolo → Prodotti*.
5. Pubblica e controlla un prodotto: dev'esserci l'header del sito (non il menu del tema).

## Archivio brand (208)
Contiene: intestazione con nome del brand, filtri di esempio, griglia prodotti dell'archivio corrente.
Da fare nell'editor:
1. Nella scheda prodotto sostituisci il riquadro "Prezzo" con il widget **Prezzo**/dato dinamico del prodotto.
2. Facoltativo: sostituisci i pulsanti-filtro con i widget filtro (Taxonomy Filter) o i blocchi filtro WooCommerce.
   Nei pulsanti, il filtro e' nel link: `?filter_genere=donna`, `?filter_materiale=oro`, `?filter_taglia=m`. Per un nuovo attributo: crealo in Prodotti → Attributi e duplica un pulsante con `?filter_<slug>=<valore>`.
3. Inserisci logo e descrizione del brand in Prodotti → Marchi, poi rimuovi il riquadro giallo.
4. In **Pubblica → Aggiungi condizione**: Includi → *Archivi → Marchi (product_brand)* (oppure "Archivio prodotti" se la voce Marchi non c'e').
5. Pubblica e controlla `/marchio/brand-demo-1/`.

## Se qualcosa non va
Ogni modifica e' annullabile da Cronologia revisioni. Per disattivare un template basta rimetterlo in bozza.
