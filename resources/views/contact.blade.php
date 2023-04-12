@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Contacts</h1>
                </div>
                <div class="page-content">
                    <div class="contacts">
                        <div class="contact-details">
                            <h3>Service d'assistance</h3>
                            <a href="#">0147235144</a>
                            <a href="#">support@rachmaninoff.fr</a>
                            <p>Vous pouvez nous contacter pour toute question relative à nos activités.</p>
                            <a href="#" class="write-letter">Écrire une lettre</a>
                        </div>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10498.907601594918!2d2.2959215!3d48.8634179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a4763b709c3696c!2sConservatoire%20Russe%20de%20Paris%20Serge%20Rachmaninoff!5e0!3m2!1sru!2sru!4v1675627230954!5m2!1sru!2sru"
                                width="100%" height="384px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="person-contacts">
                        <h2>Personnes clés</h2>
                        <div class="persons-list">
                            <div class="persons">
                                <div class="persons-image">
                                    <img src="{{ asset('assets/images/content/persons/1.jpg') }}" alt="">
                                </div>
                                <div class="persons-information">
                                    <h3>Arnaud Frilley </h3>
                                    <div class="persons-position">Président S.M.R.F. / Direction générale</div>
                                    <a href="#" class="persons-email">arnaud.frilley@rachmaninoff.fr</a>
                                    <div class="persons-languages">Français, russe, anglais</div>
                                </div>
                            </div>
                            <div class="persons">
                                <div class="persons-image">
                                    <img src="{{ asset('assets/images/content/persons/2.jpg ') }}" alt="">
                                </div>
                                <div class="persons-information">
                                    <h3>Stephan Gaubert </h3>
                                    <div class="persons-position">Direction artistique</div>
                                    <a href="#" class="persons-email">stephan.gaubert@rachmaninoff.fr</a>
                                    <div class="persons-languages">Français, anglais</div>
                                </div>
                            </div>
                            <div class="persons">
                                <div class="persons-image">
                                    <img src="{{ asset('assets/images/content/persons/3.jpg') }}" alt="">
                                </div>
                                <div class="persons-information">
                                    <h3>Yulia Mosman </h3>
                                    <div class="persons-position">Communication et évènements</div>
                                    <a href="#" class="persons-email">yulia.mosman@rachmaninoff.fr</a>
                                    <div class="persons-languages">Français, russe, anglais</div>
                                </div>
                            </div>
                            <div class="persons">
                                <div class="persons-image">
                                    <img src="{{ asset('assets/images/content/persons/4.jpg') }}" alt="">
                                </div>
                                <div class="persons-information">
                                    <h3>Pierre Cheremetieff </h3>
                                    <div class="persons-position">Président d’honneur S.M.R.F</div>
                                    <a href="#" class="persons-email">conservatoireSR@gmail.com</a>
                                    <div class="persons-languages">Français, russe, arabe</div>
                                </div>
                            </div>
                            <div class="persons">
                                <div class="persons-image">
                                    <img src="{{ asset('assets/images/content/persons/5.jpg') }}" alt="">
                                </div>
                                <div class="persons-information">
                                    <h3>Elena Cosson </h3>
                                    <div class="persons-position">Administration et développement</div>
                                    <a href="#" class="persons-email">elena.cosson@rachmaninoff.fr</a>
                                    <div class="persons-languages">Français, russe, anglais</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

