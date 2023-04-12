@extends('layouts.app')

@section('content')

    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Faites un don en ligne</h1>
                </div>
                <div class="page-content">

                    <div class="charity-description">


                        <div class="donation">

                            <div class="donation-information">
                                <label>Montant de votre don</label>
                                <input class="euro" type="text" placeholder="0.00" onfocus="this.placeholder = ''" onblur="this.placeholder = '0.00'">
                                <input type="text" placeholder="Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prénom'">
                                <input type="text" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'">
                                <input type="text" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                <input type="text" placeholder="Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telephone'">
                                <input type="text" placeholder="Mon message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mon message'">
                            </div>


                            <div class="bank-card">

                                <div class="card">

                                    <input class="card-number" type="text" placeholder="Numéro de la carte de crédit ou de débit" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numéro de la carte de crédit ou de débit'">
                                    <div class="card-secret-data">
                                        <input type="text" placeholder="MM / AA" onfocus="this.placeholder = ''" onblur="this.placeholder = 'MM / AA'">
                                        <input type="text" placeholder="CVC" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CVC'">
                                        <input type="text" placeholder="Code postal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Code postal'">
                                    </div>

                                </div>

                                <div class="data-confirmation">
                                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                    <label for="styled-checkbox-1">J'autorise à être cité parmi les bienfaiteurs du Conservatoire.</label>
                                </div>

                                <button value="confirmation">Finaliser mon don par carte bancaire</button>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection

