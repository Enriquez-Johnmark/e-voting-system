@extends('layouts.template')
@section('pageTitle','Products')
@section('content')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
<div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">

                            <h3 class="kt-subheader__title">
                                Products               
        </h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                        </div>
                        
                    </div>
</div>
            <div id="product_content"> 
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-portlet kt-portlet--tabs">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#product" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                    <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#000000"/>
                                                    <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                                    <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg> Election Title
                                        </a>
                                    </li>

                                
                                    
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                                
                                <div class="tab-content">
                                                <div class="tab-pane active" id="product" role="tabpanel">
                                        

    @if(Session::has('success'))
                        <div class="alert alert-light alert-elevate" role="alert">
                            <div class="alert-icon">
                                <i class="flaticon-warning kt-font-brand"></i>
                            </div>
                                        <div class="alert-text">
                                            <div class="alert alert-success bg-success text-white">
                                                {{Session::get('success')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        </div>
                        </div>
    @endif
    
<!--  <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addProduct">Add Products</button> -->
    <!-- <button type="button" class="btn btn-primary waves-effect waves-light" id="add_product">Add Title</button> -->


    <br><br>
    <!--begin: Datatable -->
    <table class="table table-striped- table-bordered table-hover table-checkable" id="tab1">
                                <thead>
                                            <tr>
                                                <!-- <th style="width: 10%;">Picture</th> -->
                                                <th>Election Title</th>

                                                <th>Actions </th>
                                                
                                                
                                            </tr>
                                </thead>
        
                                <tbody>
                                            
                                            @foreach ($allTitles as $title)
                                            <tr>
                                                <!-- <td style="width: 10%;"> @if(!empty($product->product_image))
                                                <img src="{{ asset('/images/backend_images/products/large/'.$product->product_image) }}" style="width:50px;">
                                                @endif </td> -->
                                                <td> {{$title->name}}  </td>
                                                
                                                    <td>
                                                    <span class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                                            <i class="la la-ellipsis-h"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href=""><i class="la la-eye"></i> Show Details</a>
                                                            <a class="dropdown-item" href=""><i class="la la-plus"></i> Add Variant</a>
                                                            
                                                        </div>
                                                    </span>
                                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                </td>

                                                
                                                
                                            </tr>
                                            @endforeach
                                            
                                            
                                            
                                            
                                
                                </tbody>
        
    </table>
    <!--end: Datatable -->
                
                                    </div>

                                </div>


                                </div>

                            

                        </div>

                    </div>
                </div>




@push('script')

<!-- End:: Organization Script -->

<!-- <script type="text/javascript">
$('#addProduct').on('shown.bs.modal', function () {
        // basic
        $('.my-select').select2({
            
        });
            });

</script> -->
<script>
$('#add_product').click(function () {
    $('#product_content').load("{{ route('title.create')}}");
});
</script>





<!-- Start::Branch Script -->

<!-- End::Branch Script -->

<!-- Start:: Warehouse Script -->





<!-- End:: Warehouse Script -->
@endpush



@endsection
