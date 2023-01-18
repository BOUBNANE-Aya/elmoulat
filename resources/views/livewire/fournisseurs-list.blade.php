<div>

<div class="contents">
 <div class="container-fluid">
 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                              
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Fournisseurs</h4>
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
                                        
                                          <button type="button" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic">
                                          <i class="la la-plus"></i>Ajouter</button>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
                                 @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>

        @endif
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
                                                <span class="userDatatable-title">Nome de fournisseur</span>
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

                                          {{-- @if($projets->count() > 0)

                                          @foreach($projets as $projet)
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
                                                      {{$projet->name}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    <span class="order-bg-opacity-success  text-success radius-xs active">shipped</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                     {{$projet->date}}
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex">
                                                <li><a href="#" class="remove"><i class="fa-regular fa-eye"></i></a></li>
                                                <li><a href="#" class="remove" data-toggle="modal" data-target="#edit-modal" wire:click='editProject({{$projet->id}})'><i class="fa-regular fa-pen-to-square"></i></a></li>            
                                                <li><a href="#" class="remove" data-toggle="modal" data-target="#modal-info-delete" wire:click='deleteProject({{$projet->id}})' style="color: red;"><i class="fa-solid fa-trash"></i></a></li>  
                                                
                                                </ul>
                                            </td>
                                        </tr>
                                          @endforeach
                                            @else
                                          @endif
                                        
                                        <!-- End: tr --> --}}


                                    



                                    
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
  

{{--add project  modal --}}
 <div wire:ignore.self class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
    
    
    
                    <h6 class="modal-title">Ajouter Nouveau Projet</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                
                    <form  wire:submit.prevent='saveData'>
                        <div class="form-basic">
                            <div class="form-group mb-25">
                                <label>Nom de projet</label>
                                <input class="form-control form-control-lg" type="text" name="name" wire:model.defer='name' >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>

                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label>Date de commencement</label>
                                <input class="form-control form-control-lg" type="date" wire:model.defer='date' name="date" >
                                <div class="form-inline-action d-flex justify-content-between align-items-center"> 
                                </div>
                                @error('date')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Enregistrer projet</button>
                </div>
            </form>
            </div>
        </div>
    
    
    </div>




 {{-- edit project model --}}

 <div wire:ignore.self class="modal-basic modal fade show" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
    
    
    
                    <h6 class="modal-title">Modifier Projet</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                
                    <form  wire:submit.prevent='editData'>
                        <div class="form-basic">
                            <div class="form-group mb-25">
                                <label>Nom de projet</label>
                                <input class="form-control form-control-lg" type="text" name="name" wire:model.defer='name' >
                                @error('name')
                                <span class="text-danger">{{$message}}</span>

                                @enderror
                            </div>
                            <div class="form-group mb-25">
                                <label>Date de commencement</label>
                                <input class="form-control form-control-lg" type="date" wire:model.defer='date' name="date" >
                                <div class="form-inline-action d-flex justify-content-between align-items-center"> 
                                </div>
                                @error('date')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Enregistrer projet</button>
                </div>
            </form>
            </div>
        </div>
    
    
    </div>


    {{-- delete model  --}}

     <!-- ends: .modal-info-confirmed -->

            <div wire:ignore.self  class="modal-info-delete modal fade show" id="modal-info-delete" tabindex="-1" role="dialog" aria-hidden="true">


                <div class="modal-dialog modal-sm modal-info" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-info-body d-flex">
                                <div class="modal-info-icon warning">
                                    <span data-feather="info"></span>
                                </div>

                                <div class="modal-info-text">
                                    <h6>Do you Want to delete these items?</h6>     
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger btn-outlined btn-sm" data-dismiss="modal">No</button>
                            <button type="button" wire:click='deleteData' class="btn btn-success btn-outlined btn-sm" data-dismiss="modal">Yes</button>

                        </div>
                    </div>
                </div>


            </div>
            <!-- ends: .modal-info-Delete -->

</div>

@push('scripts')
 <script>

  window.addEventListener('close-model', event =>{
           $('#modal-basic').modal('hide');
           $('#edit-modal').modal('hide');
           $('#modal-info-delete').modal('hide');
  })
   
  
 </script>
    
@endpush

