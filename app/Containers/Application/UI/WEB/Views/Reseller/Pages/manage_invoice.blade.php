@extends("application::Layouts.layout")
@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

  <!-- begin:: Subheader -->
  <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">

       Hóa đơn           
      </h3>

        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
          <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
          <span class="kt-subheader__breadcrumbs-separator"></span>
          <a href="" class="kt-subheader__breadcrumbs-link">
          Quản lý hóa đơn                     </a>
         
          
          <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        </div>
      </div>
   
    </div>
  </div>
  <!-- end:: Subheader -->

  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <div class="kt-portlet kt-portlet--mobile">
      <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
          <span class="kt-portlet__head-icon">
            <i class="kt-font-brand flaticon2-line-chart"></i>
          </span>
          <h3 class="kt-portlet__head-title">
            Quản lý hóa đơn
           
          </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
          <div class="kt-portlet__head-wrapper">
            <div class="kt-portlet__head-actions">
           
              <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                Thêm mới
              </a>
            </div>  
          </div>    </div>
        </div>

        <div class="kt-portlet__body">
          <!--begin: Search Form -->
          <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
              <div class="col-xl-8 order-2 order-xl-1">
                <div class="row align-items-center">        
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-input-icon kt-input-icon--left">
                      <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                      <span class="kt-input-icon__icon kt-input-icon__icon--left">
                        <span><i class="la la-search"></i></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">
                      <div class="kt-form__label">
                        <label>Status:</label>
                      </div>
                      <div class="kt-form__control">
                        <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
                          <option value="">All</option>
                          <option value="1">Pending</option>
                          <option value="2">Delivered</option>
                          <option value="3">Canceled</option>
                          <option value="4">Success</option>
                          <option value="5">Info</option>
                          <option value="6">Danger</option>
                        </select></div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                <a href="#" class="btn btn-default kt-hidden">
                  <i class="la la-cart-plus"></i> Thêm mới
                </a>
                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
              </div>
            </div>
          </div>
          <!--end: Search Form -->
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
          <!--begin: Datatable -->
          <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="json_data" style="">
            <table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head">
              <tr class="kt-datatable__row" style="left: 0px;">
                <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check">
                  <span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
                    <input type="checkbox">&nbsp;<span></span></label></span>
                </th>
                    <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 33px;">ID</span></th>
                    <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Tên khách hàng</span></th>
                    <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Tên dịch vụ</span></th
                      >
                      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Ngày đăng ký</span></th>
                      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Ngày sử dụng</span></th>
                      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Tổng tiền</span></th>
                      <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Trạng thái</span></th>
                       
                        <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Hành động</span></th>
                      </tr></thead>
                      <tbody class="kt-datatable__body" style=""><tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                        <td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID">
                          <span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td>
                          <td data-field="OrderID" class="kt-datatable__cell"><span style="width: 33px;">075</span></td>
                          <td data-field="Country" class="kt-datatable__cell"><span style="width: 133px;">Nguyễn Văn B</span></td>
                          <td data-field="ShipAddress" class="kt-datatable__cell"><span style="width: 133px;">VPS VIP</span></td>
                          <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 133px;">2/12/2018</span></td>
                          <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 133px;">31/12/2018</span></td>
                          <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 133px;">$459.30</span></td>
                          <td data-field="Status" class="kt-datatable__cell"><span style="width: 133px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">PAID</span></span></td>
                         
                          <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
                            <span style="overflow: visible; position: relative; width: 110px;">            
                                
                             <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">              
                              <i class="la la-edit"></i>
                              </a>            
                              <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                                 <i class="la la-trash"></i>           
                               </a>          
                             </span>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                     <div class="kt-datatable__pager kt-datatable--paging-loaded">
                      <ul class="kt-datatable__pager-nav">
                        <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                        <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                        <li style=""></li>
                        <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
                        <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
                        <li style=""></li>
                        <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
                        <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
                      </ul>
                      <div class="kt-datatable__pager-info">
                        <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
                          <select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98">
                            <option class="bs-title-option" value=""></option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                    </div>
                    <span class="kt-datatable__pager-detail">Showing 1 - 10 of 40</span></div></div></div>
          <!--end: Datatable -->
        </div>
      </div>  </div>
      <!-- end:: Content -->        </div>


      @endsection