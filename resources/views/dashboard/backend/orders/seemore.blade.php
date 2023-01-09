<div class="modal fade modal-danger text-left" id="seeMore{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel120">{{ __('models.update_status') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Notice-->





                                {{-- msg --}}
                                <div class="col-12">
                                    <label for="msg">{{ __('models.msg') }}</label>
                                    <textarea class="form-control editor" cols="40" rows="10"id="msg" name="msg" >{{ old('msg' , $order->msg) }}</textarea>
                                </div>











                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('models.close') }}</button>
            </div>

        </div>
    </div>
</div>
