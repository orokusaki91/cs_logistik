@extends('layouts.app') 

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
<!-- Main -->
<div id="main" class="sredina">
    <div class="main">
        <img src="{{ asset('img/main/1.png') }}">
        <h5>Kompetent</h5>
        <p>Unsere Kunden geniessen von unseren Erfahrungen und Fachkenntnissen.</p>
    </div>
    <div class="main">
        <img src="{{ asset('img/main/2.png') }}">
        <h5>Partnerschaftlich</h5>
        <p>Wir pflegen unsere langjährigen Partnerschaften und freuen uns auch Sie in Zukunft als unseren Partner und Kunden begrüssen zu dürfen.</p>
    </div>
    <div class="main">
        <img src="{{ asset('img/main/3.png') }}">
        <h5>Effizient</h5>
        <p>Eine schnelle und umweltfreundliche Lieferung mit unserer Flotte hat bei uns oberste Priorität.</p>
    </div>
</div>
<!-- Middle -->
<div id="sredina">
    <br><br><br><br>
    <img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
    <div class="sredina_levo">
        <img src="{{ asset('img//sredina/1.png') }}" alt="">
    </div>
    <div class="sredina_desno">
        <h3>Die Firma CS Logistik GmbH in Zahlen:</h3>
        <img src="{{ asset('img/kosa-bela.png') }}" alt="" class="kosa-bela">
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina1">
        <p>Wir beschäftigen im Moment 16 Fahrzeuge von Lieferwagen bis Hänger Zug und Sattelschlepper für die Stückgutverteilung in der Schweiz.</p>
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina2">
        <p>Bedient wird täglich die ganze Schweiz ausser das Wallis, den Tessin und Graubünden. Diese 3 Regionen beliefern wir mit unseren regionalen Partnern innert 48 Stunden.</p>
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina3">
        <p>- Unser Umschlagslager hat eine Grundfläche von rund 2000 m2<br>
            - Zusätzlich Stellplätze in den Regalen 1100 Paletten<br>
            - Bühne für Lager oder kommisionier Arbeiten 350 m2<br>
            - Rampenplätze für Kleinfahrzeuge 4<br>
        - Rampenplätze für LKW&#39;s 15</p>
        <p>Der komplette Lagerraum ist vom Zollamt Pratteln für externe Spediteure als zugelassener Empfänger abgenommen und bewilligt.</p>
        <p>Gerne erarbeiten wir Ihnen, eine auf Ihre Bedürfnisse ausgearbeitete Offerte für unsere Dienstleistungen zur Verfügung.</p>
    </div>
</div>
<img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
<br><br><br><br>
<div id="testimonials">
    <div class="wrapper">
        <div class="slider">
            <h1>Kein Weg ist zu schwer</h1>    
        </div>
    </div>
</div>
<div class="sredina">
    <img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
    <div id="services">
        <h1>Dienstleistungen</h1>
        <div id="services2">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Transport Schweiz</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Lagerung</label>
            <section id="content1">
                <img src="{{ asset('img/where_are_you_from/road_sign_rectangal_blank.png') }}" alt="">
                <div class="content1">
                    <p>Wir beliefern die ganze Schweiz mit Stückguttransport oder als Teil- und Ganzwagenladung. Auch bieten wir Extrafahrten für Stückguttransporte.
                    Geniessen Sie von unserer hohen Dienstleistungsqualität.</p>

                    <ul>
                        <li>Bereitstellung von qualitativ hochwertigen Transportdienstleistungen für alle unsere Kunden</li>
                        <li>Wir investieren in unsere Angestellten, um einen besseren Service und Unternehmenswachstum zu bieten</li>
                        <li>Wir sorgen uns um unsere Umwelt mit den neuesten Standards unserer
                        Branche</li>
                        <li>Die Sicherheit hat bei uns oberste Priorität bei der Gewährleistung sicherer Arbeitsabläufe</li>
                        <li>Wir investieren in neueste Technologien, um schnelle, präzise und
                        kosteneffektive Dienstleistungen zu bieten</li>
                    </ul>       
                </div>       
            </section>
            <section id="content2">
                <img src="{{ asset('img/where_are_you_from/road_sign_rectangal_blank.png') }}" alt="">
                <div class="content1">
                    <ul>
                        <li>Wir verfügen über rund 2000m2 Grundfläche für den Umschlag und Lagerung von Gütern.</li>
                        <li>Zusätzliche Stellplätze für 1100 Paletten.</li>
                        <li>Wir vermieten Lagerflächen individuell nach Kundenwunsch.</li>
                        <li>Wir verwalten das Lager
                        zuverlässig und kompetent.</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="sredina"> 
    <div id="contact"> 
        <img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
        <div class="wrapper">
            {{-- <div class="rect"><img src="Slike/rectangle.png" alt=""></div> --}}
            <div id="contact_us">
                <br><br>
                <h1>Kontaktieren Sie uns für eine unverbindliche Beratung</h1>
                <div class="contact_us_levo">
                    <h3>CS Logistik GmbH</h3>
                    <p><span style="font-weight:bold;">Adress:</span><span style="margin-left:20px;">Unterfeldstrasse 15, 4410 Liestal, Schweiz</span>
                    </p>
                    <p><span style="font-weight:bold;">Tel:</span><span style="margin-left:45px;">+41 (0) 61 905 16 50</span>
                    </p>
                    <p><span style="font-weight:bold;">Fax:</span><span style="margin-left:42px;">+41 (0) 61 905 16 59</span>
                    </p>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5391.356367053776!2d7.715393548167597!3d47.49618232108477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791ca05a738cb57%3A0xbc661e9df9db7f5a!2sUnterfeldstrasse+15%2C+4410+Liestal%2C+Switzerland!5e0!3m2!1sen!2srs!4v1524226213525" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="contact_us_desno">
                    <form action="{{ url('ajax/contact') }}" method="post">
                        <label for="name">Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <p class="thisfield">* Dieses Feld wird benötigt...</p>
                        <br><br>
                        <label for="lname">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your email..">
                        <p class="thisfield">* Dieses Feld wird benötigt...</p>
                        <br><br>
                        <label for="Subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject..">     
                        <p class="thisfield">* Dieses Feld wird benötigt...</p>
                        <br><br>
                        <label for="Messages">Messages</label><br><br>
                        <textarea style="max-width:98%;" rows="6" cols="79" name="comment" form="usrform"></textarea>
                        <p class="thisfield">* Dieses Feld wird benötigt...</p>
                        {{ csrf_field() }}
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
<script>
    $(function () {
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            console.log('entered');
            var form = $(this);
            var formData = form.serialize();
            $.ajax({
                url: 'ajax/contact',
                data: formData,
                method: 'post',
                success: function (response) {
                    // empty all previous errors 
                    $('.has-error').removeClass('.has-error').text('');
                    var errors = response.errors;
                    if ($.isEmptyObject(errors)) {
                        location.reload();
                    } else { 
                        // print the errors
                        $.each(errors, function (key, val) {
                            var input = form.find('[name="'+ key +'"]');
                            input.next().addClass('has-error').text(val[0]);
                        });
                    }
                },
                errors: function() {
                    location.reload();
                }
            });
        });

        @if(Session::has('success'))
        swal(
            '{{ __('headings.account_created_title') }}',
            '{{ Session::get('success') }}',
            'success'
            );
        @elseif(Session::has('error'))
        swal(
            '{{ __('headings.account_created_title') }}',
            '{{ Session::get('error') }}',
            'error'
            );
        @endif
    });
</script>
@stop