@extends('layouts.squelette')
@section('projects')
<div class="contents">
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Projets</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Exporter
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Exporter</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-print"></i> Printer</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>                                    
                                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-csv"></i> CSV</a>
                                        </div>
                                    </div>
                                    
                                    <div class="action-btn">
                                        <a href="" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Ajouter</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="userDatatable orderDatatable shipped-dataTable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless border-0">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <div class="d-flex align-items-center">

                                                 

                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Nome de projet</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">date de commencement</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Status</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Amount</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class=" userDatatable__imgWrapper d-flex align-items-center">
                                                        <div class="checkbox-group-wrapper">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-12">
                                                                    <label for="check-grp-12">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    #02-0003
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    Kellie Marquot
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    <span class="order-bg-opacity-success  text-success radius-xs active">shipped</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    $4,248.66
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex">
                                                    <li><a href="#" class="edit"><span data-feather="edit"></span></a></li>
                                                    <li><a href="#" class="remove"><span data-feather="trash-2"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <!-- End: tr -->


                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class=" userDatatable__imgWrapper d-flex align-items-center">
                                                        <div class="checkbox-group-wrapper">
                                                            <div class="checkbox-group d-flex">
                                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                    <input class="checkbox" type="checkbox" id="check-grp-13">
                                                                    <label for="check-grp-13">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    #02-0003
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    Kellie Marquot
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    <span class="order-bg-opacity-warning  text-warning radius-xs active">Awaiting Shipment</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    $4,248.66
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex">
                                                    <li><a href="#" class="edit"><span data-feather="edit"></span></a></li>
                                                    <li><a href="#" class="remove"><span data-feather="trash-2"></span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <!-- End: tr -->



                                    
                                    </tbody>
                                </table><!-- End: table -->
                            </div>
                            <div class="d-flex justify-content-sm-end justify-content-start mt-15 pt-25 border-top">

                                <nav class="atbd-page ">
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                        <li class="atbd-pagination__item">
                                            <div class="paging-option">
                                                <select name="page-number" class="page-selection">
                                                    <option value="20">20/page</option>
                                                    <option value="40">40/page</option>
                                                    <option value="60">60/page</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>


                            </div>
                        </div><!-- End: .userDatatable -->
                    </div><!-- End: .col -->
                </div>
            </div>
  

@endsection