@extends("application::Layouts.layout")
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
      <div class="row">
        <div class="col-xl-12">
          <div class="kt-portlet">
            <div class="kt-portlet__head">
              <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">Thông tin tài khoản <small>chỉnh sửa thông tin tài khoản</small></h3>
              </div>
             
            </div>

    </div>

    <!-- Main content -->
    <section class="content">

      <div class="row">
       
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom" style="padding: 30px">
                <form class="form-horizontal form-profile">
                  <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Họ & tên đệm') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="first-name">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Địa chỉ') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="address">
                        </div>
                      </div>
                  </div>

                   <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Tên') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="last-name">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Quận/Huyện') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="district">
                        </div>
                      </div>
                  </div>


                 <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Công ty') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="company">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Tỉnh/Thành phố') }}</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="city">
                        </div>
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Địa chỉ Email') }}</label>
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Quốc gia') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="nation">
                        </div>
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Thông tin thanh toán') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="info_payment" value="Sử dụng thông tin mặc định" disabled>
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Mã vùng') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="area_code">
                        </div>
                      </div>
                  </div>


                  <div class="form-group row">
                      <div class="col-md-6">
                        <div class="row">
                            <label for="inputName" class="col-sm-12 control-label">{{ __('Mã số thuế') }}</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="tax_code">
                            </div>
                        </div>
                         
                      </div>
                      <div class="col-md-6">
                         <label for="inputName" class="col-sm-12 control-label">{{__('Điện thoại') }}</label>
    
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="phone_number">
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12 text-center">
                      <button type="submit" class="btn btn-info">Lưu thay đổi</button>
                      <button type="submit" class="btn btn-default">Hủy</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection