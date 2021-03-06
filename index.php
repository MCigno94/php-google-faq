<?php

$faq_google = [
    
        "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => 
        [
            "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
            "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
        ],


        "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" =>
        [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
            "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online</a>.",
            "<a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ],

        "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" =>
        [
            "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>."
        ],

        "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" =>
        [
            "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
        ]

];
$navbar_items = [
        [
            "title_section" => "Introduzione",
            "active" => false
        ],
        [
            "title_section" => "Norme sulla privacy",
            "active" => false
        ],
        [
            "title_section" => "Termini di servizio",
            "active" => false
        ],
        [
            "title_section" => "Tecnologie",
            "active" => false
        ],
        [
            "title_section" => "Domande frequenti",
            "active" => true
        ],
    ]

//var_dump($faq_google);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faq Google</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .site-header {
        padding: 0 1rem;
        border-bottom: 1px solid grey;
    }
    .logo {
        display: flex;
        align-items: flex-start;
    }
    .navbar {
    }
    ul {
        list-style: none;
        display: flex;
    }
    li {
        margin-right: 1.5rem;
    }
    .active {
        color: #2154c8;
        border-bottom: 3px solid #2154c8;
    }
    li a{
        color: black;
        display:block;
        padding: 1rem 0;
    }
    .logo > img{
        width: 100px;
        height: auto;
    }
    .logo div {
        padding: 0 1rem;
        font-size: 2rem;
    }
    .container {
        width: 65%;
        margin: 0 auto;
    }
    h3 {
        margin-top: 2rem;
        margin-bottom: 1.5rem;
    }
    a {
        text-decoration: none;
    }
    p {
        padding-bottom: 1rem;
        font-size: 0.8rem;
    }
</style>

<body>
    <header class="site-header">
        <div class="logo">
            <img src="https://1000marche.net/wp-content/uploads/2020/03/Google-logo.png" alt="logo google">
            <div>Privacy & Termini</div>
        </div>
        <!-- /.logo -->
        <nav class="navbar">
            <ul>
                <?php foreach ($navbar_items as $key => $value) : ?>
                <li>
                    <a class=" <?php echo $value["active"] == true ? 'active' : '' ?> " href="#"><?php echo $value["title_section"] ?></a>
                    <?php endforeach; ?>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /.site-header -->
    <main class="sitemain">
        <div class="container">
            <section class="articles">
                <?php foreach ($faq_google as $key => $value) : ?>
                    <h3><?php echo $key ?></h3>
                    <?php foreach ($value as $text) : ?>
                        <p><?php echo $text ?></p>
                    <?php endforeach; ?>
                <?php endforeach; ?>        
            </section>
            <!-- /.articles -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /.sitemain -->
</body>
</html>