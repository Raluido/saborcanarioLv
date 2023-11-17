@extends('layouts.master')
@section("content")
<form action="/charge" method="post" id="payment-form">
    <div class="form-row">
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display Element errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
  </form>
@endsection
@section("js")
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
@endsection
