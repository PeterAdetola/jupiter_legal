
<div class="modal fade" id="pkgModal{{ $count }}" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> {{-- Add modal-dialog-centered here --}}
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Consultation Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="p-4">
                    You are about to sign up for {{ $package['key'] }} which will cost you <span class="font-bold">NGN{{ $package['price'] }}</span>.<br/><br/>
                    Provide your required details to further your consultation
                </p>
                <hr>

                <form id="demo-form" class="mb-4 px-4" novalidate="novalidate" action="{{ route('consult.request') }}" method="POST"> {{-- Add px-4 for consistent padding --}}
                    @csrf
                    <div class="form-group row align-items-center mb-3"> {{-- Added mb-3 for spacing between groups --}}
                        <label class="col-sm-3 text-start text-sm-end mb-0">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200" placeholder="Type your name..." required/>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-3"> {{-- Added mb-3 for spacing between groups --}}
                        <label class="col-sm-3 text-start text-sm-end mb-0">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200" placeholder="Type your email..." required/>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center"> {{-- Use justify-content-center for footer content --}}
                        <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            {{-- REMOVE float: right; --}}
                            <input type="submit" value="Proceed" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
