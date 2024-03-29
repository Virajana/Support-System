@extends("layouts.app")


@section("content")
    <div class="container" style="background-color:#B0C4DE">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-4">
                <form method="POST" action="{{ route("ticket.store") }}">
                    @csrf
                    <fieldset>
                        <h2 class="label">Ticket Form </h2>
                        <hr/>
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="customer_name" id="customer_name"
                                   class="form-control @error('customer_name') is-invalid @enderror"
                                   value="{{ ( !empty(old('customer_name')) ? old('customer_name') : '' )  }} "/>
                            @error('customer_name')
                            <span class="help invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="customer_phone_number" id="customer_phone_number"
                                   class="form-control @error('customer_phone_number') is-invalid @enderror"
                                   value="{{ ( !empty(old('customer_phone_number')) ? old('customer_phone_number') : '' ) }}"/>
                            @error('customer_phone_number')
                            <span class="help invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="customer_email" id="customer_email"
                                   class="form-control @error('customer_email') is-invalid @enderror"
                                   value="{{ ( !empty(old('customer_email')) ? old('customer_email') : '' ) }}"/>
                            @error('customer_email')
                            <span class="help invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Problem Description</label>
                            <textarea rows="5" name="ticket_description" id="ticket_description"
                                      class="form-control @error('ticket_description') is-invalid @enderror"
                            >{{ ( !empty(old('ticket_description')) ? old('ticket_description') : '' ) }}</textarea>
                            @error('ticket_description')
                            <span class="help invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" > Submit Ticket</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
