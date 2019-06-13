<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ebooks</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{asset('css/backend_css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/backend_css/custom.css')}}" rel="stylesheet">


    </head>
    <body>
    <!-- Site Header -->
    <div class="site-header-bg">
        <div class="container">
            <div class="row">

                <div class="col-sm-3 col-sm-offset-3 text-right">

                </div>
            </div>
        </div>
    </div>

    <!-- Header -->

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif

    {{--@if(isset($referral))--}}
        {{--<div class="alert alert-danger">--}}
            {{--{{$referral}}--}}
        {{--</div>--}}

    {{--@endif--}}


    <section id="header" class="main-header">
        <div class="container">

            <div class="row">

                <nav class="navbar navbar-default col-md-12">
                    <div class="col-md-2 col-sm-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-5">
                        <a href="{{asset('/admin/dashboard')}}"><img src="{{asset('images/backend_images/bitcoin.png')}}" style="width:70px;" alt="logo"></a>
                    </div>
                    <div class="navbar-header ">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-nav-bar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse col-md-8" id="site-nav-bar">
                        <ul class="nav navbar-nav">

                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">Su di noi</a></li>
                            <li><a href="#">Contattaci</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>


            <div class="intro row">
                <div class="overlay "></div>
                <div class="col-sm-7 col-sm-7 col-sm-offset-4">
                    <h2 class="header-quote">RICHIEDI ebook GRATIS!!</h2>

                    <p>
                        Il kit formazione di swisscci.com è un ottimo strumento per chiunque voglia imparare a fare trading sui mercati finanziari. Che tu sia un trader alle prime armi o che tu abbia già esperienza, è sempre importante studiare i mercati prima di fare trading.

                    </p>
                    <h1 class="header-title text-right"><a class="btn btn-warning" style="background-color:#FDBA48; color:#000000;" href=""  data-toggle="modal" data-target="#exampleModalCenter">Scarica ora!</a></h1>
                </div>
            </div> <!-- /.intro.row -->
        </div> <!-- /.container -->
        <div class="nutral"></div>
    </section> <!-- /#header -->

    <!-- Product -->


    <!-- Modal -->
    <div style="margin-top:100px; padding-top:100px" class="modal fade"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <br>
                    <h3 style="" class="modal-title" id="exampleModalLongTitle">Compila il modulo per scaricare il tuo ebook gratuito!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  class="modal-body" >
                    <form style="margin:0 auto" class="col-lg-12" action="{{url('/insert')}}" method="post">{{ csrf_field() }}
                        <div id="tel1" class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name"  class="form-control"  placeholder="Inserisci il nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="surname">Cognome</label>
                                    <input type="text" name="surname"  class="form-control"  placeholder="Inserisci il cognome" required>
                                </div>
                            </div>
                            <br><div>
                                <label for="telNo">Telefono</label>
                            </div>
                            <div class="input-group prefix">

                                <span class="input-group-addon">+39</span>
                                <input class="form-control" id="telNo"  name="telNo" type="tel" placeholder="Inserisci il tuo numero di telefono" required>
                                @if(isset($referral))
                                    <input type="hidden" name="referral" value="{{$referral}}">
                                @endif

                                <br>
                                <span class="validity"></span>
                            </div>
                            <br>
                            <label for="email">Email</label>
                            <input type="email" name="email"  class="form-control"  placeholder="Inserisci l'email" required>

                            <div class="modal-footer">
                                <button type="submit"  name="submit" value="Register" class="btn btn-primary">Avanti</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Partner -->


    <section id="partner" class="partner">

        <div class="container section-bg">
            <br>
            <div>
                <?php if(isset($_GET['error'])):?>
                <div class="alert alert-danger" role="alert">
                    <h4><?php echo $_GET['error'];?></h4>
                </div>

                <?php endif; ?>
            </div>

            <div class="row div1">
                <div class="col-md-3">
                    <img style="height:100px;" src="{{asset('images/backend_images/icn1.png')}}">
                </div>
                <div class="col-md-8  text-left">
                    <h4>ACCRESCI LE TUE COMPETENZE DI TRADING</h4>
                    <p>
                        Il nostro kit dedicato alla formazione è uno strumento da non perdere per i trader di ogni livello. Il kit include ebook, scritti da grandi esperti dei mercati finanziari. Tutti gli ebook trattano gli aspetti fondamentali del trading di forex, CFD, titoli, in maniera semplice e divertente.
                    </p>
                </div>
            </div>
            <hr>

            <div class="clear"></div>
            <!-- start tab -->

            <div class="tab-content row div1" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-md-3">
                        <img style="height:200px;" src="{{asset('images/backend_images/back_it.png')}}">
                    </div>
                    <div class="col-md-8 text-left">
                        <h3>INTRODUZIONE ALLE BASI DEL FOREX</h3>
                        <p>
                            Con questo ebook introduttivo, i trader forex alle prime armi possono comprendere il funzionamento del trading di valute. Ogni capitolo fa scoprire al lettore una parte diversa del mondo del forex, dalle definizioni alla lettura di una quotazione.
                        </p>
                        <p>
                            Questa pubblicazione presenta i pro e i contro del trading forex, oltre alle strategie per creare un buon portafoglio di trading. Sebbene l’ebook inizi dalle basi, è diretto ai trader di tutti i livelli, poiché contribuisce ad accrescere le competenze sul mercato forex utili ad evitare errori molto cari.
                        </p>
                        <p>
                            Tutto ciò di cui hai bisogno per fare trading di valute è un computer ed una connessione a Internet. È un’attività da fare anche comodamente da casa o nel tempo libero, senza trascurare la tua occupazione principale.
                        </p>
                        <br>
                        <a class="btn btn-warning" style="background-color:#FDBA48; color:#000000;" href=""  data-toggle="modal" data-target="#exampleModalCenter">Scarica gratis!</a>
                        <br>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-md-3">
                        <img style="height:200px;" src="{{asset('images/backend_images/back_it.png')}}">
                    </div>
                    <div class="col-md-8 text-left">
                        <h3>GUIDA SUL TRADING FOREX</h3>
                        <p>
                            Siccome il trading di valute ha i suoi metodi e metodologie, con questa guida ti offriremo i termini più importanti che ogni trader deve conoscere per avere più possibilità di successo.
                        </p>
                        <p>
                            Questo ebook è stato scritto per gettare le basi necessarie a costruire qualcosa nel mondo del forex. Le tecniche che troverai in questo ebook ti aiuteranno a diventare un trader più sicuro e di successo.
                        </p>
                        <p>
                            La guida sul trading forex ha lo scopo di insegnare a fare trading a quei trader di tutti i livelli che vogliono apprendere le metodologie di maggior successo.
                        </p>
                        <br>
                        <a class="btn btn-warning" style="background-color:#FDBA48; color:#000000;" href=""  data-toggle="modal" data-target="#exampleModalCenter">Scarica gratis!</a>
                        <br>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="col-md-3">
                        <img style="height:200px;" src="{{asset('images/backend_images/back_it.png')}}">
                    </div>
                    <div class="col-md-8 text-left">
                        <h3>COSA C’È DA SAPERE PRIMA DI INIZIARE A FARE TRADING FOREX</h3>
                        <p>
                            Se hai conoscenze limitate del mercato forex, o se non sai come funziona o come si fa trading, ma speri di fare un mucchio di soldi, allora lascia stare e risparmiati tempo e denaro. Questa guida introduttiva ti insegna come ottenere dei successi nel lungo termine, spiegandoti le possibilità reali del mercato forex che tutti i trader alle prime armi dovrebbero conoscere.
                        </p>
                        <p>
                            Questo ebook ti aiuterà ad evitare degli errori molto cari che spesso commettono i principianti. Imparerai degli aspetti fondamentali per avere successo, ti verrà spiegato come proteggere i tuoi fondi e come creare la tua strategia. Questo ebook ti aiuterà a ridurre i rischi al minimo e a muovere i tuoi primi passi.
                        </p>
                        <p>
                            Con gli strumenti giusti e questa fantastica guida a disposizione, hai tutte le possibilità di diventare un trader di successo.
                        </p>
                        <br>
                        <a class="btn btn-warning" style="background-color:#FDBA48; color:#000000;" href=""  data-toggle="modal" data-target="#exampleModalCenter">Scarica gratis!</a>
                        <br>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs col-md-offset-3 col-sm-offset-3" id="myTab" role="tablist">
                <li class="nav-item col-lg-3 col-xs-4">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img src="{{asset('images/backend_images/back_it.png')}}" alt="logo">VOL 1</a>
                </li>
                <li class="nav-item col-lg-3 col-xs-4">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset('images/backend_images/back_it.png')}}" alt="logo">VOL 2</a>
                </li>
                <li class="nav-item col-lg-3 col-xs-4">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img src="{{asset('images/backend_images/back_it.png')}}" alt="logo">VOL 3</a>
                </li>
            </ul>

            <!-- close tab -->
        </div>
    </section>





    <footer class="footer text-center">
        <h5>&copy;
            Tutti i diritti riservati!</h5>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>
</html>
