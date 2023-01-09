<div class="modal fade modal-danger text-left" id="seeMore{{ $new->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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




                            @if (App::getLocale() == 'ar')
                                {{-- desc_ar --}}
                                <div class="col-12">
                                    <label for="desc_ar">{{ __('models.desc_ar') }}</label>
                                    <textarea class="form-control editor" cols="40" rows="10"id="desc_ar" name="desc_ar" >{{ old('desc_ar' , $new->desc_ar) }}</textarea>
                                </div>
                            @else

                                {{-- desc_en --}}
                                <div class="col-12">
                                    <label for="desc_en">{{ __('models.desc_en') }}</label>
                                    <textarea class="form-control editor" cols="40" rows="10"id="desc_en" name="desc_en" >{{ old('desc_en' , $new->desc_en) }}</textarea>
                                </div>

                            @endif









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
