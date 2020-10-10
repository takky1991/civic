@extends('layout.main')

@section('content')
    <div class="row pt-5">
        <div class="col-12">
            <h1>Tradicija</h1>
        </div>

        <div class="col-lg-6" style="padding-top: inherit; text-align: right;">
            <img class="tradition-img img-fluid" src="img/civic-historija-mlin-transp.jpg" alt="Responsive image">
        </div>
        
        <div class="col-lg-6" style="padding-top: inherit;">
            <div class="container">
                <h5> Poštovani partneri i kupci!</h5>
                <p>S ponosom vam predstavljamo jedinu firmu na području cazinske
                regije u kojoj su se tradicija i zanatsko iskustvo gradili skoro
                stotinu godina!
                Naši počeci naziru se još od vremena naših pradjedova koji su
                se početkom dvadesetog stoljeća prvobitno bavili proizvodnjom
                mlinova za mljevenje kahve, kao i ostalih proizvoda od lima široke
                namjene.</p>
            </div>
   
            <div class="col-12 text-center">
              <img style="padding: 15px;"  class="tradition-img img-fluid" src="img/civic_tradition1.jpg" alt="Responsive image">
            </div>
        </div>

        <!-- Danas -->
        <div class="col-12" id="civic-danas" style="padding-top: inherit;">
            <br>
            <h1>Danas</h1>
            <br>

            <div class="container">
                <p>Danas je firma CIVIĆ d.o.o. jedna od većih i modernijih firmi na području Unsko-sanskog kantona.
                Brojimo 98 zaposlenih radnika i raspolažemo proizvodnim prostorom od 16.000 metara kvadratnih.
                Osnovna djelatnost naše kompanije je proizvodnja građevinske limarije i galanterije, lima u obliku
                crijepa i krovno-fasadnih profiliranih limova te metalnih konstrukcija. Također, proizvodimo
                sisteme za odvod oborinskih voda ali i strojeve za izradu beskonačnih oluka te odvodnih
                cijevi. Novija grana naše djelatnosti jeste i proizvodnja stiropora, odnosno ekspandiranog
                polistirena (EPS-a) u kojoj smo za vrlo kratko vrijeme postali veoma prepoznatljivi na
                bosanskohercegovačkom i regionalnom tržištu.</p>
            </div>

            <br>
            <div class="img text-center">
                <img alt="civic 90 godina" src="img/90godina.png" lazy="loaded" style="width: 200px;">
            </div>
            
            <br>
            <div class="row">
                <div class="col-lg-6" id="profilisani-limovi">
                    <div class="container" style="padding-top: 20px">
                    <h5> PROFILISANI LIIMOVI</h5>
                    <p>Profilisani limovi su sinonim za postojanost i
                    izdržljivost u svim klimatskim uvjetima što je
                    odlika nedostižna poznatim krovopokrivačkim
                    rješenjima. Lim u obliku crijepa otporan je na
                    jake vjetrove uz apsorpciju velikih količina buke
                    uzrokovanih padavinama kiše ili grada.</p>
                    </div>
                </div>

                <div class="col-lg-6" id="profilisani-limovi">
                    <div class="container" style="padding-top: 20px">
                    <h5> METALNE KONSTRUKCIJE</h5>
                    <p>Metalne konstrukcije u gradnji predstavljaju nosivi
                    dio konstrukcije i pretežno su sastavljene od
                    metalnih elemenata. Te konstrukcije se primjenjuju
                    u gotovo svim područjima građenja: hale, hangari,
                    garaže, neboderi, tornjevi, krovišta, nadstrešnice,
                    dimnjaci, skele. Gradnja je brza, a objekti čvrsti
                    i elastični.</p>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-6" id="profilisani-limovi">
                    <div class="container" style="padding-top: 20px">
                    <h5> PROFILISANI FASADNI LIMOVI</h5>
                    <p>Fasadne limove odlikuje velika estetika te objektu
                    na koji se postavlja daju savremen i moderan
                    izgled. Primjenjuje se uglavnom za upravne zgrade
                    i ulaze i objekte, ali ima široku primjenu i kod
                    manjih poslovnih i privatnih objekata.</p>
                    </div>
                </div>

                <div class="col-lg-6" id="profilisani-limovi">
                    <div class="container" style="padding-top: 20px">
                    <h5> TERMOIZOLACIJA</h5>
                    <p>Stiropor je termički i akustički izolator za zidove,
                    krovove i podove u stambenim ili poslovnim
                    prostorima. Uz sve prednosti izolacije on osigurava
                    parapropustnost i prostore bez kondenzanata.
                    EPS je isplativ, teško zapaljiv i ekološki opravdan.</p>
                    </div>
                </div>
            </div>
<!--
            <br>
            <br>
            <div class="row">
                <div class="col-12 text-center">
                    <img class="tradition-img img-fluid" src="img/civic_tradition2.jpg" alt="Responsive image">
                </div>
            </div>   
-->         
        </div>
    </div>
@endsection