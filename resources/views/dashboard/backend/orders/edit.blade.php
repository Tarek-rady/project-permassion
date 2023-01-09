<div class="modal fade modal-danger text-left" id="order_Edit{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel120">{{ __('models.update_status') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('admin.orders.update' , $order->id) }}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" >
                    @method('PUT')
                    @csrf
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Notice-->






                          {{-- status_id --}}
                          <div class="col-12">
                            <label>{{ __('models.status') }}</label>
                            <div class="form-group">
                                <select class="select1 form-control" id="status" name="status">
                                    <option value="{{ $order->id }}">{{ $order->status }}</option>
                                      <option value=""> -- select status --</option>

                                      <option value="waiting" {{ old('status') == 'waiting' ? 'selected' : ''  }}>waiting</option>
                                      <option value="complated" {{ old('status') == 'complated' ? 'selected' : ''  }}>complated</option>
                                      <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : ''  }}>rejected</option>


                                   @error('status') <span class="text-danger">{{ $message }}</span>  @enderror

                                </select>
                            </div>
                        </div>




                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mr-1">{{ __('models.save') }}</button>
                    </div>
                </form>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('models.close') }}</button>
            </div>

        </div>
    </div>
</div>
