<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public $practices = [
        [
            'id' => 1,
            'name' => 'PERSONE E FAMIGLIA',
            'description' => 'Separazioni e divorzi tra coniugi (sia consensuali che giudiziali), affidamento di figli minorenni, mantenimento coniuge e figli maggiori e/o minori, violazione degli obblighi di assistenza familiare, accertamento del rapporto di filiazione (legittima e naturale), dichiarazione giudiziale di maternità e paternità, disconoscimento di paternità, convivenza di fatto e regolamentazione dei rapporti patrimoniali e non, successioni, testamenti e donazioni, interdizione, inabilitazione, amministrazione di sostegno.'
        ],
        [
            'id' => 2,
            'name' => 'DIRITTO AL LAVORO',
            'description' => 'Consulenza legale in materia contrattuale, sindacale e previdenziale: licenziamenti, mobbing, mancato pagamento dello stipendio e/o del trattamento di fine rapporto o di ogni altro emolumento per i lavoratori dipendenti/parasubordinati, mancata regolarizzazione del rapporto di lavoro, contestazioni disciplinari, contratti a termine, infortuni sul lavoro.'
        ],
        [
            'id' => 3,
            'name' => 'RESPONSABILITA’ CIVILE',
            'description' => 'Pratiche legali e assistenza professionale per il risarcimento di danni subiti in caso di sinistri stradali, individuazione della responsabilità civile automobilistica, infortuni in luoghi interni ed esterni, responsabilità del medico e dell’ospedale e casi di malasanità.'
        ],
        [
            'id' => 4,
            'name' => 'RISARCIMENTO DEL DANNO',
            'description' => 'Assistenza e pratiche legali per il risarcimento dei danni subiti per ogni tipo di fatto illecito di natura contrattuale o extracontrattuale, riguardanti cose (danni materiali) o persone (danni fisici, morali, esistenziali, etc.), risarcimento assicurativo, risarcimento in seguito a furti.'
        ],
    ];

    public $aboutUs = [
        [
            'id' => 1,
            'img' => '/media/vittorio.jpg',
            'name' => 'Vittorio A.',
            'surname' => 'Marinelli',
            'role' => 'FONDATORE e Patrocinante in Cassazione',
            'description' => 'Ha fatto parte dell’Ufficio Legale Nazionale del CODACONS, patrocinando cause di rilevanza nazionale, ampiamente pubblicizzate; è divenuto il Responsabile del Dipartimento Assicurazioni della medesima associazione ed è stato nominato dal Ministero delle Attività Produttive, con Deliberazione n. 27/01 del 12 settembre 2001, componente del Comitato Ristretto sull’RC Auto.

            Ha preso parte a numerose trasmissioni televisive nazionali e a molteplici convegni. Nel 2000, è divenuto ​ Vicepresidente e legale rappresentante del medesimo CODACONS.
            
            Nel 2001, ha fondato EUROPEAN CONSUMERS. Ha collaborato con il Comitato Antiplagio, al Telefono Antiplagio per l’assistenza alle vittime di maghi, chiromanti e ciarlatani ed è stato vice presidente del CM COORDINAMENTO MOTOCICLISTI.
            
            L’avvocato Vittorio A. Marinelli è il fondatore dello studio legale a Roma Marinelli & Partners formato da 8 avvocati che operano nella sede principale e oltre 40 sedi partner in tutta Italia.
            
            Fornisce una prima consulenza telefonica orientativa e senza impegno per verificare il problema del cliente e dare un primo parere entro 24 ore su quale sia la cosa migliore da fare.'
        ],
        [
            'id' => 2,
            'img' => '/media/davide.jpg',
            'name' => 'Antonio Davide',
            'surname' => 'Mastrone',
            'role' => 'AVVOCATO / Dott. in Economia e Management',
            'description' => 'Avvocato abilitato all’esercizio della professione forense presso la Corte di Appello di Roma, è laureato in giurisprudenza presso l’università LUMSA e in economia e management presso l’università degli studi di Roma Tor Vergata.

            Specializzato in compliance 231, con particolare focus sulla responsabilità amministrativa degli enti (Decreto 231). Si è altresì occupato della redazione dei Modelli di cui al D.lgs. 231/01 per imprese di medio – grandi dimensioni. Ha ricoperto la carica di membro interno dell’Organismo di Vigilanza di una nota S.p.A. ed attualmente ricopre la qualità di Presidente dell’Organismo di Vigilanza all’interno di una Società Cooperativa.
            
            L’avvocato Mastrone è inoltre esperto in Diritto Regolamentare ed Energetico avendo maturato tale esperienza collaborando con diverse Compagnie e Broker operanti nei diversi rami del settore.'
        ],
        [
            'id' => 3,
            'img' => '/media/andrea.jpg',
            'name' => 'Andrea',
            'surname' => 'Sellaroli',
            'role' => 'AVVOCATO',
            'description' => 'Avvocato civilista abilitato all’esercizio della professione forense presso la Corte di Appello di Roma. È laureato in giurisprudenza presso l’Università di Roma “La Sapienza”.

            Specializzato diritto civile con particolare riferimento alle materie del diritto bancario, diritto societario, successioni ed eredità, situazioni debitorie, cartelle esattoriali, responsabilità civile, diritto del lavoro e malasanità.'
        ],
        [
            'id' => 4,
            'img' => '/media/naemul.jpg',
            'name' => 'Naemul',
            'surname' => 'Khan',
            'role' => 'DOTTORE in Giurisprudenza',
            'description' => 'Praticante avvocato abilitato al patrocinio sostitutivo e Dottore in Giurisprudenza presso l’Università degli Studi di Trento indirizzo Comparato Europeo e Transnazionale, con una tesi di laurea magistrale in diritto delle migrazioni e costituzionale.

            Vocazione internazionale con una prospettiva orientata verso il diritto internazionale privato. Ha svolto periodi di formazione accademica all’estero, nello specifico presso l’Università di Rijeka in Croatia. Parla fluentemente l’inglese oltre a essere madrelingue di ben due diverse lingue: bengalese e italiano.
            
            Si occupa delle materie civile, immigrazione, amministrativo e propende per una formazione a 360 gradi. Persona dotata di imprenditorialità e grandi capacità d’iniziativa, svolge un ruolo significativo all’interno dello Studio Legale.
            
            '
        ],
        [
            'id' => 5,
            'img' => '/media/annafranca.jpg',
            'name' => 'Annafranca',
            'surname' => 'Coppola',
            'role' => 'AVVOCATO',
            'description' => 'Al termine di un impegnativo percorso di studi, L’Avvocato Annafranca Coppola si può fregiare del titolo di Avvocato del minore e CTU presso il Tribunale, occupandosi di problematiche relative a: diritto di famiglia, separazione consensuale o giudiziale, divorzio, nullità matrimonio, tutela dei figli minori, affidamento condiviso, riconoscimento paternità, mantenimento figli e molto altro.
            In tale sede giudiziaria, ha prestato e presta attivamente la rappresentanza di genitori i cui figli minori collocati in strutture protette-casa famiglia a seguito di segnalazioni attivate da Azienda ASL, Consultori familiari, Istituti Scolastici, Dipartimento Politiche Sociali, Servizio Sociale Professionale presso Ospedale Pediatrico “Bambino Gesù” di Roma, Servizio Sociale e tutte le strutture pubbliche e private deputate al suddetto dovere, e depositate presso la Procura della Repubblica per i minorenni, ottenendo il rientro degli stessi minori presso il genitore.
            Sempre in tale sede, opera nei procedimenti iscritti per la tutela contro abusi sessuali, maltrattamenti e sfruttamento a danno dei minori.
            Altresì, numerosi anche gli interventi professionali promossi o intervenienti per le procedure promosse a tutela di figli maggiorenni irregolari per condotta o per carattere ex art. 25 Regio Decreto Legge n. 1404 del 20/07/1934.
            Grazie alla consolidata esperienza acquisita e alla passione dimostrata, l’Avvocato Coppola è in grado di seguire il cliente con dedizione e professionalità, fornendo assistenza completa e massima disponibilità.            
            
            '
        ],
        [
            'id' => 6,
            'img' => '/media/valeria.jpg',
            'name' => 'Valeria',
            'surname' => 'Giovannetti',
            'role' => 'AVVOCATO',
            'description' => 'L’avvocato Valeria Giovannetti si laurea a maggio 2009, terminando i suoi studi in 5 anni. Già a marzo 2009 prima di discutere la tesi iniziava la propria collaborazione professionale, ormai decennale, con lo studio Legale Marinelli.

            Si occupa principalmente di diritto civile, infortunistica stradale, materia di famiglia (separazione e divorzi e regolamentazione minori).
            Ha svolto varie pratiche in materia di opposizione alle sanzioni amministrative ed avverso le cartelle esattoriali.
            Ha approfondito la materia condominiale alla quale si è appassionata, nonchè a tutte quelle controversie relative a vizi di costruzione.
            
            Ha inoltre avuto modo di approcciarsi alle problematiche relative ai cd PDZ (Piani di zona comunali) per le opere di urbanizzazione, rapportandosi con i vari enti preposti (Regione, Comune e Municipio).          
            
            '
        ],
    ];

    public $feedback = [
        [
            'text' => "Aumenta la credibilità del tuo prodotto e servizio aggiungendo le testimonianze dei tuoi clienti. Le persone adorano i consigli, quindi il feedback di altri che l'hanno provato è inestimabile.",
            'user' => 'Nicola Mazzaferro'
        ],
        [
            'text' => "Aumenta la credibilità del tuo prodotto e servizio aggiungendo le testimonianze dei tuoi clienti. Le persone adorano i consigli, quindi il feedback di altri che l'hanno provato è inestimabile.",
            'user' => 'Valerio Cassano'
        ],
        [
            'text' => "Aumenta la credibilità del tuo prodotto e servizio aggiungendo le testimonianze dei tuoi clienti. Le persone adorano i consigli, quindi il feedback di altri che l'hanno provato è inestimabile.",
            'user' => 'Nicola Paccone'
        ],
    ];

    public function home() {
        return view('welcome', ['feedback' => $this->feedback]);
    }

    public function practice() {
        return view('practice', ['practices' => $this->practices]);
    }

    public function about_us() {
        return view('about_us', ['aboutUs' => $this->aboutUs]);
    }

    public function contact() {
        return view('contact');
    }

    public function practice_detail($id) {
        foreach ($this->practices as $practice) {
            if ($practice['id'] == $id) {
                return view('practice_detail', ['practice'=>$practice]);
            }
        }
    }

    public function about_us_detail($id) {
        foreach ($this->aboutUs as $about) {
            if ($about['id'] == $id) {
                return view('about_us_detail', ['about'=>$about]);
            }
        }
    }
}
