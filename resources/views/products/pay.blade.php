@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Pay with PayPal</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Pay with PayPal</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="container">
    <script src="https://www.paypal.com/sdk/js?client-id=ASRf9wvl3bNAwyONIQv_8a3QPIlYpkjpa0zzLBa3QiDsuwpUZX3YreK48qHYq1XJ4qYCRWTKTnGdJ6Bd&buyer-country=US&currency=USD"></script>
    <div id="paypal-button-container"></div>
    <script>
        paypal.Buttons({

            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '100'
                        }
                    }]
                });
            },

            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData){
                    window.location.href='http://localhost:8000/products/cart';
                });
            }
        }).render('#paypal-button-container');
    </script>

</div>


@endsection
