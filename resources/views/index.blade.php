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
        <h5>{!! $homeFooter1->title !!}</h5>
        {!! $homeFooter1->text !!}
    </div>
    <div class="main">
        <img src="{{ asset('img/main/2.png') }}">
        <h5>{!! $homeFooter2->title !!}</h5>
        {!! $homeFooter2->text !!}
    </div>
    <div class="main">
        <img src="{{ asset('img/main/3.png') }}">
        <h5>{!! $homeFooter3->title !!}</h5>
        {!! $homeFooter3->text !!}
    </div>
</div>
<!-- Middle -->
<div id="sredina">
    <br><br><br><br>
    <img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
    <div class="sredina_levo">
        <img src="{{ asset('storage/uploads/about_us/' . $aboutUs->image) }}" alt="">
    </div>
    <div class="sredina_desno">
        <h3>Die Firma CS Logistik GmbH in Zahlen:</h3>
        <img src="{{ asset('img/kosa-bela.png') }}" alt="" class="kosa-bela">
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina1">
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina2">
        <img src="{{ asset('img/sredina/small-truck.png') }}" class="kosa-sredina3">
        {!! $aboutUs->text !!}
    </div>
</div>
<br><br><br><br>
<img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
<br><br><br><br>
<div id="testimonials" style="background: url({{ asset('storage/uploads/slogan/' . $slogan->image) }}) fixed no-repeat center;">
    <div class="wrapper">
        <div class="slider">
            {!! $slogan->text !!}
        </div>
    </div>
</div>
<div class="sredina">
    <img src="{{ asset('img/kosa.png') }}" alt="" class="kosa-plava">
    <div id="services">
        <h1>Dienstleistungen</h1>
        <div id="services2">
            @php $i = 1; @endphp
            @foreach($services as $service)
                <input id="tab{{ $i }}" type="radio" name="tabs" checked>
                <label for="tab{{ $i }}">{{ $service->title }}</label>
                <section id="content1">
                    <img src="{{ asset('storage/uploads/service/' . $service->image) }}" alt="">
                    <div class="content1">{!! $service->text !!}</div>       
                </section>
                @php $i++; @endphp
            @endforeach
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
                    <form action="{{ url('ajax/contact') }}" method="post" id="contactForm">
                        <label for="name">Name*</label>
                        <input type="text" id="fname" name="name" placeholder="Your name..">
                        <p class="thisfield">
                            @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                            @endif
                        </p>
                        <br><br>
                        <label for="lname">Email*</label>
                        <input type="text" id="email" name="email" placeholder="Your email..">
                        <p class="thisfield">
                            @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                        </p>
                        <br><br>
                        <label for="Subject">Subject*</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject..">     
                        <p class="thisfield">
                            @if ($errors->has('subject'))
                                {{ $errors->first('subject') }}
                            @endif
                        </p>
                        <br><br>
                        <label for="Messages">Message*</label><br><br>
                        <textarea style="max-width:100%;" rows="6" cols="79" name="comment"></textarea>
                        <p class="thisfield">
                            @if ($errors->has('comment'))
                                {{ $errors->first('comment') }}
                            @endif
                        </p>
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
            var form = $(this);
            var formData = form.serialize();
            var submitButton = form.find('input[type="submit"]');
            submitButton.attr('disabled', true);
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
                        submitButton.attr('disabled', false);
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
            'Erledigt!',
            '{{ Session::get('success') }}',
            'success'
            );
        @elseif(Session::has('error'))
        swal(
            'Fehler!',
            '{{ Session::get('error') }}',
            'error'
            );
        @endif
    });
</script>
@stop