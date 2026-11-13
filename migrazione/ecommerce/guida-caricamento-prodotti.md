# Guida: come caricare un prodotto sul sito Nironi Gioielli

> Documento per il cliente. Tono semplice, passo per passo. Le schermate verranno aggiunte a fine progetto.
> I testi legali (spedizioni, resi, termini) sono ancora segnaposto: vedi la sezione "Cosa manca".

## 1. Accedere
1. Vai su `https://…/wp-admin` (indirizzo definitivo da confermare) e accedi con le tue credenziali ("Gestore del negozio").
2. Dal menu a sinistra scegli **Prodotti → Aggiungi nuovo**.

## 2. Inserire un prodotto (campi essenziali)
1. **Titolo**: nome del gioiello (es. "Anello solitario").
2. **Foto**: nella colonna a destra "Immagine del prodotto" carica la foto principale; in "Galleria prodotto" aggiungi le altre (almeno 3-4 foto, meglio sfondo neutro).
3. **Prezzo**: in "Dati prodotto" scrivi il **Prezzo di listino** (IVA inclusa).
4. **Marchio (brand)**: nella colonna a destra "Marchi del prodotto" scegli il brand. Se manca, scrivilo a Propaganda Adv.
5. **Attributi** (scheda "Attributi" in Dati prodotto): scegli **Genere**, **Materiale**, **Taglia** e seleziona i valori. Spunta "Visibile nella pagina del prodotto" e (se usi le taglie per scegliere) "Usato per le varianti".
6. **Descrizione breve**: 1-2 frasi che compaiono accanto alla foto.
7. **Descrizione**: dettagli, materiali, misure, cura del gioiello.
8. Premi **Pubblica** (oppure **Salva bozza** per ricontrollare più tardi).

## 3. Caricare molti prodotti insieme (CSV)
1. Apri `template-prodotti.csv` con Excel/Google Fogli, **tenendo la riga di intestazione**.
2. Compila una riga per prodotto: lascia `Pubblicato = 0` per caricarli in bozza, controllali e poi pubblicali.
3. Nella colonna *Immagini* metti gli indirizzi web delle foto (separati da virgola) oppure carica prima le foto in **Media → Aggiungi** e usa gli indirizzi indicati.
4. Vai su **Prodotti → Importa** e scegli il file. Verifica l'anteprima delle colonne e avvia l'importazione.

## 4. Consigli
- Usa foto con proporzioni quadrate e almeno 1200 px: il sito le ridimensiona da solo.
- Scrivi i nomi sempre nello stesso modo (es. "Anello …", "Bracciale …").
- Controlla sempre l'anteprima su telefono.

## 5. Cosa manca (a cura del cliente)
Elenco brand definitivo e loghi · filtri per ogni brand · testi di spedizioni, resi e termini di acquisto (da validare legalmente) · dati per i pagamenti · prodotti.

## 6. Scheda prodotto: foto, misure, incisione, parure, badge (aggiornamento)
**Foto della galleria nell'ordine giusto.** La *Immagine del prodotto* è la foto grande iniziale (proporzione consigliata 4:5, verticale). Le foto in *Galleria prodotto* compaiono come miniature nell'ordine in cui le trascini: metti per prime le più belle (primo piano, poi indossato, poi dettaglio). Trascina le miniature per riordinarle.

**Attributi già pronti (si selezionano, non si riscrivono).** In *Dati prodotto → Attributi* scegli dall'elenco: **Misura, Metallo, Pietra, Caratura, Colore/Purezza, Produzione** (oltre a Genere, Materiale, Taglia). Clicca "Aggiungi esistente", scegli i valori; se manca un valore, "Crea valore". Spunta "Visibile nella pagina del prodotto": gli attributi visibili diventano la tabella "Specifiche tecniche".

**Varianti / misure (anelli).** Imposta il prodotto come *Prodotto variabile*, nella scheda *Attributi* aggiungi **Misura**, spunta "Usato per le varianti", poi nella scheda *Varianti* scegli "Crea varianti da tutti gli attributi" e imposta il prezzo di ogni misura. Esempio già pronto: prodotto "PRODOTTO DI PROVA - Anello variabile" (bozza).

**Incisione.** [DA CONFERMARE CON IL CLIENTE: gratuita o a pagamento] Il campo "Incisione" (max 20 caratteri) richiede un plugin di add-on prodotto: non ancora installato (vedi report). Fino ad allora l'incisione si concorda nelle note dell'ordine.

**Completa la tua parure (upsell).** Nella scheda *Prodotti collegati* di ogni prodotto, in "Vendite incrociate" / "Upsell" cerca e aggiungi i gioielli abbinati (fino a 4). Se lasci vuoto, il sito mostra prodotti della stessa categoria.

**Badge ("Novità", "Esclusiva", "Offerta").** Il badge compare solo se il prodotto ha l'etichetta (Tag prodotto, es. "Novità", "Esclusiva") oppure un prezzo in offerta. Nessun badge = nessuna etichetta e nessuna offerta.
