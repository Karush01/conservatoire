<footer class="footer">
    <div class="footer__inner">
        <div class="container">
            <div class="abonnez-vous flex-lg-row flex-column">
                <div class="abonnez-vous-description">
                    <h4>Abonnez-vous à notre newsletter</h4>
                    <p>Dernières nouvelles, articles et ressources livrés chaque semaine dans votre boîte de
                        réception</p>
                </div>
                <div class="abonnez-vous-form">
                    <form>
                        <input type="email" id="email" name="email" placeholder="Entrez votre adresse email"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre adresse email'">
                        <button value="Subscribe">Sanbonner</button>
                    </form>
                </div>
            </div>
            <div class="footer-frame flex-lg-row flex-column">
                <div class="nous-contacter">
                    <h4>{{setting('site.footer_title')}}</h4>
                    <a href="tel:{{setting('site.footer_phone')}}">{{setting('site.footer_phone')}}</a>
                    <a href="tel:{{setting('site.footer_phone')}}">{{setting('site.footer_address')}}</a>
                    <ul class="social">
                        <li>
                            <a href="{{setting('site.footer_fb_link')}}" class="fb"></a>
                        </li>
                        <li>
                            <a href="{{setting('site.footer_tw_link')}}" class="tw"></a>
                        </li>
                        <li>
                            <a href="{{setting('site.footer_insta_link')}}" class="in"></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-access">
                    <button>Accès extranet pour étudiants et enseignants</button>
                </div>
            </div>
            <div class="footer-frame all-rights-reserved flex-md-row flex-column">
                <p>© Conservatoire Serge Rachmaninoff – Tous droits réservés</p>
                <img src="{{ URL::to('/storage/'.setting('site.footer_logo')) }}" alt="">
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    var swiper = new Swiper(".AgendaSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-agenda-button-next",
            prevEl: ".swiper-agenda-button-prev",
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper(".ActualitesSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-actualites-button-next",
            prevEl: ".swiper-actualites-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 10,
            },
        },
    });


    $(document).ready(function () {
        let artist = document.getElementById('artist');
        artist.innerHTML = ' <option disabled>Choisissez un artiste</option>';
        $("#tool_type").change(function () {
            let selectedItem = $(this).children("option:selected").val();
            $.ajax({
                url: '/getPostsByInstrument',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    selectedItem: selectedItem,
                },
                success: function (response) {
                    let teachers = response.teachers;
                    for (let i = 0; i < teachers.length; i++) {
                        artist.innerHTML += '<option value="' + teachers[i].id + '">' + teachers[i].title + '</option>';
                    }
                },
                error: function () {
                    alert('error');
                },
            });

        });
        $("#artist").change(function () {
            let selectedItem = $(this).children("option:selected").val();
             window.location.href = 'http://conservatoire/artist/' + selectedItem;
        });
    });
</script>


