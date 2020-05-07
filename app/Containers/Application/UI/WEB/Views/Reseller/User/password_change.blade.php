@extends("application::Layouts.layout")
@section('content')


<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
  <div class="row">
    <div class="col-xl-12">
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Thay đổi mật khẩu</h3>
          </div>

        </div>
        <form class="kt-form kt-form--label-right">
          <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
              <div class="kt-section__body">
                <div class="form-group row">
                  <label class="col-xl-4 col-lg-4 col-form-label">Mật khẩu hiện tại</label>
                  <div class="col-lg-8 col-xl-6">
                    <input type="password" class="form-control" value="" placeholder="Mật khẩu hiện tại">
                    <a href="../recover-password" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Quên mật khẩu ?</a>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4 col-lg-4 col-form-label">Mật khẩu mới</label>
                  <div class="col-lg-8 col-xl-6">
                    <input type="password" class="form-control" value="" placeholder="Mật khẩu mới">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-xl-4"></label>
                  <div class="col-xl-6 col-lg-8 col-form-label">
                   <div class="alert alert-success">
                    Lời khuyên cho một mật khẩu bảo mật<br>Sử dụng cả ký tự in hoa &amp; ký tự thường<br>Bao gồm ít nhất một ký tự đặc biệt (# $ ! % &amp; etc...)<br>Không sử dụng mật khẩu quá đơn giản
                  </div>
                </div>
              </div>
              <div class="form-group form-group-last row">
                <label class="col-xl-4 col-lg-4 col-form-label">Nhập lại mật khẩu</label>
                <div class="col-lg-8 col-xl-6">
                  <input type="password" class="form-control" value="" placeholder="Nhập lại mật khẩu">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <div class="row">
              <div class="col-lg-4 col-xl-4">
              </div>
              <div class="col-lg-8 col-xl-8">
                <button type="reset" class="btn btn-brand btn-bold">Thay đổi mật khẩu</button>&nbsp;
                <button type="reset" class="btn btn-secondary">Hủy</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection