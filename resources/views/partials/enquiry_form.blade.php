
<style>
    .currency-btn {
        width: 60px; /* or any smaller value you prefer */
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        justify-content: center;
    }
    .small-input-group .btn,
    .small-input-group .input-group-text,
    .small-input-group .form-control {
        padding: 0.5rem 1rem; /* reduces height */
        font-size: 0.875rem; /* optional: smaller text */
        height: auto; /* allows the reduced padding to work */
        line-height: 1.2;
    }
</style>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Consultation Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form id="demo-form" class="mb-4" novalidate="novalidate" action="{{ route('send.enquiry') }}" method="POST">
                    @csrf
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-start text-sm-end mb-0">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200" placeholder="Type your name..." required/>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-start text-sm-end mb-0">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200" placeholder="Type your email..." required/>
                        </div>
                    </div>
                    <div class="cpi-input">
                        <div class="form-group row align-items-center border-width-2 border-radius-2 border-color-grey-200">
                            <label class="col-sm-3 text-start text-sm-end mb-0">Phone</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-3 border rounded mt-2 small-input-group">
                                    <button class="btn btn-light dropdown-toggle d-flex align-items-center cpi-drop currency-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="me-1">NG</span>
                                    </button>

                                    <div class="dropdown-menu w-100">
                                        <button type="button" class="dropdown-item" data-cpi-icon="🇳🇬" data-cpi-ext="+234" data-cpi-min-length="10" data-cpi-max-length="10">
                                            🇳🇬 Nigeria (+234)
                                        </button>

                                    </div>
                                    <span class="input-group-text bg-white text-muted border-0 cpi-ext-txt">+234</span>
                                    <input type="text" name="phone" class="form-control border-0 phone-input flex-shrink-1" style="outline: none;" pattern="[0-9]+" required minlength="10" maxlength="10" title="Enter a valid mobile number">
                                </div>
                                <input type="hidden" class="country-code-input">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 text-start text-sm-end mb-0">Company</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200" placeholder="Company name..." required/>
                        </div>
                    </div>
                    <div class="form-group row border-width-2 border-radius-2 border-color-grey-200">
                        <label class="col-sm-3 text-start text-sm-end mb-0">Message</label>
                        <div class="col-sm-9">
                            <textarea name="message" rows="5" class="form-control" placeholder="Type your message..." required></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <input type="submit" value="Submit Now" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1 right" style="float: right;" data-loading-text="Loading...">
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
