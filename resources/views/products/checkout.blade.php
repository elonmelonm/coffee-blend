@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Checkout</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 ftco-animate">
                <form method="POST" action="{{ route('proccess.checkout') }}" class="billing-form ftco-bg-dark p-3 p-md-5">
                    <h3 class="mb-4 billing-heading">Billing Details</h3>
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firt Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">State / Country</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="state" id="" class="form-control">
                                        <option value="France">France</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Hongkong">Hongkong</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="streetaddress">Street Address</label>
                                <textarea name="address" cols="10" rows="10" class="form-control" placeholder="House number and street name"></textarea>
                                </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    placeholder="Appartment, suite, unit etc: (optional)">
                            </div>
                        </div> --}}
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Town / City</label>
                                <input name="city" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">Postcode / ZIP *</label>
                                <input name="zip_code" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input name="phone" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input name="email" type="text"class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="price" type="text" value="{{ Session::get('price') }}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <button  type="submit" name="submit" class="btn btn-primary py-3 px-4">Place an order</button>

                                </div>
                            </div>
                        </div>
                        <p></p>
                    </div>
                </form>
                <!-- END -->
            </div>
        </div>
    </div>
</section>

@endsection
